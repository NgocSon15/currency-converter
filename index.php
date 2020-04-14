<!DOCTYPE html>
<html lang="vi">
<head>
	<link rel="stylesheet" type="text/css" href="style/giaodien.css">
	<title>Currency Converter</title>
</head>
<body>
	<div class="wrapper">
		<?php
			include('lib/database.php');
			include('modules/banner.php');
			include('modules/heading.php');
			include('modules/converter.php');
		?>

		<script>
			function convert() {
				document.getElementById("to-text").value = "50";
			}
		</script>
	</div>
</body>
</html>