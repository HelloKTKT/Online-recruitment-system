<?php 
include('conn.php'); 

$sql ="UPDATE student SET school = '{$_POST['school']}',pro = '{$_POST['pro']}',record = '{$_POST['record']}',sctime1 = '{$_POST['time1']}',sctime2 = '{$_POST['time2']}' WHERE id = '{$_COOKIE["id"]}'";
//$result=mysqli_query($con, $sql);

if (mysqli_query($con, $sql)) {

echo "<script charset=utf-8>alert('保存成功！');window.location.href='jianli.php';</script>";

}

?>