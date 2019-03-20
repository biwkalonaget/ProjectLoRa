<?php
	session_start();
    include('connect_db.php');

	$strSQL = "SELECT * FROM user WHERE username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objQuery)
	{
		echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านผิด กรุณาลองใหม่อีกครั้ง');window.location = './index.php';</script>";
		
	}
	else
	{
			$_SESSION["u_id"] = $objResult["u_id"];
			$_SESSION["usertype"] = $objResult["usertype"];

			session_write_close();
			
			if($objResult["usertype"] == 1)
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:user1.php");
			}
	}
	mysqli_close($objCon);
?>