<?php
include('../conn.php');
if(isset($_GET["classid"])){
$sql="delete from classroom  where classid='{$_GET["classid"]}'";}
	else {echo"<script charset='utf-8'>alert('删除失败！');</script>";}
if(mysqli_query($con,$sql))
{echo"<script charset='utf-8'>alert('删除成功！');window.location.href='right5.php';</script>";
	}
	else {echo"<script charset='utf-8'>alert('删除失败！');</script>";}
 ?>