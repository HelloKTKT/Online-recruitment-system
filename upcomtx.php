<?php
include('conn.php');
/*$sql = "select * from student where id='{$_COOKIE["id"]}'";
$result=mysqli_query($con, $sql);

 while
	 ($row=mysqli_fetch_array($result))
	 {
	 $photo = $row[9];//也可以这样获取：$name = $row['name'];
	}*/
	


if (empty($_FILES) === false) { 



    $imgname = $_FILES['comtx']['name'];
    $tmp = $_FILES['comtx']['tmp_name'];
    $filepath = 'photo/comtx/';
	$file_size = $_FILES['comtx']['size']; 
	$ext_arr = array("gif", "jpg", "jpeg", "png", "bmp");
	$file_error = $_FILES['comtx']['error'];  
    //最大文件大小  
    $max_size = 1024*1024*5;//(默认1M) 
	if (!$imgname) {  
        exit("返回错误: 请选择文件。");
		
    }  
      
    //检查错误类型 0：文件上传成功。1：超过了文件大小php.ini中即系统设定的大小。2：超过了文件大小  
    /*if ($file_error>'0') {  
        exit("返回错误: 上传文件($file_name)大小超过限制。最大".($max_size/1024)."KB");  
    }  */
	if ($file_size > $max_size) {  
        exit("返回错误: 上传文件($file_name)大小超过限制。最大".($max_size/1024)."KB"); 
		echo "<script charset=utf-8>alert('上传成功！')</script>";
    } 
	$temp_arr = explode(".", $imgname);  
    $file_ext = array_pop($temp_arr);  
    $file_ext = trim($file_ext);  
    $file_ext = strtolower($file_ext);  
    if (in_array($file_ext, $ext_arr) === false) {  
        exit("返回错误: 上传文件必须为图片格式。"); 
		echo "<script charset=utf-8>alert('上传成功！')</script>";
    }  
	 
    if(move_uploaded_file($tmp,$filepath.$_COOKIE["id"].".jpg")){
        echo "<script charset=utf-8>alert('上传成功！')</script>";
    }else{
        echo "<script charset=utf-8>alert('上传失败！')</script>";
    }
	}

	$path=$filepath.$_COOKIE["id"].".jpg";
	$sql = "UPDATE com SET ctx = '{$path}' WHERE cid = '{$_COOKIE["id"]}'";
$result=mysqli_query($con, $sql);
echo "<script charset=utf-8>window.location.replace(document.referrer); </script>";


?>