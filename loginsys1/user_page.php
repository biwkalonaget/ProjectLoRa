<?php
	session_start();
	if($_SESSION['u_id'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['usertype'] != 2)
	{
		echo "This page for User only!";
		exit();
	}	
	
include('connect_db.php');
include('./inc/head.php');
include('./inc/menu.php');
?>
<style>
    .font{
  font-family: 'Kanit', sans-serif;
}
</style>
<body>
  <div class="container col-12 font">
 <?php

  $strSQL = "SELECT user.*,dept.dept_name,position.position_name 
  FROM user
  JOIN dept ON user.deptid=dept.deptid 
  JOIN position ON user.position_id=position.position_id ORDER BY user.u_id ";  
$objQuery = mysqli_query($objCon,$strSQL);
echo "<br>";
echo "<table border='1' width='100%'>";
echo "<tr align='center' bgcolor='#CCCCCC'><td>ลำดับ</td><td>Uername</td><td>ชื่อ-สกุล</td><td>อีเมล</td>
      <td>เบอร์โทร</td><td>ที่อยู่</td><td>แผนก</td><td>ตำแหน่ง</td><td>สถานะ</td></tr>";
      $sum = 0;
while($row = mysqli_fetch_array($objQuery)) { 
  if ($row["usertype"] == 1) {
    $row["usertype"] = "Admin";
  }else $row["usertype"] = "User";
  $sum += 1;
echo "<tr>";
echo "<td>" .$row["u_id"] .  "</td> "; 
echo "<td>" .$row["username"] .  "</td> ";  
echo "<td>" .$row["f_name"]. "   "  .$row["l_name"] .  "</td> ";
echo "<td>" .$row["email"] .  "</td> ";
echo "<td>" .$row["tel"] .  "</td> ";
echo "<td>" .$row["address"] .  "</td> ";
echo "<td>" .$row["dept_name"] .  "</td> ";
echo "<td>" .$row["position_name"] .  "</td> ";
echo "<td>" .$row["usertype"] .  "</td> ";




}
echo "<tr  bgcolor='#CCCCCC' width='100%' align='center'>";
  echo "<th colspan=\"7\"> จำนวนผู้ใช้ </td>";
  echo "<th> $sum </td>";
  echo "<th> คน </td>";
  echo "</tr>";
echo "</table><br>";

  ?>
</div>
<?php
include('./inc/footer.php');
	mysqli_close($objCon);
?>