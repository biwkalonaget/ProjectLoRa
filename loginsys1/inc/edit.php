<?php
include('../inc/head.php');
include('../connect_db.php');

$edit_id=$_GET['edit_id'];
$sql = "SELECT * FROM product WHERE product_id = '".$edit_id."' ";

$query = mysqli_query($objCon,$sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
$id = $result['product_id'];
$name = $result['product_name'];
$product_dis = $result['product_dis'];
$product_de= $result['product_de'];
$deptid = $result['deptid'];
$image = $result['image'];
$Appb_id = $result['Appb_id'];

?>
<style>
    .font{
  font-family: 'Kanit', sans-serif;
}
</style>

<div class="container col-11 font"><br>

<h5>แก้ไข</h5>

<form method="post" action="../inc/s_update.php" >

  <div class="row">
 <div class="col"> 
 ลำดับที่
    <input type="text" class="form-control" name="product_id" value = "<?php echo $id; ?>">
</div>
</div>

<div class="row">
<div class="col"> 
  ชื่อสินค้า
     <input type="text" class="form-control" name="product_name" value = "<?php echo $name; ?>"  placeholder="ชื่อสินค้า">
</div>
  </div>
  
  <div class="row">
<div class="col"> 
  ที่อยู่
     <input type="text" class="form-control" name="product_dis" value = "<?php echo $product_dis; ?>"  placeholder="ที่อยู่">
     </div>
  </div>
  

   <div class="col">
  <div class="form-group">
    <label for="dept"> ประเภทสินค้า</label>

    <select class="form-control" name="deptid">
   <?php
    $strSQL="SELECT*FROM dept ORDER BY deptid";
    $objQuery = mysqli_query($objCon,$strSQL);
	while($row = mysqli_fetch_array($objQuery)) { 
	echo' <option value='.$row["deptid"].'>'.$row["dept_name"].'</option>';
	}
		?>
      
    </select>
    
  </div>
    </div>

    <div class="col">
    <div class="form-group">
    <label for="position">ภูมิภาค</label>
    <select class="form-control" name="product_ad">
    <?php
    $strSQL="SELECT*FROM position ORDER BY position_id";
    $objQuery = mysqli_query($objCon,$strSQL);
	while($row = mysqli_fetch_array($objQuery)) { 
	echo' <option value='.$row["position_name"].'>'.$row["position_name"].'</option>';
	}
	?>
    </select>
  </div>
    </div>


<div class="row">
<div class="col"> 
  รายละเอียดสินค้า
 <textarea class="form-control" name="product_de" rows="3" placeholder="สินค้าอะไร ทำอะไรได้บ้าง"><?php echo $product_de; ?></textarea>
  </div>
  </div>

  <br>

<?php
if($Appb_id == 1){

?>
<div class="form-check">
&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="Appb_id"  value="1" checked>
  <label class="form-check-label" for="exampleRadios1">
   ให้แสดงข้อมูล
  </label>
</div>
<div class="form-check">
&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="Appb_id"  value="0" >
  <label class="form-check-label" for="exampleRadios1">
  ไม่ให้แสดงข้อมูล
  </label>
</div>
<?php
}

else{
?>
<div class="form-check">
&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="Appb_id"  value="1" >
  <label class="form-check-label" for="exampleRadios1">
   ให้แสดงข้อมูล
  </label>
</div>
<div class="form-check">
&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="radio" name="Appb_id"  value="0" checked>
  <label class="form-check-label" for="exampleRadios1">
  ไม่ให้แสดงข้อมูล
  </label>
</div></p>
<?php
}
?>
<input type="submit"  style="float:right;" class="btn btn-success" name = "SaveEdit" value="Save" onclick="return confirm('Are you sure?');">
</form>
</div>