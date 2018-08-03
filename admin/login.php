<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include('../conn.php');
session_start();
$sql="select * from admin where aid='{$_POST["aid"]}' and acode='{$_POST["acode"]}' ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
{
	$_SESSION['aid']=$_POST["aid"];
echo "<script charset=utf-8>window.location.href='home.php';</script>";

	}
	else{
echo "<script charset=utf-8>alert('请输入正确的帐号密码！');history.back(-1);</script>";
		}

 ?>