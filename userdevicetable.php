<?php
include('database.php');

session_start();

$user_id = $_SESSION["user_id"];

if ($_SESSION["isadmin"] != 0){
 
  Header("Location: login.php");

}

else{


?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  
}

.buttondel {
  background-color: #FF6347; 
  color: white; 
  border-radius: 10px;
}

.buttondel:hover {
  background-color: #333333;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


.buttonedit {
  background-color: #32CD32;
  color: white; 
  border-radius: 10px;
}

.buttonedit:hover {
  background-color: #333333;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

}

.buttonadd {
  background-color: #1E90FF;
  color: white; 
  border-radius: 10px;
}

.buttonadd:hover {
  background-color: #333333;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

}

.buttonok {
  background-color: #333333;
  color: white; 
  border-radius: 10px;
}

.buttonok:hover {
  background-color: #333333;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

}


</style>
	<title>User Manage Devices</title>

  <script type="text/javascript">

  function PopupCenter(url, title, w, h) {  
   
    var dualScreenLeft = window.screenLeft;  
    var dualScreenTop = window.screenTop;  
              
    width =  window.innerWidth;  
    height = window.innerHeight;  
              
    var left = ((width / 2) - (w / 2)) + dualScreenLeft;  
    var top = ((height / 2) - (h / 2)) + dualScreenTop;  
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);  
  
    // Puts focus on the newWindow  
    if (window.focus) {  
        newWindow.focus();  
    }  
}

</script>


</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="styletable/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styletable/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styletable/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styletable/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styletable/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styletable/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styletable/css/util.css">
	<link rel="stylesheet" type="text/css" href="styletable/css/main.css">
<!--===============================================================================================-->
</head>
<body>

  <?php

    $sql= "SELECT device.device_id, devicetype.devicetype_id, devicetype.devicetypeName, device.deviceName, device.deviceDes
    FROM device
    JOIN devicetype ON devicetype.devicetype_id = device.devicetype_id
    JOIN user on user.user_id = device.user_id
    WHERE user.user_id = $user_id";

    $query = mysqli_query($con,$sql);

    echo "<div class='limiter'>
		        <div class='container-table100'>
			        <div class='wrap-table100'>
					      <div class='table'>";
    
          echo "<div class='row header'>

                  <div class='cell'>
                  Device EUI
                  </div>

                  <div class='cell'>
                  DeviceType
                  </div>

                  <div class='cell'>
                  NAME
                  </div>

                  <div class='cell'>
                  Description
                  </div>

                  <div class='cell'>
                  Manage Device
                  </div>

                  
                </div>";

    while($row = mysqli_fetch_array($query)) { 
  
    
          echo	"<div class='row'>";

          echo "<div class='cell' data-title='Device EUI:'>".str_pad($row['devicetype_id'],6,'0',STR_PAD_LEFT)."</div>";

          echo "<div class='cell' data-title='Device Type:'>".$row['devicetypeName']."</div>";

          echo "<div class='cell' data-title='Device Name:'>".$row['deviceName']."</div>";

          echo "<div class='cell' data-title='Description:'>".$row['deviceDes']."</div>";
     

          echo "<div class='cell' data-title='Manage Devices:'>";
          
          echo "<button type=\"submit\" class=\"button buttonedit\" onClick=\"PopupCenter('./editdeviceuserform.php?edit_id=$row[device_id];','editdeviceuser','900','700');\";>Edit</button>
                <a href='./incprocess/deluserdeviceProcess.php?delete_id= $row[device_id];'><input name=\"submit2\" type=\"submit\" class=\"button buttondel\" onclick=\"return confirm('Want to Delete ?');\" value=\" Delete\"/></a>";

          /*echo "<button type=\"submit\" class=\"button buttonedit\" onClick=\"javascript:window.open('./edituserform.php?edit_id=$row[user_id];', 'edituser' ,'menubar=no,toorlbar=no,location=no,scrollbars=no,status=no,resizable=no,width=750,height=750,top=150,left=500')\";>Edit</button>
          <span onclick='confirm_click();'><input name=\"Submit2\" type=\"submit\" class=\"button buttondel\" onclick=\"location.href='./deladminuserProcess.php?delete_id= $row[user_id]';\" value=\" Delete\"/></span>\
          <*/
        
          echo "</div>";
								
          echo "</div>";
          
          
              
            }

          echo "</div>";
              echo "<br><center><button type=\"submit\" class=\"button buttonadd\" onClick=\"PopupCenter('./adddeviceuserform.php','register','900','700');\";>ADD</button>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button type=\"submit\" class=\"button buttonok\" onClick=\"location.href='./home.php';\";>OK</button></center>";
              echo "</div>";
                  echo "</div>";

                  
                

            
						
  ?>




</script>
<!--===============================================================================================-->	
	<script src="styletable/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="styletable/vendor/bootstrap/js/popper.js"></script>
	<script src="styletable/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="styletable/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="styletable/js/main.js"></script>

</body>
</html>
<?php

}

?>