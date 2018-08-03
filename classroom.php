<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async="" src="style/js/conversion.js"></script><script src="style/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css">
.yu {
	font-size: 24px;
	text-align: center;
}
.zt {
	font-size: 18px;
	color:#096;
}
.gkk{
	float: left;
	text-align: center;
	border-color: #096;
	border-style: groove;
	border-width: 3px;
	color: #096;
}
.videos
{
	margin-left: 15px;
	margin-top: 15px;
	width: 120px;
	height: 100px;
	float: left;
	text-align: center;
	}

</style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>赚了吗-大学生求职就业网</title>
<meta content="23635710066417756375" property="qc:admins">
<meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站">
<meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
<meta content="QIQ6KC1oZ6" name="baidu-site-verification">

<!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
<script type="text/javascript">
var ctx = "http://www.lagou.com";
console.log(1);
</script>
<link rel="icon" href="style/images/topico.ico">
<link href="style/css/style.css" type="text/css" rel="stylesheet">
<link href="style/css/external.min.css" type="text/css" rel="stylesheet">
<link href="style/css/popup.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="style/js/jquery.1.10.1.min.js"></script>
<script src="style/js/jquery.lib.min.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/ajaxfileupload.js"></script>
<script src="style/js/additional-methods.js" type="text/javascript"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script src="style/js/conv.js" type="text/javascript"></script>
<script src="style/js/ajaxCross.json" charset="UTF-8"></script></head>

<body>
<style> 
#gg
{

text-align:center;
}

</style>
<div id="body">
	<div id="header">
    	<div class="wrapper">
<a href="index.php" class="logo">
    			<img src='style/images/logo1.png' width="207" height="52" alt="赚钱了大学生就业网站" />
   		  </a>
            
    		<ul id="navheader" class="reset">
    			<li ><a href="index.php">首页</a></li>
    			<li ><a href="companylist.php" >公司</a></li>
    			<li ><a href="xjh.php" rel="nofollow">宣讲会</a></li>
    			<li class="current" ><a href="guide.php" rel="nofollow">求职指导</a></li>
   		  </ul>
        	        	<?php if(!isset($_COOKIE["user"])){   echo'<ul class="loginTop">
            	<li><a href="login.html" rel="nofollow">登录</a></li> 
            	<li>|</li>
            	<li><a href="register.html" rel="nofollow">注册</a></li>
            </ul> ';}   
                                            
                            
 else{  echo' <dl class="collapsible_menu">
            	<dt>
           			<span>
                     
  '.$_COOKIE["user"].'

&nbsp;</span> 
            		<span class="red dn" id="noticeDot-0"></span>
            		<i></i>
            	</dt>'; if(isset($_COOKIE["type"])){
					if($_COOKIE["type"]=="stu"){
                       echo'         	<dd><a rel="nofollow" href="jianli.php">我的简历</a></dd>
                	                	<dd><a href="myapply.php">我申请的职位</a></dd>
                	                	                	<dd class="btm"><a href="subscribe.php">我的推荐</a></dd><dd><a href="updatePwd.html">密码修改</a></dd><dd ><a rel="nofollow" href="exit.php">退出</a></dd>';}
															else{
                       echo'  
<dd style="display: none;"><a href="positions.php">我发布的职位</a></dd>
                	<dd style="display: none;"><a href="undeal.php">我收到的简历</a></dd>
                	<dd class="btm" style="display: none;"><a href="myhome.php">我的公司主页</a></d>
					<dd><a href="updatePwd.html">密码修改</a></dd><dd><a href="exit.php">退出</a></dd>';}}'
                                               
                                <dd ><a rel="nofollow" href="exit.php">退出</a></dd>
            </dl> ';}  ?>
                                  
      </div>
    </div><!-- end #header -->
    <div id="container">
        	  	
      <div class="clearfix">
            <div class="content_l recommend_list">
           	  <h2><caption><span class="yu">就业指导公开课</span></h2>





<?php
include('conn.php');
$sql="select * from classroom  ORDER BY classid DESC ";
$result=mysqli_query($con, $sql);
while
	 ($row=mysqli_fetch_array($result)){
		 $classid=$row[0];
		 $classtitle=$row[1];
	  $classvideos= $row[2];
    $classtime = $row[3];


 echo'<div class="videos">
<a href="classvideos.php?classid='.$classid.'"><img src="style/images/timg.jpg" width="120" height="77">'.$classtitle.'</a>
</div>';};?>



          </div>
      </div>
      <input type="hidden" id="userid" name="userid" value="314873">
<script>
$(function(){
	
	/***************************
 	 * 分页
 	 */
 	 						$('.Pagination').pager({
		      currPage: 1,
		      pageNOName: "pn",
		      form: "searchForm",
		      pageCount: 7,
		      pageSize:  5 
		});
	});
</script>
			<input type="hidden" value="" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
  </div><!-- end #container -->
</div><!-- end #body -->




<!--  -->



</html>