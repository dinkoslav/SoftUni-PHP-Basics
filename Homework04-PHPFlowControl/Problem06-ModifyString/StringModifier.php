<!DOCTYPE html>
<html>
<head>
		
</head>
<body>
	<form method="get">
		Input String:
		<input type="text" name="inputString"/>
		<input type="radio" name="todo" value="poli"> Check Polindrome
		<input type="radio" name="todo" value="reverse"> Reverse String
		<input type="radio" name="todo" value="split"> Split
		<input type="radio" name="todo" value="hash"> Hash String
		<input type="radio" name="todo" value="shuffle"> Shuffle String
		<input type="submit" value="Submit"/><br>
	</form>
<?php
if(isset($_GET['inputString']) && isset($_GET['todo'])){
	$output;
	$input = $_GET['inputString'];
	$option = $_GET['todo'];
	if($option == 'poli'){
		$output = strrev($input);
		if($output == $input){
			echo "$input is a polindrome!";
		}
		else{
			echo "$input is not a polindrome!";
		}
	}
	else if($option == 'reverse'){
		$output = strrev($input);
		echo "$output";
	}
	else if($option == 'split'){
		$elements = explode(" ", $input);
		$line = implode("", $elements);
		$splited = str_split($line);
		$final = implode(" ", $splited);
		echo $final;
	}
	else if($option == 'hash'){
		echo hash('ripemd160', $input);
	}
	else if($option == 'shuffle'){
		echo str_shuffle($input);
	}
}
?>
</body>
</html>