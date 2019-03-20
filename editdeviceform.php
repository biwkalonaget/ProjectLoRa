
<?php

include('database.php');

$edit_id = $_GET['edit_id'];
$sql = "SELECT * FROM devicetype WHERE devicetype_id = '".$edit_id."' ";

$query = mysqli_query($con,$sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
$devicetype_id = $result['devicetype_id'];
$devicetypeName = $result['devicetypeName'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Device</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript">
/*
function confirm_click()
{

return confirm("Are you sure ?");

}*/

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
				<img src="images/device_test.png" alt="IMG">	
			</div>

				<form method="post" action="./incprocess/editadmindeviceProcess.php" class="login100-form validate-form">
					<span class="login100-form-title">
						EditDevice
                    </span>
                    
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="devicetype_id" value="<?php echo str_pad($devicetype_id,6,"0",STR_PAD_LEFT); ?>" readonly/>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-info-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid Device Name is required">
						<input class="input100" type="text" name="devicetypeName" placeholder="devicetypeName" value="<?php echo $devicetypeName ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-wifi" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" id="edit" name="edit" value="Edit" onclick="return confirm('Want to Edit Device ?');">
							
						
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