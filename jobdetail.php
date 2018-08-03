<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
<script id="allmobilize" charset="utf-8" src="style/js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>赚了吗-大学生求职就业网</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="内容运营 武汉 本科 3-5年 全职 运营 大家都来了 你还在等什么！！ 立方网 北京立方网信息技术有限公司 立方网努力尝试把许多人对互联网的需求从现有的娱乐、资讯和交流平台进一步引导到文化与生活伴侣的方面. 拉勾网-最专业的互联网招聘平台" name="description">
<meta content="内容运营 武汉 本科 3-5年 全职 运营 大家都来了 你还在等什么！！ 立方网 北京立方网信息技术有限公司 立方网努力尝试把许多人对互联网的需求从现有的娱乐、资讯和交流平台进一步引导到文化与生活伴侣的方面. 拉勾网-最专业的互联网招聘平台" name="keywords">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="icon" href="style/images/topico.ico">
<link rel="stylesheet" type="text/css" href="style/css/style.css"/>
<link rel="stylesheet" type="text/css" href="style/css/external.min.css"/>
<link rel="stylesheet" type="text/css" href="style/css/popup.css"/>
<script src="style/js/jquery.1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="style/js/jquery.lib.min.js"></script>
<script src="style/js/ajaxfileupload.js" type="text/javascript"></script>
<script src="style/js/jquery-hbzx.js" type="text/javascript"></script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="style/js/conv.js"></script>
</head>

<?php 
include('conn.php');
//$sql="select * from com where cid='{$_COOKIE["id"]}'";
$sql="select * from job where jid='{$_GET['jid']}'";
$result=mysqli_query($con, $sql);
//$result2=mysqli_query($con, $sql2);
while
	 ($row=mysqli_fetch_array($result)){
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
	}
	$sql2="select * from com where cid='{$cid}'";
	$result2=mysqli_query($con, $sql2);
	while
	 ($row=mysqli_fetch_array($result2))
	 {
	 $cid= $row[0];
    $cname = $row[1];
	$ctx = $row[3];
	$cintro=$row[4];
	$comjs=$row[5];
    $ccity = $row[6];
	$cfield = $row[7];
	$csize=$row[8];
	$chome=$row[9];
	$cnumber=$row[10];
		 }
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
            </dl> ';}  ?>
                                </div>
    </div><!-- end #header -->
    <div id="container">
                <div class="clearfix">
            <div class="content_l">
            	                <dl class="job_detail">
                    <dt>
                        <h1 title="内容运营">
                            <em></em>
                                                        	<div><?php echo $cname; ?></div>
<?php echo $jname; ?>
                        </h1>
                        
                                               	
                       	                       
                       		                       	</a>
                       	                    </dt>
                    <dd class="job_request">
                    	<span class="red"><?php echo $jwage; ?></span>
                       	<span><?php echo $jcity; ?></span> 
                       	<span><?php echo $jyear; ?> </span>
                       	<span> <?php echo $jeducation; ?></span> 
                       	<span><?php echo $jnature; ?></span><br />
                      	  职位诱惑 :<?php echo $jadvantage; ?>
                      	<div>发布时间：<?php echo $jtime; ?></div>
                    </dd>
                    <dd class="job_bt">
                        <h3 class="description">职位描述</h3>
                        <p><?php echo $jdetail; ?></p>
                    </dd>

                                       	<dd>
                                        	                    			                        	<a href="<?php
																										if(isset($_COOKIE["type"])){ 																							if($_COOKIE["type"]=="stu"){																											echo "#setResume";}
else{ echo "#nosend";}																									}
else{echo "#loginPop";}?>" title="投个简历" class="inline btn fr btn_apply">投个简历</a>
	                        	                   		                	                </dd>
                </dl>
                                <div id="weibolist"></div>
            </div>	
            <div class="content_r">
                <dl class="job_company">
                    <dt>
                    	<a href="h/c/683.html" target="_blank">
                            <img class="b2" src="<?php echo $ctx; ?>" width="80" height="80" alt="<?php echo $cname; ?>" />
                            <div>
                                <h2 class="fl">
                                	                                  		<?php echo $cname; ?>
                                  	                                  	
                                  	                                    	<img src="style/images/valid.png" width="15" height="19" alt="拉勾认证企业" /> 
                                    	<span class="dn">拉勾认证企业</span>
                                                                        
                                </h2>
                            </div>
                        </a>
                    </dt>
                    <dd>
                    	<ul class="c_feature reset">
                        	<li><span>领域</span> <?php echo $cfield; ?></li>
                        	<li><span>规模</span> <?php echo $csize; ?></li>
                        	<li>
                        		<span>主页</span> 
                        		           							<a href="http://<?php echo $chome; ?>" target="_blank" title="<?php echo $ctx; ?>" rel="nofollow"><?php echo $chome; ?></a>
           						                        	</li>
                        </ul>
                        
                      
                        
                      <!--	                    	<h4>公司产品</h4>
	                        <ul class="c_feature reset">
	                        		                        		<li><span>在哪</span></li>
	                        		                        		<li><span>立方网</span></li>
	                        		                        		<li><span>立方飞鸽</span></li>
	                        		                        </ul>
                                                
                       	<h4>公司标签</h4>
                        <ul class="company_tags reset" id="hasLabels">
                        	                            	<li><span>专业主厨</span></li>
                                                        	<li><span>帅哥多</span></li>
                                                        	<li><span>扁平管理</span></li>
                                                        	<li><span>弹性工作</span></li>
                                                        	<li><span>岗位晋升</span></li>
                                                        	<li><span>领导好</span></li>
                                                       <li class="link"><a>编辑</a></li>
                        </ul>
                        <div class="clear"></div>
                        <div id="addLabel" class="addLabel dn">
                            <input type="text" class="fl" id="label" name="label" placeholder="添加自定义标签" />	
                            <input type="submit" id="add" value="贴上" />
                        </div> -->
                       	
                       	                       	<h4>工作地址</h4>
                       	<div><?php echo $jaddress; ?></div>
                    </dd>
                </dl>
            </div>
       	</div>                    
      <input type="hidden" value="" name="userid" id="userid" />
      <input type="hidden" value="" name="type" id="resend_type" />
      <input type="hidden" value="140204"  id="jobid" />
      <input type="hidden" value="683"  id="companyid" />
      <input type="hidden" value="" id="positionLng" />
      <input type="hidden" value="" id="positionLat" />
      <div id="tipOverlay" ></div>
