<?php  
	$country=$_POST['country'];
	$format=$_POST['format'];
	$id=$_POST['id'];
	$runs=$_POST['runs'];
	$status=$_POST['status'];
	$wickets=$_POST['wickets'];
	$runs_given=$_POST['runs_given'];
	$overs=$_POST['overs'];
	$con=mysqli_connect("localhost","root","","cricket");
	if(!$con){
		die("Could not connect to database");
	}
	$result=mysqli_query($con,"SELECT average,runs,economy,overs FROM stats WHERE format='$format' and id=$id ") or die("failed to query database" .mysql_error());
	$arr=mysqli_fetch_array($result);
	
	$total_overs=$arr[3]+$overs; # **
	$r=$arr[2]*$arr[3];
	$r=$r+$runs_given;
	$new_economy=round($r/$total_overs,2); # **

	$total_runs=$arr[1]+$runs; # **
	$w=0;
	if($arr[0]!=0){
		$w=$arr[1]/$arr[0];
	}
	else if($status!="out"){
		$w++;
	}
	if($status=="out"){
		$w++;
	}
	$new_average=round($total_runs/$w,2); #**

	if($runs>=100){
		$hundred=1;
		$fifty=0;
	}
	else if($runs>=50 && $runs<100){
		$hundred=0;
		$fifty=1;
	}
	else{
		$hundred=0;
		$fifty=0;
	}
	mysqli_query($con,"UPDATE stats SET average=$new_average,runs=$total_runs,hundreds=hundreds+$hundred,fifties=fifties+$fifty,wickets=wickets+$wickets,economy=$new_economy,overs=$total_overs WHERE format='$format' and id=$id");
	header("location: change.php?country=".$country."&format=".$format);
?>