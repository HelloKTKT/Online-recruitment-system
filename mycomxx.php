<?php 
include('conn.php'); 
if (isset($_POST['comName'])) {
$sql ="UPDATE com SET cname = '{$_POST['comName']}',cintro= '{$_POST['cintro']}'  WHERE cid = '{$_COOKIE["id"]}'";
if($result=mysqli_query($con, $sql)){

echo "<script charset=utf-8>alert('保存成功！');window.location.replace(document.referrer);</script>";
}
}

if (isset($_POST['comjs'])) 
{
	$sql ="UPDATE com SET cjs = '{$_POST['comjs']}' WHERE cid = '{$_COOKIE["id"]}'";
if($result=mysqli_query($con, $sql)){

echo "<script charset=utf-8>alert('保存成功！');window.location.replace(document.referrer);</script>";
}
	}
	
	if (isset($_POST['ccity'])) 
{
	$sql ="UPDATE com SET ccity = '{$_POST['ccity']}' ,cfield = '{$_POST['cfield']}',csize = '{$_POST['csize']}',chome = '{$_POST['chome']}',cnumber = '{$_POST['cnumber']}' WHERE cid = '{$_COOKIE["id"]}'";
if($result=mysqli_query($con, $sql)){

echo "<script charset=utf-8>alert('保存成功！');window.location.replace(document.referrer);</script>";
}
	}

?>