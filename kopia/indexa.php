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
			<input type="text" name="no1" id="no1" value="2" size="10px"><br>
			<input type="text" name="no2" id="no2" value="3"><br>
			<input type="button" onclick="set7ToInput()" name="button7" id="button7" value="7">
			<input type="button" onclick="set8ToInput()" name="button8" id="button8" value="8">
			<input type="button" onclick="set9ToInput()" name="button9" id="button9" value="9">
			<input type="submit" name="submit13" value="/"><br>
			<input type="button" onclick="set4ToInput()" name="button4" id="button4" value="4">
			<input type="button" onclick="set5ToInput()" name="button5" id="button5" value="5">
			<input type="button" onclick="set6ToInput()" name="button6" id="button6" value="6">
			<input type="submit" name="submit12" value="*"><br>
			<input type="button" onclick="set1ToInput()" name="button1" id="button1" value="1">
			<input type="button" onclick="set2ToInput()" name="button2" id="button2" value="2">
			<input type="button" onclick="set3ToInput()" name="button3" id="button3" value="3">
			<input type="submit" name="submit11" value="-"><br>
			<input type="button" onclick="set0ToInput()" name="button0" id="button0" value="0" style="width: 50px">
			<input type="button" onclick="setcToInput()" name="buttonc" id="buttonc" value="," style="width: 22px">
			<input type="submit" name="submit10" value="+" style="width: 20px">
			<br>
		</form>
		   
		
		<script>
		function set0ToInput() {
		document.getElementById("no1").value = "0";
		}
				
		function set1ToInput() {
        document.getElementById("no1").value = "1";
		}
		
		function set2ToInput() {
        document.getElementById("no1").value = "2";
		}
		
		function set3ToInput() {
        document.getElementById("no1").value = "3";
		}
		
		function set4ToInput() {
        document.getElementById("no1").value = "4";
		}
		
		function set5ToInput() {
        document.getElementById("no1").value = "5";
		}
		
		function set6ToInput() {
        document.getElementById("no1").value = "6";
		}
		
		function set7ToInput() {
		document.getElementById("no1").value = "7";
		}
		
		function set8ToInput() {
        document.getElementById("no1").value = "8";
		}
		
		function set9ToInput() {
        document.getElementById("no1").value = "9";
		}
		
		function setcToInput() {
        document.getElementById("no1").value = ",";
		}
		</script>
		
		
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
			
			
		
	</body>
</html> 			