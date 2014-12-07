<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form method="get">
		Text: <textarea rows="4" cols="50" name="input"></textarea><br>
		Banlist: <input type="text" name="banlist"/><br>
		<input type="submit" value="Ban"/><br>
	</form><br>
<?php
if(isset($_GET['input']) && isset($_GET['banlist'])){
	$input = $_GET['input'];
	$banlist = explode(', ', $_GET['banlist']);
	foreach($banlist as $element){
		$replacement = str_repeat('*', strlen($element));
		$input = str_replace($element,$replacement ,$input);
	}
	echo $input;
}
?>
</body>	
</html>