<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Programación II </title>
	</head>
	<body>
		<div class=select>
			<select name=sel id=sel>
				<option disabled selected> Elije un numero </option>
				<?php
					$n = 1;
					for ($n = 1; $n < 11; $n++) {
						echo "<option>$n</option>";
				}
				?>
			</select>
		</div>
	</body>
</html>