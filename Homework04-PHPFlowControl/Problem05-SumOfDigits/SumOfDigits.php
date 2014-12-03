<!DOCTYPE html>
<html>
<head>
		
</head>
<body>
	<form method="get">
		Input String:
		<input type="text" name="inputString"/>
		<input type="submit" value="Submit"/><br>
	</form>
<?php
if(isset($_GET['inputString'])){
	$elements = explode(", ", $_GET['inputString']);
	echo "<table border='1'>";
	foreach($elements as $element){
		if(is_numeric($element)){
			$sum = array_sum(str_split($element));
			echo "<tr><td>$element</td><td>$sum</td></tr>";
		}
		else{
			echo "<tr><td>$element</td><td>I cannot sum that</td></tr>";
		}
	}
	echo "</table>";
}
?>
</body>
</html>