<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script type="text/javascript" src="WdatePicker.js"> </script>
<script language="javascript">    
function isValid(form)    
{    
if (form.mcity.value=="")    
 {    
 alert("城市不能为空");    
 return false;    
 }    
if (form.mday.value=="")    
{    
alert("日期");    
return false;    
}    
  if (form.time.value=="")    
{    
alert("具体时间不能为空");    
return false;    
}   
if (form.mcom.value=="")    
{    
alert("公司名字不能为空");    
return false;    
}  
if (form.mschool.value=="")    
{    
alert("学校名字不能为空");    
return false;    
}  
if (form.maddress.value=="")    
{    
alert("具体地址不能为空");    
return false;    
}  
if (form.mtext.value=="")    
{    
alert("详情信息不能为空");    
return false;    
}   
else return true;    
}  
   
</script>    
<title>无标题文档</title>
</head>
<style>
.khxx{
	border-width: 5px;
	border-color: #096;
	background-color: #FFF;
	border-style: inset;
	text-align: center;
	color: #096;
	padding:0;
	}
	.khxx input{

	border-color:#096;
	background-color: #FFF;
    border-style:inset;
	text-align:center;
	}
		.khxx textarea{
			border-width: 5px;
	border-color: #096;
	background-color: #FFF;
	border-style: inset;
	text-align: center;
	scrollbar-3d-light-color: #096;
	scrollbar-base-color: #096;
	scrollbar-shadow-color: #096;
	width:600px;
	height:300px;
	
	}
	.khxx table{
	margin:0 auto;
	width:30%;
	text-align:center;
	height:300px;
	}
	

.khxx h1 {
	color: #096;
}


.khxx form table tr td {
	text-align: left;
	color: #096;	
}
</style>


<body>
<div class='khxx'>
<h1>添加宣讲会信息</h1>
<hr>
<form action="right4_add.php" method="post" onSubmit="return isValid(this);">
<table cellspacing="0">
<tr>
  <td>城市：</td><td><input type="text"  value="" name="mcity"></td></tr>
<tr><td>日期：</td><td><input type="text"  onClick="WdatePicker()" readonly="readonly" name="mday" placeholder="请选择日期"></td></tr>
<tr><td>具体时间：</td><td><input type="text"  value="" name="mtime"></td></tr>
<tr><td>公司：</td><td><input type="text"  value="" name="mcom"></td></tr>
<tr><td>学校：</td><td><input type="text"  value="" name="mschool"></td></tr>
<tr><td>具体地址：</td><td><input type="text"  value="" name="maddress"></td></tr></table>
<br /><p>详情信息</p>
<textarea name="mtext" ></textarea><p><input type="submit" value="提交" /> &nbsp;
  <input type="reset" value="重置"/></p>
</form>
</div>

   
   
</body>