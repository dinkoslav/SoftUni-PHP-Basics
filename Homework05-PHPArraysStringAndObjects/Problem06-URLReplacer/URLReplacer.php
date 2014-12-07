<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form method="get">
		Text: <textarea rows="4" cols="50" name="input"></textarea><br>
		<input type="submit" value="Replace"/><br>
	</form><br>
<?php
if(isset($_GET['input'])){
	$input = $_GET['input'];
	$input = str_replace('<a href=\\"', "[URL=", $input);
	$input = str_replace('\">', ']',$input);
	$input = str_replace('</a>', '[/URL]',$input);
	
	echo $input;
}
?>
</body>	
</html>