<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include('../conn.php');

  if ($_FILES["classvideos"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["classvideos"]["error"] . "<br />";
	echo "<script charset=utf-8>alert('上传失败！');window.location.href='right5.php';</script>";
    }
  else
    {
    echo "Upload: " . $_FILES["classvideos"]["name"] . "<br />";
    echo "Type: " . $_FILES["classvideos"]["type"] . "<br />";
    echo "Size: " . ($_FILES["classvideos"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["classvideos"]["tmp_name"] . "<br />";

    
     if( move_uploaded_file($_FILES["classvideos"]["tmp_name"],"../videos/" . $_FILES["classvideos"]["name"])){
      echo "Stored in: " . "../videos/" . $_FILES["classvideos"]["name"];
	  $path="videos/".$_FILES["classvideos"]["name"];
	$sql = "insert into classroom(classtitle,classvideos) values('{$_POST['classtitle']}','{$path}')";
$result=mysqli_query($con, $sql);
echo "<script charset=utf-8>alert('上传成功！');window.location.href='right5.php';</script>";}
      
    }

?>