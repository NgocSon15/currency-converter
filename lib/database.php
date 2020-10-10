<?php
   $host   = "remotemysql.com";
   $user   = "D5np0Doa1R";
   $pass   = "4Ht6uQ4wiP";
   $dbname = "D5np0Doa1R";

   $conn = mysqli_connect($host, $user, $pass, $dbname) or die('không kết nối được');
   mysqli_select_db($conn, $dbname);
?>