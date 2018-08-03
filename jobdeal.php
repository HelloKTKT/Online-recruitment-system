<?php
include('conn.php'); 
if(isset($_GET["jid"])){
$sql="UPDATE job SET jstate = '下线' WHERE jid = '{$_GET["jid"]}'";}

if (mysqli_query($con, $sql)) {


	echo "<script charset=utf-8>alert('下线成功！');window.location.replace(document.referrer);</script>";}

?>