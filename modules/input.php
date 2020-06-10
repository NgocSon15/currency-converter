<?php
	include('lib/database.php');

	$currency1 = $currency2 = "";
	$amount1 = $amount2 = $tigia1 = $tigia2 = 0;
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$currency1 = $_POST['input-currency'];
		$run1 = mysqli_query($conn, "select * from currency where currency_name = '$currency1'");

		while($in=mysqli_fetch_array($run1))
		{
			$tigia1 = $in['ti_gia'];
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
		$run2 = mysqli_query($conn, "select * from currency where currency_name = '$currency2'");

		while($out=mysqli_fetch_array($run2))
		{
			$tigia2 = $out['ti_gia'];
		}

		$amount2 = $amount1 * $tigia1 / $tigia2;
	}
?>