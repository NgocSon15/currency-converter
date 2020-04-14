<?php
   $host   = "localhost";
   $user   = "root";
   $pass   = "";
   $dbname = "currency_converter";

   $conn = mysqli_connect($host, $user, $pass, $dbname) or die('không kết nối được');
   mysqli_select_db($conn, $dbname);
?>