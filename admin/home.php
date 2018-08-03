<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="../style/images/topico.ico" >

<title>赚了么-后台管理系统</title>
</head>

<?php

if(!isset($_SESSION['aid']))
{echo "<script charset=utf-8>alert('请先登录！');window.parent.location.href='index.php';</script>";
	}
 ?>

<frameset  rows="20%,80%" cols="*" framespacing="2" frameborder="yes" border="2" bordercolor="#009966"><frame src="head.html" scrolling="No" noresize="noresize" /><frameset rows="*" cols="22%,*"  framespacing="2" frameborder="yes" border="2" bordercolor="#009966" > <frame noresize="noresize" src="left.html" /><frame noresize="noresize" src="right.php" name="right" /></frameset> </frameset><noframes></noframes>
</html>
