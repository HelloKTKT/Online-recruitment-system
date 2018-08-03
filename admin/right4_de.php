<?php
include('../conn.php');
if(isset($_GET["mid"])){
$sql="delete from meeting  where mid='{$_GET["mid"]}'";}
	else {echo"<script charset='utf-8'>alert('删除失败！');</script>";}
if(mysqli_query($con,$sql))
{echo"<script charset='utf-8'>alert('删除成功！');window.location.href='right4.php';</script>";
	}
	else {echo"<script charset='utf-8'>alert('删除失败！');</script>";}
 ?>