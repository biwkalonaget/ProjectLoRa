
<?php

   /* session_start();
    if (($_POST['username']=="biwties") && ($_POST['password']=="1234"))
	{
	   	$_SESSION['user'] = 'biwties';
       	$_SESSION['pass'] = '1234';
	   	header("location:home.php");
	}
	else
	{
		echo "Error Login";
        	echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"3; 	URL=Login.php\">";
	}
	*/

	session_start();
	
	include ('../database.php');

    $username = $_POST["username"];
    $password = MD5($_POST['password']);
		$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";

		$result = mysqli_query($con,$sql);
    
		if(mysqli_num_rows($result) == 1){
 
			$row = mysqli_fetch_array($result);
			
			$_SESSION["user_id"] = $row["user_id"];
			$_SESSION["fisrtname"] = $row["firstName"];
			$_SESSION["lastname"] = $row["lastName"];
			$_SESSION["username"] = $row["username"];
			$_SESSION["password"] = $row["password"];
			$_SESSION["isadmin"] = $row["isadmin"];

		if($row["isadmin"] == 1 ){ 


		  Header("Location: ../adminpage.php");

		}

		if ($row["isadmin"] == 0 ){

		  Header("Location: ../home.php");

		}

	}
	
	else{
	  echo "<script>";
		  echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
		  echo "window.history.back()";
	  echo "</script>";

	}

	
        
    
	
?>    
 




