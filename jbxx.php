<?php 
include('conn.php'); 

$sql ="UPDATE student SET name = '{$_POST['name']}',sex= '{$_POST['sex1']}' ,record= '{$_POST['topDegree']}' ,experience= '{$_POST['workyear']}' ,email= '{$_POST['email']}' ,state= '{$_POST['currentState']}', tel = '{$_POST['tel']}' WHERE id = '{$_COOKIE["id"]}'";
if($result=mysqli_query($con, $sql)){
setcookie("user", $_POST['name'], time()+3600);
setcookie("id", $_COOKIE['id'], time()+3600);
echo "<script charset=utf-8>alert('保存成功！');window.location.href='jianli.php';</script>";
}
?>