<!-------------------------------------弹窗lightbox  ----------------------------------------->
<div style="display:none;">
	<!-- 设置默认投递简历 -->
	<div id="setResume" class="popup" style="height:280px;">
	    <table width="100%">
	    	<tr>
	    		<td class="f18 c5">请查看简历信息：</td>
	    	</tr>
	    	<tr>
	            <td class="f18 c5"><a href="jianli.php" target="new">编辑我的简历</a></td>
	        </tr>
            <tr>
	            <td class="f18 c5"><a href="preview.php" target="view_window">浏览我的在线简历</a></td>
	        </tr>
            <tr>
	            <td class="f18 c5"><button onclick="window.location.href='jobsubmit.php?jid=<?php echo $_GET["jid"]?>&cid=<?php echo $cid?>'">确认投递</button>  </td>
	        </tr>
	    </table>
	</div><!--/#setResume-->




	
	
	
	
	<!-- 登录框 -->
	<div id="loginPop" class="popup" style="height:50px;">
      


		    <a href="login.html"><h1>请登录</h1></a>


    </div><!--/#loginPop-->
    
    <!-- 投简历成功前填写基本信息 -->
    <style>
    #cboxContent{overflow:visible;}
    #colorbox, #cboxOverlay, #cboxWrapper{overflow:visible;}
    </style>
    
    
    <!-- 上传附件简历操作说明-重新上传 -->
    <div id="nosend" class="popup">
        <table width="100%">
            <tr>
                <td>
                	<div class="f18 mb10">企业账号无法进行投简历操作</div>
                </td>
            </tr>


      </table>
    </div><!--/#fileResumeUpload-->
    
    <!-- 上传附件简历操作说明-重新上传 -->
    
    
   
    
    
    
   
    
   
   

<script type="text/javascript" src="style/js/job_detail.js"></script>
<script type="text/javascript" src="style/js/count.js"></script>

<!-- <script type="text/javascript">
var options = {
    	"snsId": "snwb",
    	"uid": "",
    	"token": "",
    	"openId": "",
    	"appKey": "",
    	"merchantId": "11253",
    	"merchantType": "news",
    	"socialLoginUrl_sina": ctx+"/ologin/auth/sina.html",
    	"socialLoginUrl_qq": "",
    	"weiboId_sina": "3619164344010985",
    	"weiboId_qq": "",
    	"socialAllUrl": ctx+"/user/hbzx.html",
    	"productId": "140204",
    	"productCategory": "",
    	"productName": "内容运营",
    	"productArea": "武汉",
    	"productPrice": "",
    	"productUrl": ctx+"/jobs/140204.html",
    	"productImage": ctx+"/upload/logo/ff80808140ac5ed90140b953972e0215.png",
    	"excerpt": "武汉 / 全职 / 4k-6k / 经验3-5年 / 本科及以上 / 职位诱惑 : 大家都来了 你还在等什么！！",
    	"sendContent":"我觉得这个职位不错，你觉得咋样？",
    	"shareContent":"请输入你对此职位的评论",
    	"autoSend": false,
    	"load": true
　　}
</script>
<script src="style/js/common.js" type="text/javascript"></script> -->
<script>
$(function(){
	$('#weibolist .cookietxte').text('推荐本职位给好友');
	$(document).bind('cbox_complete', function(){ 
		hbzxJQ("#gaosutapt .pttui a").trigger("click"); 
		hbzxJQ("#mepingpt .pttui a").trigger("click"); 
	});
	$('#cboxOverlay').bind('click',function(){
		top.location.reload();
	});
	$('#colorbox').on('click','#cboxClose',function(){
		if($(this).siblings('#cboxLoadedContent').children('div').attr('id') == 'deliverResumesSuccess' || $(this).siblings('#cboxLoadedContent').children('div').attr('id') == 'uploadFileSuccess'){
			top.location.reload();
		}
	});
	})
