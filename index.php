<!DOCTYPE html>
<html lang="en">
	<head>
		
		
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>kalkulator</title>
		
		<link href="C:\xampp\htdocs\kalkulator\stylesheet1.css" rel="stylesheet">
		
	</head>
	
	
	
	<body>
		
		
		<form action="" method="post">
			<input type="text" name="no1" value="2" size="10px"><br>
			<input type="text" name="no2" value="3"><br>
			<input type="text" name="no3" value="5"><br>
			<input type="submit" name="submit" value="Multiplication"><br>
		</form>
		
		<?php
			$sum="";
			if(isset($_POST['submit']))
			{
				print_r($_POST);
				$no1=$_POST['no1'];
				$no2=$_POST['no2'];
				$sum=$no1*$no2;
			}	
		?>
		
		<div id="kolumny">
		<input type="text" value="<?php echo $sum; ?>">
		<input type="text" value="<?php echo $sum; ?>">
		</div>
		
	</body>
</html> 			