<!DOCTYPE html>
<html lang="en">
	<head>
		
		
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>kalkulator</title>
		
		<link href="StyleSheet1.css" rel="stylesheet">
		
	</head>
	
	<body>
		
	<div class="ramka"> 
		
		<form action="" method="post">
			<input type="text" name="no1" id="no1" value="" size="19px" style="text-align: right"><br>
			<input type="text" name="no2" id="no2" value="" size="19px"><br>
			<br>
			<input type="button" onclick="set7ToInput()" name="button7" id="button7" value="7" style="margin-right: 10px">
			<input type="button" onclick="set8ToInput()" name="button8" id="button8" value="8" style="margin-right: 10px">
			<input type="button" onclick="set9ToInput()" name="button9" id="button9" value="9" style="margin-right: 10px">
			<input type="button" onclick="setIlorToInput()" name="button13" value="/" style="margin-right: 10px">
			<input type="button" onclick="setClearEToInput()" name="button15" value="CE"><br><br>
			<input type="button" onclick="set4ToInput()" name="button4" id="button4" value="4"; style="margin-right: 10px">
			<input type="button" onclick="set5ToInput()" name="button5" id="button5" value="5"; style="margin-right: 10px">
			<input type="button" onclick="set6ToInput()" name="button6" id="button6" value="6"; style="margin-right: 10px">
			<input type="button" onclick="setIlocToInput()" name="button12" value="*" style="margin-right: 10px">
			<input type="button" onclick="setClearToInput()" name="button16"value="C"><br><br>
			<input type="button" onclick="set1ToInput()" name="button1" id="button1" value="1"; style="margin-right: 10px">
			<input type="button" onclick="set2ToInput()" name="button2" id="button2" value="2"; style="margin-right: 10px">
			<input type="button" onclick="set3ToInput()" name="button3" id="button3" value="3"; style="margin-right: 10px">
			<input type="button" onclick="setRozToInput()" name="button11" value="-"><br>
			<input type="button" onclick="setWynToInput()" name="button14" value="=" style="width: 20px; height: 62px; position: fixed; top: 140px; left: 150px; margin-right: 10px"><br>
			<input type="button" onclick="set0ToInput()" name="button0" id="button0" value="0"; style="width: 60px; margin-right: 10px">
			<input type="button" onclick="setcToInput()" name="buttonc" id="buttonc" value=","; style="width: 22px; margin-right: 10px">
			<input type="button" onclick="setSumToInput()" name="button10" value="+" style="width: 20px">
			<br><br>
		</form>
		</div>
		
			
		
		<script>
		function set0ToInput() {
		document.getElementById("no1").value = document.getElementById("no1").value + "0";
		}
				
		function set1ToInput() {
        document.getElementById("no1").value = document.getElementById("no1").value + "1";
		}
		
		function set2ToInput() {
        document.getElementById("no1").value = document.getElementById("no1").value + "2";
		}
		
		function set3ToInput() {
        document.getElementById("no1").value = document.getElementById("no1").value + "3";
		}
		
		function set4ToInput() {
        document.getElementById("no1").value = document.getElementById("no1").value + "4";
		}
		
		function set5ToInput() {
        document.getElementById("no1").value = document.getElementById("no1").value + "5";
		}
		
		function set6ToInput() {
        document.getElementById("no1").value = document.getElementById("no1").value + "6";
		}
		
		function set7ToInput() {
		document.getElementById("no1").value = document.getElementById("no1").value + "7";
		}
		
		function set8ToInput() {
        document.getElementById("no1").value = document.getElementById("no1").value + "8";
		}
		
		function set9ToInput() {
        document.getElementById("no1").value = document.getElementById("no1").value + "9";
		}
		
		function setClearEToInput() {
		document.getElementById("no1").value = ""
		
		val2=0;
		}
		
		function setClearToInput() {
		document.getElementById("no1").value = ""
		document.getElementById("no2").value = ""
		znval1=0;
		znval2=0;
		znval3=0;
		znval4=0;
		val3=0;
		wynik1=0;
		val2=0;
		}
		
		
		var val2;
		function setcToInput() {

			if (Number.isInteger(Number(document.getElementById("no1").value)) == true)
			{
			}
			else
			{
			val2=1;
			}
			
			
		
			if (val2 != 1) {
				document.getElementById("no1").value = document.getElementById("no1").value + ".";
				
				val2=1;
			}
		}
		</script>
		
		
		<script>
		var val3=0;
		var	wynik1=0;
		var znval1=0;
		var znval2=0;
		var znval3=0;
		var znval4=0;
		</script>	
			
		<script>
		function setSumToInput()
		{ 
		if (znval1 != 1) {	
        val3=document.getElementById("no1").value;
		document.getElementById("no1").value='';
		
		document.getElementById("no2").value=val3;
		
		znval1=1;
		}
		}
		</script>
			
				
		
		<script>
		function setRozToInput()
		{ 
		if (znval2 != 1) {	
        val3=document.getElementById("no1").value;
		document.getElementById("no1").value='';
		
		document.getElementById("no2").value=val3;
		
		znval2=1;
		}
		}
		</script>		
		
		
		<script>
		function setIlocToInput()
		{ 
		if (znval3 != 1) {	
        val3=document.getElementById("no1").value;
		document.getElementById("no1").value='';
		
		document.getElementById("no2").value=val3;
		
		znval3=1;
		}
		}
		</script>
		
		
		<script>
		function setIlorToInput()
		{ 
		if (znval4 != 1) {	
        val3=document.getElementById("no1").value;
		document.getElementById("no1").value='';
		
		document.getElementById("no2").value=val3;
		
		znval4=1;
		}
		}
		</script>
		
		
		
		<script>
		function setWynToInput() {
			
		if (znval1==1)
		{
		wynik1=Number(val3) + Number(document.getElementById("no1").value);
		document.getElementById("no1").value=wynik1;	
		}
			
		if (znval2==1)
		{
		wynik1=Number(val3) - Number(document.getElementById("no1").value);
		document.getElementById("no1").value=wynik1;
		}
		
		if (znval3==1)
		{
		wynik1=Number(val3) * Number(document.getElementById("no1").value);
		document.getElementById("no1").value=wynik1;
		}
		
		if (znval4==1)
		{
		wynik1=Number(val3) / Number(document.getElementById("no1").value);
		document.getElementById("no1").value=wynik1;
		
		}
		
		
		if (znval1==1 || znval2==1 || znval3==1 || znval4==1)
		{	
		znval1=0;
		znval2=0;
		znval3=0;
		znval4=0;
		val3=0;
		wynik1=0;
		val2=0;
		}
		}
		</script>
		
	</body>
</html> 			