<?php 
session_start();
include('../inc/head.php');
include('../connect_db.php');

if(isset($_POST['Savepro'])){
   
$product_name= mysqli_real_escape_string($objCon,$_POST['product_name']);
$position_id= mysqli_real_escape_string($objCon,$_POST['position_name']);
$deptid= mysqli_real_escape_string($objCon,$_POST['deptid']);
$product_dis= mysqli_real_escape_string($objCon,$_POST['product_dis']);
$product_de= mysqli_real_escape_string($objCon,$_POST['product_de']);
//$image= mysqli_real_escape_string($objCon,$_POST['images']);

    //upload image
    $ext = pathinfo(basename($_FILES['image']['name']), PATHINFO_EXTENSION);
    $new_image_name = 'img_'.uniqid().".".$ext;
    $image_path = "image/";
    $upload_path = $image_path.$new_image_name;

    //uploading
    $success = move_uploaded_file($_FILES['image']['tmp_name'],$upload_path);

    if ($success==FALSE){
        echo "ไม่สามารถอัพโหลดรูปภาพได้";
        exit();
    }

    $pro_image = $new_image_name;
   
   $strSQL = "INSERT INTO product( product_name, product_dis, product_de, deptid, position_id, image) 
    VALUES('$product_name','$product_dis','$product_de','$deptid','$position_id','$pro_image')";
 
 $objQuery = mysqli_query($objCon,$strSQL);
     if($objQuery){
         echo "<script type=\"text/JavaScript\"> self.opener.location.reload(); window.close();</script>";
}
    exit;
}

?>