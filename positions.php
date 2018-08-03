<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
<script async src="style/js/analytics.js"></script><script type="text/javascript" async src="style/js/conversion.js"></script><script src="style/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>赚了吗-大学生求职就业网</title>

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

<?php 
include('conn.php');
//$sql="select * from com where cid='{$_COOKIE["id"]}'";
$sql="select * from job where cid='{$_COOKIE["id"]}' and jstate is null";
$result=mysqli_query($con, $sql);
//$result2=mysqli_query($con, $sql2);
/*while
	 ($row=mysqli_fetch_array($result)){
	  $jtype= $row[2];
    $jname = $row[3];
	$jdepartment = $row[4];
	$jnature=$row[4];
	$jwage=$row[5];
    $jcity = $row[6];
	$jyear = $row[7];
	$jdeucation=$row[8];
	$jadvantage=$row[9];
	$jdetail=$row[10];
	$jaddress=$row[11];
	$jemail=$row[12];
	$jtime=$row[13];

	}*/
	
?>
<body>
<div id="body">
	<div id="header">
    	<div class="wrapper">
<a href="index.php" class="logo">
    			<img src='style/images/logo1.png' width="207" height="52" alt="赚钱了大学生就业网站" />
    		</a>
            
    		<ul class="reset" id="navheader">
    			<li ><a href="index.php">首页</a></li>
    			<li ><a href="companylist.php" >公司</a></li>
    			<li ><a href="xjh.php" rel="nofollow">宣讲会</a></li>
    			<li ><a href="guide.php" rel="nofollow">求职指导</a></li>
	    		    		</ul><?php if(!isset($_COOKIE["user"])){   echo'<ul class="loginTop">
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
                	                	                	<dd class="btm"><a href="subscribe.php">我的推荐</a></dd><dd><a href="updatePwd.php">密码修改</a></dd><dd ><a rel="nofollow" href="exit.php">退出</a></dd>';}
															else{
                       echo'  
<dd style="display: none;"><a href="positions.php">我发布的职位</a></dd>
                	<dd style="display: none;"><a href="undeal.php">我收到的简历</a></dd>
                	<dd class="btm" style="display: none;"><a href="myhome.php">我的公司主页</a></d>
					<dd><a href="updatePwd.php">密码修改</a></dd><dd><a href="exit.php">退出</a></dd>';}}'
                                               
                                <dd ><a rel="nofollow" href="exit.php">退出</a></dd>
            </dl> ';}  ?>
        	        	

                    </div>
    </div><!-- end #header -->
    <div id="container">
                	<div class="sidebar">
        		            	<a class="btn_create" href="create.php">发布新职位</a>
            	                <dl class="company_center_aside">
		<dt>我收到的简历</dt>
		<dd>
		<a href="undeal.php">待处理简历</a> 
			</dd>

	<dd>
		<a href="haveNoticeResumes.php">已通知面试简历</a>
	</dd>
	<dd>
		<a href="haveRefuseResumes.php">不合适简历</a>
	</dd>
	<dd class="btm">
		<a href="passResumes.php">面试通过简历</a> 
			</dd>
           
</dl>
<dl class="company_center_aside">
		<dt>我发布的职位</dt>
			<dd >
		<a href="positions.php">有效职位</a> 
	</dd>
	<dd >
		<a href="positionsdown.php">已下线职位</a>
	</dd>
	</dl>
            </div><!-- end .sidebar -->
            <div class="content">
            	<dl class="company_center_content">
                    <dt>
                        <h1>
                            <em></em>
                           有效职位</h1>
                    </dt>
                    <dd>
                    		                    	<form id="searchForm">
	                    		<input type="hidden" value="Publish" name="type">
			                	<ul class="reset my_jobs">
				                			                            	<li data-id="149594">
		                                    
		                                   <?php while
	 ($row=mysqli_fetch_array($result)){ 
	 $jid=$row[0];
	  $jtype= $row[2];
    $jname = $row[3];
	$jdepartment = $row[4];
	$jnature=$row[5];
	$jwage=$row[6];
    $jcity = $row[7];
	$jyear = $row[8];
	$jeducation=$row[9];
	$jadvantage=$row[10];
	$jdetail=$row[11];
	$jaddress=$row[12];
	$jemail=$row[13];
	$jtime=$row[14]; 
	
$sql2="select * from orders where jid='{$jid}' and ostate='未查阅'";
$row2=mysqli_query($con, $sql2);
$rows=mysqli_num_rows($row2);
	
	
	
	
	 echo  '<h3> <a target="_blank" title="'.$jname.'" href="jobdetail.php?jid='.$jid.'"> '.$jtype.'-'.$jname.'</a> 
		                                        <span>'.$jcity .'</span>
		                                        						                        		                                    </h3>
		                                    		                                  		<span class="receivedResumeNo"><a href="unHandleResumes.php?jid='.$jid.'" target="_blank">待处理简历（'.$rows.'）</a></span>
		                                  			                                    <div>'.$jnature.' / '.$jwage.' / '.$jyear.' / '.$jeducation.' </div>
		                                    		                                    				                                    <div class="c9">发布时间'. $jtime.' </div>        <br/>                            <div class="links">
	' ?>
		       <a href="javascript:if(confirm('是否下线该职位？')) location.href='jobdeal.php?jid=<?php echo $jid?>'">下线</a>   
                             			                                       	                      

		                                   <?php echo' </div><hr />';}?>
			                                    		                                    		                                    		
		                                    		                                </li>
	                                	                           	</ul>
			                    			                </form>
		                                    </dd>
                </dl>
            </div><!-- end .content -->
<script src="style/js/job_list.min.js" type="text/javascript"></script> 
			<div class="clear"></div>
			<input type="hidden" value="74fb1ce14ebf4e2495270b0fbad64704" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a rel="nofollow" target="_blank" href="about.html">联系我们</a>
	    <a target="_blank" href="http://www.lagou.com/af/zhaopin.html">互联网公司导航</a></div>
	</div>

<script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>
<script src="style/js/tongji.js" type="text/javascript"></script>
<!--  -->
<script src="style/js/analytics01.js" type="text/javascript"></script><script type="text/javascript" src="style/js/h.js"></script>
<script type="text/javascript">
$(function(){
	$('#noticeDot-1').hide();
	$('#noticeTip a.closeNT').click(function(){
		$(this).parent().hide();
	});
});
var index = Math.floor(Math.random() * 2);
var ipArray = new Array('42.62.79.226','42.62.79.227');
var url = "ws://" + ipArray[index] + ":18080/wsServlet?code=314873";
var CallCenter = {
		init:function(url){
			var _websocket = new WebSocket(url);
			_websocket.onopen = function(evt) {
				console.log("Connected to WebSocket server.");
			};
			_websocket.onclose = function(evt) {
				console.log("Disconnected");
			};
			_websocket.onmessage = function(evt) {
				//alert(evt.data);
				var notice = jQuery.parseJSON(evt.data);
				if(notice.status[0] == 0){
					$('#noticeDot-0').hide();
					$('#noticeTip').hide();
					$('#noticeNo').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
					$('#noticeNoPage').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
				}else{
					$('#noticeDot-0').show();
					$('#noticeTip strong').text(notice.status[0]);
					$('#noticeTip').show();
					$('#noticeNo').text('('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
					$('#noticeNoPage').text(' ('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
				}
				$('#noticeDot-1').hide();
			};
			_websocket.onerror = function(evt) {
				console.log('Error occured: ' + evt);
			};
		}
};
CallCenter.init(url);
</script>

<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body><script type="text/javascript" src="http://freemoban.com/js/a.js"></script> </html>