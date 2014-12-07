<!DOCTYPE html>
<html>
<head>
	<style>
		div{
			width: 145px;
			margin-bottom:10px;
			border:1px solid black;
			border-radius:20px;
			background-color:lightblue;
		}
		h1{
			width:95%;
			float:right;
			border-bottom:1px solid black;
			font-size:20px;
		}
		li{
			text-decoration:underline;
		}
	</style>
</head>
<body>
	<form method="get">
		Categories: <input type="text" name="cats"/><br>
		Tags: <input type="text" name="tags"/><br>
		Months: <input type="text" name="months"/><br>
		<input type="submit" value="Generate"/><br>
	</form><br>
<?php
if(isset($_GET['cats']) && $_GET['cats'] != ""){
	$input = $_GET['cats'];
	$elements = explode(', ', $input);
	echo "<div>";
	echo "<h1>Categories</h1>";
	echo "<ul>";
	for($i =0;$i<count($elements);$i++){
		echo "<li type='circle'>$elements[$i]</li>";
	}
	echo "</div>";
	echo "</ul>";
}
if(isset($_GET['tags']) && $_GET['tags'] != ""){
	$input = $_GET['tags'];
	$elements = explode(', ', $input);
	echo "<div>";
	echo "<h1>Tags</h1>";
	echo "<ul>";
	for($i =0;$i<count($elements);$i++){
		echo "<li type='circle'>$elements[$i]</li>";
	}
	echo "</div>";
	echo "</ul>";
}
if(isset($_GET['months']) && $_GET['months'] != ""){
	$input = $_GET['months'];
	$elements = explode(', ', $input);
	echo "<div>";
	echo "<h1>Months</h1>";
	echo "<ul>";
	for($i =0;$i<count($elements);$i++){
		echo "<li type='circle'>$elements[$i]</li>";
	}
	echo "</div>";
	echo "</ul>";
}
?>
</body>	
</html>