<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form method="get">
		Text: <textarea rows="4" cols="50" name="input"></textarea><br>
		Word: <input type="text" name="word"/><br>
		<input type="submit" value="Extract"/><br>
	</form><br>
<?php
if(isset($_GET['input']) && isset($_GET['word'])){
	$input = $_GET['input'];
	$word = $_GET['word'];
	$matcher = '/([^!,.?]+[!,.?])/';
	$check = preg_match_all($matcher, $input, $sentences);
	
	foreach($sentences[0] as $sent){
		$innermatch = '/[\w]+/';
		$innercheck = preg_match_all($innermatch, $sent, $elements);
		$contain = 0;
		foreach($elements[0] as $item){
			if ($item == $word) {
				$contain++;
			}
		}
		if($contain != 0){
			echo "$sent <br>";
		}
	}
}
?>
</body>	
</html>