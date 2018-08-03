<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async src="style/js/conversion.js"></script><script src="style/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css">
.gk {
	font-weight: bold;
}
#body #container .clearfix .content_l .c_detail div .gk {
	font-size: 36px;
}
.title {
	font-weight: bold;
	font-size: 24px;
	color: #000;
	text-align: center;
}
</style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>公开课-赚了吗-大学生求职就业网</title>


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
    <script type="text/javafunctionscript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script src="style/js/conv.js" type="text/javascript"></script>
<script src="style/js/ajaxCross.json" charset="UTF-8"></script></head>
<body>

<?php 
include('conn.php');
if(isset($_GET["classid"])){
$sql="select * from classroom where classid='{$_GET["classid"]}'";
}

$result=mysqli_query($con, $sql);

while
	 ($row=mysqli_fetch_array($result)){
		 $classid=$row[0];
		 $classtitle=$row[1];
	  $classvideos= $row[2];
    $classtime = $row[3];

	}
	
?>





<div id="body">
	<div id="header">
    	<div class="wrapper">
 <a href="index.php" class="logo">
    			<img src='style/images/logo1.png' width="207" height="52" alt="赚钱了大学生就业网站" />
    		</a>
            
    		<ul id="navheader" class="reset">
    			<li ><a href="index.php">首页</a></li>
    			<li ><a href="companylist.php" >公司</a></li>
    			<li class="current"><a href="xjh.php" rel="nofollow">宣讲会</a></li>
    			<li ><a href="guide.php" rel="nofollow">求职指导</a></li>
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
					<dd><a href="updatePwd.php">密码修改</a></dd><dd><a href="exit.php">退出</a></dd>';}}'
                                               
                                <dd ><a rel="nofollow" href="exit.php">退出</a></dd>
            </dl> ';}  ?>
      </div>
    </div><!-- end #header -->
    <div id="container">
        <!-- <script src="style/js/swfobject_modified.js" type="text/javascript"></script> -->
      <div class="clearfix">
        				
        <div class="content_l">
          <div class="c_breakline"></div>
       
       				<div id="Product">
        					        				
   					  <div class="product_wrap">

									
	                
					  
					            
					            <!--有介绍-->
		                <dl class="c_section">
					               		<dt>
				                   		  <h2><em></em>公开课</h2>
					                   	</dt>
				                   	 <dd>
                                     <div class="title"><?php echo $classtitle;?><br><br><h6>发布时间：<?php echo $classtime;?></h6>
                                       <hr>
                                       <br>

                                     </div>
				                   	   <div class="c_intro"><video src="<?php echo $classvideos;?>" controls width="650px">
</video></div>
				                   	 </dd>
               	  </dl>
	            </div>
				                 	
   			  </div><!-- end #Profile -->
      	
      	<!--[if IE 7]> <br /> <![endif]-->
	    
	        	 		        	<!--无招聘职位-->
	        	<input type="hidden" value="" name="hasNextPage" id="hasNextPage">
	          	<input type="hidden" value="" name="pageNo" id="pageNo">
	          	<input type="hidden" value="" name="pageSize" id="pageSize">
          		
      </div>	<!-- end .content_l --></div>



 </html>