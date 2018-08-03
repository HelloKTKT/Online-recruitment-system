<?php

setcookie("user", "", time()-3600);
setcookie("type", "", time()-3600);
echo "<script charset=utf-8>window.location.href='index.php';</script>";



?>