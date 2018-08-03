<?php
include('conn.php'); 
if($_GET["deal"]==0){
$sql="UPDATE orders SET ostate = '不合适' WHERE oid = '{$_GET["oid"]}'";}
if($_GET["deal"]==1){
$sql="UPDATE orders SET ostate = '通知面试' WHERE oid = '{$_GET["oid"]}'";}
if($_GET["deal"]=="pass"){
$sql="UPDATE orders SET ostate = '通过面试' WHERE oid = '{$_GET["oid"]}'";}
if (mysqli_query($con, $sql)) {


	echo "<script charset=utf-8>alert('操作成功！');window.location.replace(document.referrer);</script>";}

?>