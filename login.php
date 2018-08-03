<?php 
include('conn.php'); 

$sql = "select * from student where id='{$_POST['id']}' and code='{$_POST['pw']}'";
$result=mysqli_query($con, $sql);
$sql2 = "select * from com where cid='{$_POST['id']}' and ccode='{$_POST['pw']}'";
$result2=mysqli_query($con, $sql2);
//使用mysqli_fetch_array函数读取结果集数据，这里使用的是兼容性数组(即关联数组和索引数组)
if ((mysqli_num_rows($result)==1)&&($_POST['type']=="找工作"))
	{
 while
	 ($row=mysqli_fetch_array($result)){
	 $id = $row[0];//也可以这样获取：$name = $row['name'];
    $name = $row[1];//也可以这样获取：$name = $row['name'];
	}
	setcookie("id",  $id, time()+3600);
	setcookie("user",  $name, time()+3600);
	setcookie("type", "stu", time()+3600);
	//echo "<script > alert(".$name."); </script>";
	echo "<script charset=utf-8>alert('登录成功！');window.location.href='index.php';</script>";

} 
if ((mysqli_num_rows($result2)==1)&&($_POST['type']=="招人")) 
	{
 while
	 ($row=mysqli_fetch_array($result2)){
	 $id = $row[0];//也可以这样获取：$name = $row['name'];
    $name = $row[1];//也可以这样获取：$name = $row['name'];
	}
	setcookie("id",  $id, time()+3600);
	setcookie("user",  $name, time()+3600);
    setcookie("type", "boss", time()+3600);
	//echo "<script > alert(".$name."); </script>";
	echo "<script charset=utf-8>alert('登录成功！');window.location.href='index.php';</script>";

}

else {
	
	 echo "<script charset=utf-8>alert('请输入正确的帐号密码！');history.back(-1);</script>";
}

?>