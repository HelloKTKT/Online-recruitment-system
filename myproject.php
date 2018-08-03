
<?php 
include('conn.php'); 

$sql ="UPDATE student SET project = '{$_POST['project']}' WHERE id = '{$_COOKIE["id"]}'";
$result=mysqli_query($con, $sql);
echo "<script charset=utf-8>alert('保存成功！');window.location.href='jianli.php';</script>";

?>