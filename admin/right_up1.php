<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<?php
include('../conn.php');
if(isset($_POST["gtitle"],$_POST["gtext"],$_POST["gid"]))
{
	$sql="update guide set gtitle='{$_POST['gtitle']}',gtext='{$_POST['gtext']}' where gid='{$_POST['gid']}'";
	}

	if(mysqli_query($con,$sql))
	{
	echo "<script charset=utf-8>alert('编辑文章成功！');window.location.href='right3.php';</script>";
		}

?>