<?php
include('../connect_db.php');
$delete_id=$_GET['delete_id'];
$sql="DELETE  FROM product WHERE product_id ='$delete_id'";
$result = mysqli_query($objCon,$sql);
if($result){
    echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";
    echo "<meta http-equiv ='refresh'content='0;URL=../admin_page.php'>";
} else {
    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";
}    

?>