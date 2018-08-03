<?php 
include('conn.php'); 

$sql = "insert into orders (jid,id,cid,ostate) values('{$_GET['jid']}','{$_COOKIE['id']}','{$_GET['cid']}','未查阅')";
$sql2 = "select * from orders where id='{$_COOKIE['id']}' and jid='{$_GET['jid']}' and ostate='未查阅' ";
$rows=mysqli_query($con, $sql2);


if (mysqli_num_rows($rows) >= 1){
	
	 echo "<script charset=utf-8>alert('投递失败，您已投递该职位，无法重复申请！');</script>";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($con);
	mysqli_query($con, $sql);
	echo "<script charset=utf-8>alert('投递成功，请等待公司通知！');window.location.href='index.php';</script>";
}
?>
