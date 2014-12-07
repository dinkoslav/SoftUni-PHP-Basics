<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<form method="get">
		<textarea rows="4" cols="50" name="input"></textarea><br>
		<input type="submit" value="Color text"/><br>
	</form>
<?php
if(isset($_GET['input'])){
	$input = $_GET['input'];
	$matcher = '/\S/';
	$check = preg_match_all($matcher, $input,$elements);
	for($i =0;$i<count($elements[0]);$i++){
		$element = $elements[0][$i];
		if((ord ($element))%2 == 0){
			echo "<p style='color: red; float:left; margin-right:5px;'>$element </p>";
		}
		else{
			echo "<p style='color: blue; float:left; margin-right:5px;'>$element </p>";
		}
	}
}
?>
</body>	
</html>