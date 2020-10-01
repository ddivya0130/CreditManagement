<?php

	$username = "epiz_26849691";
	$password = "TfPTMWyhYnZ";
	$server = 'sql304.epizy.com';
	$db ="epiz_26849691_ddcredit";	

	$con = mysqli_connect($server,$username,$password,$db);

	if($con){
		// echo "Connection Successful";
	?>
	<?php
	}else{
		echo "No connection";
	}

?>
