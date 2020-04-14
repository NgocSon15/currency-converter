<?php
	include('../lib/database.php');
	$countryid1 = 2;
	$currency1 = 'USD';
	$amount1 = $_POST['input-text'];
	$countryid2 = 1;
	$currency2 = 'VND';
	$amount2 = $amount1 * 23255;
	$sql = "insert into converter (countryid1, currency1, amount1, countryid2, currency2, amount2) values ('$countryid1','$currency1','$amount1', '$countryid2', '$currency2', '$amount2')";
	mysqli_query($conn, "delete from converter");
	mysqli_query($conn, $sql);
	header('location:../index.php');
?>