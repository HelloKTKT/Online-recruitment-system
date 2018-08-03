<?php 
include('conn.php'); 
if($_COOKIE["type"]=="stu"){$sql = "select * from student where id='{$_COOKIE['id']}' and code='{$_POST['oldpassword']}'";
$sql2="UPDATE student SET code = '{$_POST['newpassword']}'
WHERE id = '{$_COOKIE['id']}'";}
else{$sql = "select * from com where cid='{$_COOKIE['id']}' and ccode='{$_POST['oldpassword']}'";
$sql2="UPDATE com SET ccode = '{$_POST['newpassword']}'
WHERE cid = '{$_COOKIE['id']}'";}

$result=mysqli_query($con, $sql);


//使用mysqli_fetch_array函数读取结果集数据，这里使用的是兼容性数组(即关联数组和索引数组)
if ((mysqli_num_rows($result)==1))
	{
 $result2=mysqli_query($con, $sql2);

	echo "<script charset=utf-8>alert('密码修改成功！');;history.back(-1);</script>";

} 
else{
	echo "<script charset=utf-8>alert('密码错误！');;history.back(-1);</script>";
	}


?>