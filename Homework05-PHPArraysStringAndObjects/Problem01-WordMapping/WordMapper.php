<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<form method="get">
		<textarea rows="4" cols="50" name="input"></textarea><br>
		<input type="submit" value="Count Words"/><br>
	</form>
<?php
if(isset($_GET['input'])){
	$input = $_GET['input'];
	$input = strtolower($input);
	$words = array();
	$matcher = '/([A-Za-z])+/';
	$check = preg_match_all($matcher, $input,$elements);
	for($i =0;$i<count($elements[0]);$i++){
		$element = $elements[0][$i];
		if(!array_key_exists($element,$words)){
			$words[$element] = 1;
		}
		else{
			$words[$element]++;
		}
	}
	echo "<table border='1'>";
	foreach($words as $word => $count){
		echo "<tr><td>$word</td><td>$count</td></tr>";
	}
	echo "</table>";
}
?>
</body>	
</html>