</script>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=3d6a9f4b807441569414b01eecc20959"></script>
<script type="text/javascript">
		//百度地图API功能
		var sMap = new BMap.Map("smallmap");
		sMap.enableScrollWheelZoom(true);
		
		if($('#positionLat').val() && $('#positionLng').val()){
			var sPoint = new BMap.Point($('#positionLng').val(),$('#positionLat').val());
			sMap.centerAndZoom(sPoint,12);
			sMap.addOverlay(new BMap.Marker(sPoint));              // 将标注添加到地图中
			
		}else{
			// 创建地址解析器实例
			var sMyGeo = new BMap.Geocoder();
			// 将地址解析结果显示在地图上,并调整地图视野
			sMyGeo.getPoint("武汉市武昌区螃蟹岬凤凰大厦A1-1301", function(sPoint){
			  if (sPoint) {
				  sMap.centerAndZoom(sPoint, 16);
				  sMap.addOverlay(new BMap.Marker(sPoint));
			  }
			}, "武汉");
		}

		/*弹窗大地图*/
		var map = new BMap.Map("allmap");
		map.addControl(new BMap.NavigationControl());
		map.addControl(new BMap.MapTypeControl());
		map.addControl(new BMap.OverviewMapControl());
		map.enableScrollWheelZoom(true);
		// 创建地址解析器实例
		var gc = new BMap.Geocoder();
		$(function(){
			$('#mapPreview').bind('click',function(){
				$.colorbox({inline:true, href:"#baiduMap",title:"公司地址"});
				var address = "武汉市武昌区螃蟹岬凤凰大厦A1-1301";
				var city = "武汉";
				var lat = $('#positionLat').val();
				var lng = $('#positionLng').val();
			    map.setCurrentCity(city);
			    map.setZoom(12);
				if(lat && lng){
					var p = new BMap.Point(lng, lat);
					var marker = new BMap.Marker(p);  // 创建标注
					map.addOverlay(marker);              // 将标注添加到地图中
					setTimeout(function(){
						map.centerAndZoom(p, 15);
					},1000);
					map.setCenter(p);
					map.setZoom(15);
					var sContent =
						"<h4 style='margin:0 0 5px 0;padding:0.2em 0'>"+city+"</h4>" + 
						"<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>"+address+"</p>" + 
						"</div>";
					 var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
				 	//图片加载完毕重绘infowindow
			 		marker.openInfoWindow(infoWindow);
		 		}else{
					gc.getPoint(address, function(point){
						  if (point) {
							  	var p = new BMap.Point(point.lng, point.lat);
								var marker = new BMap.Marker(p);  // 创建标注
								map.addOverlay(marker);              // 将标注添加到地图中
								setTimeout(function(){
									map.centerAndZoom(p, 15);
								},1000);
								map.setZoom(14);
								var sContent =
									"<h4 style='margin:0 0 5px 0;padding:0.2em 0'>"+city+"</h4>" + 
									"<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>"+address+"</p>" + 
									"</div>";
								 var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
							 	//图片加载完毕重绘infowindow
						 		marker.openInfoWindow(infoWindow);
						  }
					}, city);
				}
				
				
			});
	
		});
</script>
			<div class="clear"></div>
			<input type="hidden" id="resubmitToken" value="6e1925fdbe7142468f154abd1d33f5a8" />
	    	<a id="backtop" title="回到顶部" rel="nofollow"></a>
	    </div><!-- end #container -->
	</div><!-- end #body -->
	<div id="footer">
		<div class="wrapper">
			<a href="h/about.html" target="_blank" rel="nofollow">联系我们</a>
	    <a href="h/af/zhaopin.html" target="_blank">互联网公司导航</a><a class="footer_qr" href="javascript:void(0)" rel="nofollow"><i></i></a></div>
	</div>

<script type="text/javascript" src="style/js/core.min.js"></script>
<script type="text/javascript" src="style/js/popup.min.js"></script>

<!--  -->

</body><script type="text/javascript" src="http://freemoban.com/js/a.js"></script> 
</html>