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
			<input type="submit" name="submit1" value="1">
			<input type="submit" name="submit2" value="2">
			<input type="submit" name="submit3" value="3"><br>
			<input type="submit" name="submit4" value="4">
			<input type="submit" name="submit5" value="5">
			<input type="submit" name="submit6" value="6"><br>
			<input type="submit" name="submit7" value="7">
			<input type="submit" name="submit8" value="8">
			<input type="submit" name="submit9" value="9"><br>
			<input type="submit" name="submit10" value="Dodawanie">
			<input type="submit" name="submit11" value="Odejmowanie">
			<input type="submit" name="submit12" value="Mnozenie">
			<input type="submit" name="submit13" value="Dzielenie"><br>
		</form>
		
		<?php if(isset($_POST['submit1'])) {?>
		<input type="text" name="no1" value="<?php echo 1; ?>">
		<?php }
		?>


		<?php if(isset($_POST['submit2'])) {?>
		<input type="text" name="no1" value="2">
		<?php }
		?>
		
		
		<?php
			$sum="";
			$multiply="";
			$subtract="";
			$divide="";
			
			if(isset($_POST['submit10']))
			{
				print_r($_POST);
				$no1=$_POST['no1'];
				$no2=$_POST['no2'];
				$sum=$no1+$no2;
			}	
			
			if(isset($_POST['submit11']))
			{
				print_r($_POST);
				$no1=$_POST['no1'];
				$no2=$_POST['no2'];
				$subtract=$no1-$no2;
			}	
			
			
			if(isset($_POST['submit12']))
			{
				print_r($_POST);
				$no1=$_POST['no1'];
				$no2=$_POST['no2'];
				$multiply=$no1*$no2;
			}
			
			if(isset($_POST['submit13']))
			{
				print_r($_POST);
				$no1=$_POST['no1'];
				$no2=$_POST['no2'];
				$divide=$no1/$no2;
			}
		?>
		
		<?php if ($sum) {?>
			<input type="text" value="<?php echo $sum; ?>">
		<?php } if($subtract){?>
			<input type="text" value="<?php echo $subtract; ?>">
		<?php } if($multiply){?>
			<input type="text" value="<?php echo $multiply; ?>">
		<?php } if($divide){?>
			<input type="text" value="<?php echo $divide; ?>">
		<?php }		
		?>
		
		
		
		
		<?php if ($sum) {
		echo "<input type='text' value=$sum>";
		 } if($multiply){
		echo '<input type="text" value=  ';  echo $multiply; echo ' > ';
		} ?>
		
		
		</div>
		
		<?php echo "<br>"; ?>
		<?php echo "<br>"; ?>
		
		<?php $zmienna = 3 ?>
		<?php echo ('asd'); ?>
		<?php echo (1); ?>
		<?php echo 3; ?>
		<?php echo "333das"; ?>
		
		<?php echo "$zmienna"; ?>
		<?php echo '$zmienna'; ?>
		
			<br>
			<br>
			<br>
			
			<?php echo "<br>"; ?>
		
		<?php $zmienna = 3 ?><?php echo "<br>"; ?>
		<?php echo ("$zmienna"); ?><?php echo ("<br>"); ?>
		<?php echo ('asd'); ?><?php echo "<br>"; ?>
		<?php echo (1); ?><?php echo "<br>"; ?>
		<?php echo 3; ?><?php echo "<br>"; ?>
		<?php echo "333das";  echo "<br>"; ?>
		<?php echo "$zmienna"; ?><?php echo "<br>"; ?>
		<?php echo '$zmiennatekst'; ?><?php echo "<br>"; ?>
		
		
	</body>
</html> 			