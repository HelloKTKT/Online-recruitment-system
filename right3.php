<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head><script>
$('#chooseImage').on('change',function(){  
        var filePath = $(this).val(),         //获取到input的value，里面是文件的路径  
            fileFormat = filePath.substring(filePath.lastIndexOf(".")).toLowerCase();  
        // 检查是否是图片  
        if( !fileFormat.match(/.png|.jpg|.jpeg/) ) {  
            error_prompt_alert('上传错误,文件格式必须为：png/jpg/jpeg');  
            return;    
        }  
        $('#cropedBigImg').attr('src',filePath);  
        $('#loding').show();  
}); 
$('#chooseImage').on('change',function(){  
        var filePath = $(this).val(),         //获取到input的value，里面是文件的路径  
            fileFormat = filePath.substring(filePath.lastIndexOf(".")).toLowerCase(),  
            src = window.URL.createObjectURL(this.files[0]); //转成可以在本地预览的格式  
              
        // 检查是否是图片  
        if( !fileFormat.match(/.png|.jpg|.jpeg/) ) {  
            error_prompt_alert('上传错误,文件格式必须为：png/jpg/jpeg');  
            return;    
        }  
    
        $('#cropedBigImg').attr('src',src);  
});  </script> 
<body>
<div>
<form class="container" enctype="multipart/form-data" method="post" id='formBox' name="form">   
       <input type="file" id="chooseImage" name="file">  
       <!-- 保存用户自定义的背景图片 -->  
       <img id="cropedBigImg" value='custom' alt="lorem ipsum dolor sit" data-address='' title="自定义背景" src =" window.URL.createObjectURL(this.files[0])"; //转成可以在本地预览的格式  />  
 </form>  
</div>

</body>
</html>