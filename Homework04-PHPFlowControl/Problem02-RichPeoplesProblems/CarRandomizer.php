<!DOCTYPE html>
<html>
<head>
		
</head>
<body>
	<form method="get">
		Enter cars 
		<input type="text" name="cars"/>
		<input type="submit" value="Show result"/><br>
	</form>
<?php
if(isset($_GET['cars'])){
	?>
	<table border="1">
	<tr><td><strong>Car</strong></td><td><strong>Color</strong></td><td><strong>Count</strong></td></tr>
	<?php
	$inputText = $_GET['cars'];
	$cars = explode(", ", $inputText);
	$colors = array('white', 'green', 'red', 'yellow', 'blue', 'black', 'orange', 'purple', 'brown');
	foreach($cars as $car){
		$rand_color = $colors[array_rand($colors, 1)];
		$rand_num = rand(1, 5);
	?>
	<tr><td><?php echo $car; ?></td><td><?php echo $rand_color; ?></td><td><?php echo $rand_num; ?></td></tr>
	<?php
	}
	?>
	</table>
	<?php 
}
?>