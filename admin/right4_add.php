<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
<?php 
include('../conn.php'); 
$sql="insert into meeting(mcity,mday,mtime,mcom,mschool,maddress,mtext) values('{$_POST['mcity']}','{$_POST['mday']}','{$_POST['mtime']}','{$_POST['mcom']}','{$_POST['mschool']}','{$_POST['maddress']}','{$_POST['mtext']}')";
if(mysqli_query($con,$sql))
{echo "<script charset=utf-8>alert('添加成功！');window.location.href='right4.php';</script>";
	}
	else{echo "<script charset=utf-8>alert('添加失败！');history.back(-1);</script>";
		}






?>
