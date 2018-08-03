<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>无标题文档</title>
</head>
<script>
function rl(t)
{ var r=confirm("确认删除该文章吗？")
  if (r==true)
    {
    window.location.href = "right5_de.php?classid="+t;
    }
  else
    {
   return false;
    }
	}</script>
<style>
.khxx{
	border-width:5px;
	border-color:#096;
	background-color: #FFF;
		border-style: solid;
		font-family:微软雅黑;
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
	

	text-align:center;}
	.head a{
	margin:5px  auto;
	display: block;
	background-color: #096;
	color: #FFF;
	height: 30px;
	width: 100px;
	line-height: 30px;
	text-decoration: none;
	font-weight: bold;
}
</style>


<body>
<div class='khxx'>
  <div class='head'> 
<a href="right5_ad.php">上传视频</a>
<hr />
</div>

  <table cellspacing="0">

  <caption>
  公开课
  </caption>
  <tr>
    <th width="322" >标题</th>
    <th width="332" >发布日期</th>
     <th width="130" >操作</th>

  </tr>
  <?php
include('../conn.php'); 


$sql = "select * from classroom ";
$result=mysqli_query($con, $sql);
 while
	 ($row=mysqli_fetch_array($result)){
	  $classid= $row[0];
    $classtitle = $row[1];
	$classvideos = $row[2];
	$classtime = $row[3];


echo '
 <tr><td><a href="right5yl.php?classvideos='.$classvideos.'">'.$classtitle.'</a></td><td>'.$classtime.'</td><td><a href="javascript:;"  onclick="rl('.$classid.')">删除</a></td></tr>';
 
	}


 ?>
  </table>
</div>


   
</body>
