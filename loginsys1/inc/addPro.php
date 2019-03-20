<?php
include('../inc/head.php');
include('../connect_db.php');
?>

<style>
    .font{
  font-family: 'Kanit', sans-serif;
}
</style>
</head>
<div class="container col-11 font"><br>

<h5>เพิ่มสินค้า</h5>
<form method="post" action="../inc/savepro.php" enctype="multipart/form-data">

  
    <p>Picture : <input type="file" name="image" /> </p>
 


  <div class="row">
  <div class="col">
    สินค้า
      <input type="text" class="form-control" name="product_name" placeholder="ชื่อสินค้า">
    </div>
    </div>
    <br>
     <div class="row">
&nbsp;&nbsp;&nbsp;<div class="form-group">
  ที่อยู่
    <textarea class="form-control" name="product_dis" rows="3" placeholder="ตำบลศรีไค อำเภอวารินฯ จังหวัดอุบลราชธานี 34190"></textarea>
  </div>
  </div>
  

  <div class="row">
  
    <div class="col">
    <div class="form-group">
    <label for="position">ภูมิภาค</label>
    
    <select class="form-control" name="position_name">
    
    <?php
    $strSQL="SELECT*FROM position ORDER BY position_id";
    $objQuery = mysqli_query($objCon,$strSQL);
	while($row = mysqli_fetch_array($objQuery)) { 
	echo' <option value='.$row["position_id"].'>'.$row["position_name"].'</option>';
	}
	?>
	
    </select>
    
  </div>
    </div>
</div>

<div class="row">
&nbsp;&nbsp;&nbsp;<div class="form-group">
  รายละเอียดสินค้า
    <textarea class="form-control" name="product_de" rows="3" placeholder="สินค้าอะไร ทำอะไรได้บ้าง"></textarea>
  </div>
  </div>

<br>

<div class="form-check">
  <input class="form-check-input" type="radio" name="deptid"  value="1" checked>
  <label class="form-check-label" for="exampleRadios1">
   สินค้าอุปโภค
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="deptid"  value="2" >
  <label class="form-check-label" for="exampleRadios1">
    สินค้าบริโภค
  </label>
</div>

<input type="submit"  style="float:right;" class="btn btn-success" name = "Savepro" value="Save" onclick="return confirm('Are you sure?');">
</form>
</div>

</html>