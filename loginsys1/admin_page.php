<?php

	session_start();
	if($_SESSION['u_id'] == "")
	{
		header("Location: login.php");
		exit();
	}

	if($_SESSION['usertype'] != 1)
	{
		header("Location: login.php");
		exit();
	}	
	
    include('connect_db.php');

    
?>


<style>
    .font{
  font-family: 'Kanit', sans-serif;
}
</style>
<?php include('./inc/head.php'); ?>
<?php include('./inc/menu.php'); ?><br>
  <div class="container col-12 font">
  <?php
  
    $strSQL = "SELECT product.*,dept.dept_name,appb.Appb_name,position.position_name
    FROM product
    JOIN dept ON product.deptid=dept.deptid
    JOIN appb ON product.Appb_id=appb.Appb_id
    JOIN position ON product.position_id=position.position_id"; 
    
     
  $objQuery = mysqli_query($objCon,$strSQL);
  echo "<table border='3' width='100%'>";
  echo "<tr align='center' bgcolor='#CCCCCC'><td>ลำดับ</td><td>ชื่อสินค้า</td><td>ประเภทสินค้า</td><td>รายละเอียดสินค้า</td><td>ที่อยู่</td>
        <td>ภูมิภาค</td><td>รูปภาพ</td><td>status</td><td>Tool</td></tr>";
        $sum = 0;

  while($row = mysqli_fetch_array($objQuery)) { 
   
  $sum += 1;
    
    
  echo "<tr align='center'>";
  echo "<td>" .$row["product_id"] .  "</td> "; 
  echo "<td>" .$row["product_name"] .  "</td> ";  
  echo "<td>" .$row["dept_name"] ."</td> ";
  echo "<td>" .$row["product_de"] .  "</td> ";
  echo "<td>" .$row["product_dis"] .  "</td> ";
  echo "<td>" .$row["position_name"] .  "</td> ";
  //echo "<td>" .$row["image"] .  "</td> ";
  echo "<td><img src='./inc/image/".$row['image']."' width='150px' height='150px'>"."</td>";

  echo "<td>" .$row["Appb_name"] .  "</td> ";
  echo"<td><button type=\"submit\" class=\"btn btn-warning\" onClick=\"javascript:window.open('./inc/edit.php?edit_id=$row[product_id];', 'edituser' ,'menubar=no,toorlbar=no,location=no,scrollbars=no,status=no,resizable=no,width=750,height=750,top=150,left=500')\";>แก้ไข</button>
  <input name=\"Submit2\" type=\"submit\" class=\"btn btn-danger\" onclick=\"javascript:location.href='./inc/delete.php?delete_id=$row[product_id]';\" value=\" Delete\" /></td>";//ลิงค์และส่งค่าเพื่อไปแก้ไขข้อมูล
 
  
  echo "</tr>";
  }
  echo "<tr  bgcolor='#CCCCCC' width='100%' align='center'>";
  echo "<th colspan=\"9\"> จำนวนสินค้า </td>";
  echo "<th> $sum สินค้า</td>";
  echo "</tr>";
  echo "</table><br>";

  
  ?>

<?php
 include('./inc/footer.php');
 
?>
