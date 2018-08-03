<?php 
include('conn.php'); 
if($_POST['do']==0)
{
	setcookie("type", "stu", time()+3600);
$sql = "insert into student (id,name,code) values('{$_POST['id']}','{$_POST['name']}','{$_POST['pw1']}')";
$sql2 = "insert into expect (id,name) values('{$_POST['id']}','{$_POST['name']}')";
}
if($_POST['do']==1)
{
$sql = "insert into com (cid,cname,ccode) values('{$_POST['id']}','{$_POST['name']}','{$_POST['pw1']}')";
$sql2 = "insert into comcreate (cid,cname) values('{$_POST['id']}','{$_POST['name']}')";
}

if (mysqli_query($con, $sql)) {
	mysqli_query($con, $sql2);
    setcookie("user", $_POST['name'], time()+3600);
	setcookie("id", $_POST['id'], time()+3600);
	echo "<script charset=utf-8>alert('注册成功！');window.location.href='index.php';</script>";

} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($con);
	
	 echo "<script charset=utf-8>alert('该号码已被注册！');history.back(-1);</script>";
}

?>
