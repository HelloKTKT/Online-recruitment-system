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
.khxx table caption{
	color:#096;
	font-weight: bold;}
	.khxx table th{
	color: #009966;
	font-weight: bold;
}
.khxx table td{ border-bottom:1px solid #096}
.head{
	margin:5px auto;
	width:800px;
	text-align:center;}
</style>


<body>
<div class='khxx'>
<div class='head'> 
<form action="right.php" target="right" method="post">
<input name="id" type="text"  placeholder="请输入编号" />
<input name="" type="submit" value="搜索" />
<hr />

</form></div>
  <table cellspacing="0">

  <caption>
客户信息
  </caption>
  <tr>
    <th>编号</th>
    <th>姓名</th>
    <th>性别</th>
    <th>电话</th>

  </tr>
  <?php
include('../conn.php'); 
if(isset($_POST["id"])){$sql = "select * from student where id='{$_POST["id"]}' ";}
else{
$sql = "select * from student ";}
$result=mysqli_query($con, $sql);
 while
	 ($row=mysqli_fetch_array($result)){
	  $id= $row[0];
    $name = $row[1];
	$sex = $row[3];
	$tel = $row[8];

echo '
 <tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$sex.'</td><td>'.$tel.'</td></tr>';
	}


 ?>
  </table>
</div>

   
   
</body>
