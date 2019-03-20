<?php
include('../inc/head.php');
include('../connect_db.php');
?>

<style>
    .font{
  font-family: 'Kanit', sans-serif;
}
</style>
<div class="container col-12 font"><br>
<h5>เพิ่มผู้ใช้</h5>

<form method="post" action="../inc/save.php" >
  <div class="row">
 <div class="col"> 
  Username
     <input type="text" class="form-control" name="username" placeholder="Username">
</div>
<div class="col"> 
  Password
     <input type="password" class="form-control" name="password" placeholder="Password">
</div>
  </div>
  
  <div class="row">
  <div class="col">
    ชื่อ
      <input type="text" class="form-control" name="f_name" placeholder="ชื่อ">
    </div>
    <div class="col">
    นามสกุล
      <input type="text" class="form-control"name=" l_name" placeholder="นามสกุล">
    </div>
</div>
  ภูมิภาค
 <select class="form-control" name="position_id">
  <div class="row">
  <div class="col">
    <?php
    $strSQL="SELECT*FROM position ORDER BY position_id";
    $objQuery = mysqli_query($objCon,$strSQL);
	while($row = mysqli_fetch_array($objQuery)) { 
	echo' <option value='.$row["position_id"].'>'.$row["position_name"].'</option>';
	}
	?>
	   </div>
       </div>

    </select>
<div class="row">
  <div class="col">
    Email
      <input type="email" class="form-control" name="email" placeholder="E-mail">
    </div>
    <div class="col">
      โทรศัพท์
      <input type="text" class="form-control" name="tel" placeholder="Phone">
    </div>
</div>

<div class="form-group">
  ที่อยู่
    <textarea class="form-control" name="address" rows="3" placeholder="ที่อยู่"></textarea>
  </div>


<input type="submit"  style="float:right;" class="btn btn-success" name= "Save" value="Save" onclick="return confirm('Are you sure?');">
</form>
</div>