<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>无标题文档</title>
</head>
<script>
function rl(t)
{ var r=confirm("确认删除该信息吗？")
  if (r==true)
    {
    window.location.href = "right4_de.php?mid="+t;
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
	}
.khxx table{
	margin:0 auto;
	width:100%;
	text-align:center;
	}
.khxx table caption{
	color:#096;
	font-weight: bold;}
	.khxx table th{
	color: #009966;
	font-weight: bold;
}
.khxx table td{ border-bottom:1px solid #096;
border-left:1px solid #096;
border-right:1px solid #096;}
.khxx table th{ border-bottom:1px solid #096;
border-left:1px solid #096;
border-right:1px solid #096;
border-top:1px solid #096;}
.head{
	

	text-align:center;}
	.head a{
	margin: 4px auto;
	display: block;
	background-color: #096;
	color: #FFF;
	height: 50px;
	width: 150px;
	line-height: 50px;
	text-decoration: none;
	font-weight: bold;
}
</style>


<body>
<div class='khxx'>
  <div class='head'> 
<a href="right4_ad.php">添加宣讲会信息</a>
<hr />
</div>

  <table  cellspacing="0">

  <caption>
  宣讲会信息
  </caption>
  <tr>
    <th width="92"  >城市</th>
    <th width="134"  >日期</th>
     <th width="137"  >具体时间</th>
      <th width="162"  >公司</th>
       <th width="166"  >学校</th>
        <th width="187"  >地址</th>
        <th width="141"  >发布时间</th>
        <th width="46"   >操作</th>

  </tr>
  <?php
include('../conn.php'); 


$sql = "select * from meeting ";
$result=mysqli_query($con, $sql);
 while
	 ($row=mysqli_fetch_array($result)){
	  $mid= $row[0];
    $mcity = $row[1];
	$mday = $row[2];
		  $mtime= $row[3];
    $mcom = $row[4];
	$mschool = $row[5];
		  $maddress= $row[6];
    $mtext = $row[7];
	$mtime1 = $row[8];


echo '
 <tr><td>'.$mcity.'</td><td>'.$mday.'</td><td>'.$mtime.'</td><td>'.$mcom.'</td><td>'.$mschool.'</td><td>'.$maddress.'</td><td>'.$mtime1.'</td><td><a href="javascript:;" onclick="rl('.$mid.')">删除</a></td></tr>';
	}


 ?>
  </table>
</div>

   
   
</body>
