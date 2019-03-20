<?php


include('../database.php');


$delete_id = $_GET['delete_id'];

// this is delete device table อ่อ ลบ device ก่อน แล้วค่อยไปลบ user ? yes ลบ ' ออกด้วย เพราะตอนแรกมันมี ครอบที่ตัวแปร มันเลยมองเป็นสตริง แต่ เทเบิล เราเกบเปน int จ้า อ  'delete_id'  for text and varchar  delete_id for int tinyint biggint @#$$#^#$%  
$sql_delete_device = "DELETE from device where user_id = $delete_id ";
//echo $sql_delete_device;
$del = mysqli_query($con,$sql_delete_device);
//


$sql="DELETE  FROM user WHERE user_id =$delete_id";
//echo $sql;
$result = mysqli_query($con,$sql);

if($result){

    echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";
    
    echo "<meta http-equiv ='refresh'content='0;URL=../adminusertable.php'>";
    
} else {
    // echo $sql_delete_device . "<br>"; 
    // echo $sql;  เพิ่มให้ จารบอมหน่อย เพิ่มไรอะ ดีไว 
    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";
}    

?>