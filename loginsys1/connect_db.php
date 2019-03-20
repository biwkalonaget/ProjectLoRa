<?php
	$serverName = "127.0.0.1";
	$userName = "root";
	$userPassword = "";
	$dbName = "c";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($objCon,"utf8");


?>