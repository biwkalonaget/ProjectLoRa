<?php

include('database.php');

$edit_id = $_GET['edit_id'];
$sql = "SELECT * FROM user WHERE user_id = '".$edit_id."' ";

$query = mysqli_query($con,$sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
$user_id = $result['user_id'];
$firstname = $result['firstName'];
$lastname = $result['lastName'];
$username= $result['username'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Users</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript">

function confirm_click()
{

return confirm("Are you sure ?");

}

</script>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/cssregister.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				<img src="images/user_test.png" alt="IMG">	
			</div>

				<form method="post" action="./incprocess/editadminuserProcess.php" class="login100-form validate-form">
					<span class="login100-form-title">
						Edit Users
                    </span>
                    
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="user_id" value="<?php echo str_pad($user_id,6,"0",STR_PAD_LEFT); ?>" readonly/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-info-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Firstname is required">
						<input class="input100" type="text" name="firstname" placeholder="Firstname" value="<?php echo $firstname ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-card" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Lastname is required">
						<input class="input100" type="text" name="lastname" placeholder="Lastname" value="<?php echo $lastname ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-card-o" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "username is required">
						<input class="input100" type="text" name="username" placeholder="username" value="<?php echo $username ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>


                    
					
					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" id="edit" name="edit" value="Edit" onclick="return confirm('Want to Edit Users ?');">
							
						
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>