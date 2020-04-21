<?php
	include('../lib/database.php');
	$currency1 = $_POST['input-currency'];
	$run1 = mysqli_query($conn, "select * from ti_gia where currency = '$currency1'");

	while($in=mysqli_fetch_array($run1))
	{
		$countryid1 = $in['countryid'];
		$tigia1 = $in['tigia'];
	}
	
	$amount1 = $_POST['input-text'];

	$currency2 = $_POST['output-currency'];
	$run2 = mysqli_query($conn, "select * from ti_gia where currency = '$currency2'");

	while($out=mysqli_fetch_array($run2))
	{
		$countryid2 = $out['countryid'];
		$tigia2 = $out['tigia'];
	}

	$amount2 = $amount1 * $tigia1 / $tigia2;
	$sql = "insert into converter (countryid1, currency1, amount1, countryid2, currency2, amount2) values ('$countryid1','$currency1','$amount1', '$countryid2', '$currency2', '$amount2')";
	mysqli_query($conn, "delete from converter");
	mysqli_query($conn, $sql);
	header('location:../index.php');
?>