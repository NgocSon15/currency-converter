<?php
	include('lib/database.php');

	mysqli_query($conn, "delete from converter");

	$currency1 = $currency2 = $countryid1 = $countryid2 = "";
	$amount1 = $amount2 = $tigia1 = $tigia2 = 0;
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$currency1 = $_POST['input-currency'];
		$run1 = mysqli_query($conn, "select * from ti_gia where currency = '$currency1'");

		while($in=mysqli_fetch_array($run1))
		{
			$countryid1 = $in['countryid'];
			$tigia1 = $in['tigia'];
		}
		
		if(empty($_POST['input-text']))
		{
			$amount1 = 0;
		}
		else
		{
			$amount1 = $_POST['input-text'];
		}

		$currency2 = $_POST['output-currency'];
		$run2 = mysqli_query($conn, "select * from ti_gia where currency = '$currency2'");

		while($out=mysqli_fetch_array($run2))
		{
			$countryid2 = $out['countryid'];
			$tigia2 = $out['tigia'];
		}

		$amount2 = $amount1 * $tigia1 / $tigia2;
	}
	$sql = "insert into converter (countryid1, currency1, amount1, countryid2, currency2, amount2) values ('$countryid1','$currency1','$amount1', '$countryid2', '$currency2', '$amount2')";
	mysqli_query($conn, $sql);
?>