
<?php 
include('conn.php'); 

$sql ="UPDATE student SET jobexperience = '{$_POST['jobjy']}' WHERE id = '{$_COOKIE["id"]}'";
$result=mysqli_query($con, $sql);
echo "<script charset=utf-8>alert('保存成功！');window.location.href='jianli.php';</script>";

?>