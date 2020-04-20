<?php
   $host   = "remotemysql.com";
   $user   = "J20H6rdYuv";
   $pass   = "73QPsApvZK";
   $dbname = "J20H6rdYuv";

   $conn = mysqli_connect($host, $user, $pass, $dbname) or die('không kết nối được');
   mysqli_select_db($conn, $dbname);
?>