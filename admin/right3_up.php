<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style>
div{
	text-align:center;
	color:#096;
		border-style: solid;
	border-color: #096;
	scrollbar-3d-light-color: #096;
	border-width: 5px;
	}
div textarea{
	width: 600px;
	height: 400px;
	border-style: solid;
	border-color: #096;
	scrollbar-3d-light-color: #096;
	border-width: 5px;
	}

	#tj{
	border:none;
	color:#FFF;
	background:#096;
	padding:10px 30px;
	text-align:center;
	margin:4px auto;
	font-size:16px;
	font-weight:bold;
	} 

</style>
<?php
include("../conn.php");
if(isset($_GET["gid"])){
	$sql="select * from guide where gid='{$_GET["gid"]}'";
	}
	
	if(mysqli_query($con,$sql))
	{
		$row=mysqli_fetch_array(mysqli_query($con,$sql));
		$gid=$row[0];
		$gtitle=$row[1];
		$gtext=$row[2];
		$gtime=$row[3];
		
		} ?>
<body>
<div><form action="right_up1.php" method="post">
<input type="hidden" name="gid"  value="<?php echo $gid; ?>"/>
  <p>
    标题：<input type="text" name="gtitle" value="<?php echo $gtitle; ?>" />
    </p>
  <p>
    <textarea name="gtext"><?php echo $gtext; ?></textarea>
    </p>
  <p>
    <input type="submit" value="修改" id="tj" />
  </p>
</form>
</div>
</body>
</html>