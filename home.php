
<?php
session_start();

if (!$_SESSION["username"]){
 
  Header("Location: login.php");

}
else if ($_SESSION["isadmin"] == 0){

  $user_id = $_SESSION["user_id"];
  
?>

<!DOCTYPE html>
<html>
<title>Web application Tracking by LoRa</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="css/home.css">
<head>
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

<style>

a{
  cursor: pointer;
  

  }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
 
  
}

.active {
  background-color: #4CAF50;
  padding: 5px 10px;
  margin-top: 8px;
  margin-left: 5px;
  margin-right: 5px;
  border-radius: 10px;
  
}
</style>
</head>
<body class="w3-content" style="max-width:1300px">


<ul>
  <li><a class="active" href="#">UMR-UBU</a></li>
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">About</a></li>
  <li style="float:right"><a class="active" href="./incprocess/logoutprocess.php">Sign out</a></li>
</ul>

<div class="w3-row">

  <?php

  echo "<a onClick=\"PopupCenter('./edituserform.php?edit_id=$user_id;','edituser','900','700');\">";?>

    <div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <br>
    <br>
    <br>
      <h1 style="font-size:55px;font-family:JasmineUPC;"><?php echo $_SESSION["username"] ?> </h1>
    <div class="w3-padding-64">
    <img src="images/user.png" alt="Pet" style="width:50%">
        <p>&nbsp;</p>
        <p style="font-size:40px; font-family:JasmineUPC;"><?php echo $_SESSION["fisrtname"]." ".$_SESSION["lastname"] ?></p>
    </div>
  </div>
  
  <?php echo "</a>"; ?>
  

  
  <div class="w3-half w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
    <h1 style="font-size:55px;font-family:JasmineUPC;">DESCRIPTION</h1><br>
      <img src="images/car.png" class="w3-margin w3-circle" alt="Me" style="width:80%"> <br>
      <div class="w3-left-align w3-padding-large">
        <p>Description about the thing that will be attached ?</p>
        <p>Such as CAR</p>
      </div>
    </div>
  </div>
</div>


<div class="w3-row">
  <div class="w3-half w3-light-grey w3-center" style="min-height:800px" id="work">
    <div class="w3-padding-64">
    <h1 style="font-size:55px;font-family:JasmineUPC;">HISTORY</h1>
    <br>
    <br>
    <br>
      <p><img src="images/history.png" alt="Temp" style="width:65%"></p>
    </div>

  </div>
  <div class="w3-half w3-indigo w3-container" style="min-height:800px">
    <div class="w3-padding-64 w3-center">
    <h1 style="font-size:55px;font-family:JasmineUPC;">MINI MAP</h1>
    <br>
    <br>
    <p><img src="images/map.png" alt="map" style="width:100%; height:100%"></p>
    </div>
</div>

<!-- Third Grid: Swing By & Contact -->

<div class="w3-row" id="contact">
<a href = "userdevicetable.php"><div class="w3-half w3-dark-grey w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
    <h1 style="font-size:55px;font-family:JasmineUPC;">DEVICES</h1>
    </div> 
    <p style="margin-top:-20px"><img src="images/device.png" alt="alert" style="width:65%"></p>
  </div></a>
  <div class="w3-half w3-teal w3-container" style="height:700px">
    <div class="w3-padding-64 w3-padding-large">
    <h1 style="font-size:55px;font-family:JasmineUPC;">CONTACT</h1>
      <p class="w3-opacity">GET IN TOUCH</p>
      <form class="w3-container w3-card w3-padding-32 w3-white" action="/action_page.php" target="_blank">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Name">
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Email">
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input" style="width:100%;" type="text" required name="Message">
        </div>
        <button type="submit" class="w3-button w3-teal w3-right">Send</button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-footer w3-padding-16">
  <center><p style="font-weight:bold;">&copy; Web application Tracking by LoRa /<a href="http://www.sci.ubu.ac.th/" target="_blank"> Faculty of Science Ubon Ratchathani University.</a></p></center>
</footer>
<body background="/images/background.jpg">


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


</body>
</html>
<?php
}

else {
  Header("Location: login.php");
}
?>