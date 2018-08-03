<?php
include('../conn.php');
if(isset($_GET["gid"])){
$sql="delete from guide  where gid='{$_GET["gid"]}'";}
	else {echo"<script charset='utf-8'>alert('删除失败！');</script>";}
if(mysqli_query($con,$sql))
{echo"<script charset='utf-8'>alert('删除成功！');window.location.href='right3.php';</script>";
	}
	else {echo"<script charset='utf-8'>alert('删除失败！');</script>";}
 ?>