<!DOCTYPE html>
<html lang="en">
	<head>
		
		
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>kalkulator</title>
		
		<link href="stylesheet1.css" rel="stylesheet">
					
	</head>
	
	
	
	<body>
		
		
		<form action="" method="post">
		<input type="text" name="no1" value="1"><br>
		<input type="text" name="no2" value="2"><br>
		<input type="submit" name="submit" value="SUM "><br>
		</form>
<?php
		$sum="";
if(isset($_POST['submit']))
{
	$no1=$_POST['no1'];
	$no2=$_POST['no2'];
	$sum=$no1+$no2;
}	
		

?>
	<input type="text" value="<?php echo $sum; ?>">	
	</body>
</html> 			