<?php include('./inc/head.php');?>
<link rel="stylesheet" href="./css/style.css">
<body class="text-center">

  <form class="form-signin" name="form1" method="post" action="check_login.php">
      <img src="https://palrsa.palpensions.com/images/login.png" alt=""><br>
      <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
      <input type="text"  name="txtUsername"  id="txtUsername" class="form-control" placeholder="Username" required autofocus>
      <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
   
    </form>

<?php include('./inc/footer.php');?>