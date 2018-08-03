<?php 
include('conn.php'); 

$sql ="UPDATE expect SET city = '{$_POST['expectCity']}',type= '{$_POST['type1']}' ,position= '{$_POST['expectPosition']}' ,wage= '{$_POST['expectSalary']}' WHERE id = '{$_COOKIE["id"]}'";
$result=mysqli_query($con, $sql);
echo "<script charset=utf-8>alert('保存成功！');window.location.href='jianli.php';</script>";

?>