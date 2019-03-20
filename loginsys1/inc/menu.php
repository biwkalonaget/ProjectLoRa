<nav class="navbar navbar-expand-sm bg-dark">

  <!-- Links -->
  <ul class="navbar-nav ">
   
    <?php

	if($_SESSION['u_id'] == "")
	{
		header("Location: index.php");
		exit();
	}

	if($_SESSION['usertype'] == 1)
	{
		echo "<li class=\"nav-item\">
      <a class=\"nav-link text-white\" href=\"./admin_page.php\">จัดการสินค้า</a>
    </li>";
    }	
   
    ?>
    
  </ul>
    <?php
     if($_SESSION['usertype'] == 1 || $_SESSION['usertype'] == 2 ){
      echo "<div class=\"text-center\"><a class=\"nav-link btn btn-danger \" style=\"float:right\"  href=\"logout.php\">Logout</a></div>";
  }
    
    ?>
  

</nav>
