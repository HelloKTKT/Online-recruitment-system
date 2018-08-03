<?php
include('conn.php');

	


if (empty($_FILES) === false) { 



    $imgname = $_FILES['upjl']['name'];
    $tmp = $_FILES['upjl']['tmp_name'];
    $filepath = 'jianli/';

	$ext_arr = array("doc", "docx");
	$file_error = $_FILES['upjl']['error'];  
    //最大文件大小  
    //$max_size = 1024*1024*5;//(默认1M) 
	if (!$imgname) {  
        exit("返回错误: 请选择文件。");
		
    }  
      
    //检查错误类型 0：文件上传成功。1：超过了文件大小php.ini中即系统设定的大小。2：超过了文件大小  
    /*if ($file_error>'0') {  
        exit("返回错误: 上传文件($file_name)大小超过限制。最大".($max_size/1024)."KB");  
    }  */
	
	$temp_arr = explode(".", $imgname);  
    $file_ext = array_pop($temp_arr);  
    $file_ext = trim($file_ext);  
    $file_ext = strtolower($file_ext);  
    if (in_array($file_ext, $ext_arr) === false) {  
        exit("返回错误: 上传文件必须为docx,doc格式。"); 

    }  
	 
    if(move_uploaded_file($tmp,$filepath.$_COOKIE["id"].".docx")){
        echo "<script charset=utf-8>alert('上传成功！')</script>";
    }else{
        echo "<script charset=utf-8>alert('上传失败！')</script>";
    }
	}

	$path=$filepath.$_COOKIE["id"]."-".$_COOKIE["user"]."-简历.docx";
	$sql = "UPDATE student SET jl = '{$path}' WHERE id = '{$_COOKIE["id"]}'";
$result=mysqli_query($con, $sql);

echo "<script charset=utf-8>window.location.href='jianli.php'; </script>";

?>