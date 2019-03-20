<?php
session_start();

if(!$_SESSION["username"]){

  header("Location: login.php");

}

else if($_SESSION["isadmin"] == 1){

?>

<!DOCTYPE html>
<html>
<title>Admin Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="css/adminpagehome.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<head>
<style>

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 17px;
  text-decoration: none;
  font-size: 15px;
  margin-top: 8px;
  margin-bottom: 8px;
  margin-left:8px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  margin-left:8px;
}

.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 20px;
  margin-top: 8px;
  margin-bottom: 8px;
  margin-right:9px;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>

<body class="w3-content" style="max-width:1300px">

<div class="topnav" id="myTopnav">
  <a class="active" href="#">UMR-UBU</a>
  <a href="#">Dashboard</a>
  <a href="#">About</a>
  <a style="float:right" class="active" href="./incprocess/logoutprocess.php">Sign out</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
 </div>

<div class="w3-row">

<a href="adminusertable.php"><div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <br>
    <br>
    <br>
      <h1 style="font-size:55px;font-family:JasmineUPC;">Manage Users</h1>
    <div class="w3-padding-64">
    <img src="images/user.png" alt="Pet" style="width:50%">
        <p>&nbsp;</p>
        <p style="font-size:40px; font-family:JasmineUPC;"><?php ?></p>
    </div>
  </div></a>

  <a href="admindevicetable.php"><div class="w3-half w3-blue-grey w3-container w3-center" style="height:700px">
    <br>
    <br>
    <br>
      <h1 style="font-size:55px;font-family:JasmineUPC;">Manage Devices</h1>
    <div class="w3-padding-64">
    <img src="images/device.png" alt="Pet" style="width:50%">
        <p>&nbsp;</p>
        <p style="font-size:40px; font-family:JasmineUPC;"><?php ?></p>
    </div>
  </div></a>

  <!--<div class="w3-half w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
    <h1 style="font-size:55px;font-family:JasmineUPC;">DESCRIPTION</h1><br>
      <img src="images/device.png" class="w3-margin w3-circle" alt="Me" style="width:50%"> <br>
      <div class="w3-left-align w3-padding-large">
        <p>Description about the thing that will be attached ?</p>
        <p>Such as CAR</p>
      </div-->

    </div>
  </div>

</div>


<!-- Footer -->
<footer class="w3-container w3-footer w3-padding-16">
  <center><p style="font-weight:bold;">&copy; Web application Tracking by LoRa /<a href="http://www.sci.ubu.ac.th/" target="_blank"> Faculty of Science Ubon Ratchathani University.</a></p></center>
</footer>
<body background="/images/background.jpg">

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
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
