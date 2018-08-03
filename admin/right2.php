<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style>
.khxx{
	border-width:5px;
	border-color:#096;
	background-color: #FFF;
		border-style: solid;
	}

.khxx table{
	margin:0 auto;
	width:800px;
	text-align:center;}
.head{
	margin:5px auto;
	width:800px;
	text-align:center;}
.khxx table caption{
	color:#096;
	font-weight: bold;}
	.khxx table th{
	color: #009966;
	font-weight: bold;
}
.khxx table td{ border-bottom:1px solid #096}
</style>


<body>
<div class='khxx'>
<div class='head'> 
<form action="right2.php" target="right" method="post">
<input name="cid" type="text"  placeholder="请输入编号" />
<input name="" type="submit" value="搜索" />
<hr />

</form></div>
  <table cellspacing="0">

  <caption>
客户信息
  </caption>
  <tr>
    <th>公司编号</th>
    <th>公司名字</th>
    <th>公司主页</th>
    <th>联系电话</th>

  </tr>
  <?php
include('../conn.php'); 
if(isset($_POST["cid"])){$sql = "select * from com where cid='{$_POST["cid"]}' ";}
else{
$sql = "select * from com ";}
$result=mysqli_query($con, $sql);
 while
	 ($row=mysqli_fetch_array($result)){
	  $cid= $row[0];
    $cname = $row[1];
	$chome = $row[9];
	$cnumber = $row[10];

echo '
 <tr><td>'.$cid.'</td><td>'.$cname.'</td><td>'.$chome.'</td><td>'.$cnumber.'</td></tr>';
	}


 ?>
  </table>
</div>

   
   
</body>
