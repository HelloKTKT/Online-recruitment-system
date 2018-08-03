<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/> 
<?php
include('../conn.php');
header("Content-type: text/html; charset=utf-8");
if(isset($_POST["gtitle"],$_POST["gtext"]))
{
	$sql="insert into guide(gtitle,gtext) values ('{$_POST["gtitle"]}','{$_POST["gtext"]}')";
if (mysqli_query($con, $sql)) {
	echo "<script charset=utf-8>alert('添加文章成功！');window.location.href='right3.php';</script>";}	

else
{echo "<script charset='utf-8'>alert('添加文章失败，请完善内容！');history.back(-1);</script>";
	}}
	
	else
{echo "<script charset='utf-8'>alert('添加文章失败，请完善内容！');history.back(-1);</script>";
	}


?>