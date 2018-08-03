<?php 
include('conn.php'); 
$sql="INSERT INTO job (cid,jtype,jname,jdepartment,jnature,jwage,jcity,jyear,jeducation,jadvantage,jdetail,jaddress,jemail,cname) 
VALUES ('{$_COOKIE["id"]}', '{$_POST['positionType']}','{$_POST['positionName']}','{$_POST['department']}' ,'{$_POST['jobNature']}' ,'{$_POST['salaryMin']}k-{$_POST['salaryMax']}k','{$_POST['workaddress']}','{$_POST['workYear']}' ,'{$_POST['education']}', '{$_POST['positionAdvantage']}', '{$_POST['positionDetail']}', '{$_POST['positionAddress']}',  '{$_POST['email']}', '{$_COOKIE["user"]}')";
$result=mysqli_query($con, $sql);
echo "<script charset=utf-8>alert('发布成功！');window.location.replace(document.referrer);</script>";
?>