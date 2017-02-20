<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exchage Rate | Money</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
</head>
<body>
<div class="Contai">
<form>
	<div>
		<tr><h2>Exchange Rate <br>- Money -</h2></tr>
		<br>
		<?php
			$exchRate = $_POST['exchRate'];
			$currency = $_POST['currency'];
			
			switch($currency) {
				
				case 1:
					$currRate=0.03;
					$answer=$exchRate*$currRate;
					?>
					<h3 align="center">
						<?php echo "Amount : ".number_format($answer,2)."  US Dollar |USD"; 
						break; ?>
					</h3>
			<?php
				case 2:
					$currRate = 0.03;
					$answer = $exchRate * $currRate;
					?>
					<h3 align="center">
						<?php echo "Amount : ".number_format($answer,2)."  Euro |EUR"; 
						break; ?>
					</h3>
				
			<?php	
				case 3:
					$currRate = 3.58757333;
					$answer = $exchRate * $currRate;
					?>
					<h3 align="center">
					<?php echo "Amount : ".number_format($answer,2)."  Japanese Yen |JPY"; 
						break; ?>
					<?php
			}
		?>
	</h3>
	<br><br>
	</div>
	</div>
</body>
</html>