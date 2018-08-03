<?php
session_start();
unset($_SESSION['aid']);
echo"<script>window.parent.location.href='index.php';</script>";
 ?>