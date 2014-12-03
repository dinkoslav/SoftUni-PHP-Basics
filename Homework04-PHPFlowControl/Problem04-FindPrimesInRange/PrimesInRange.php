<!DOCTYPE html>
<html>
<head>
		
</head>
<body>
	<form method="get">
		Starting Index:
		<input type="text" name="start"/>
		End:
		<input type="text" name="end"/>
		<input type="submit" value="Submit"/><br>
	</form>
<?php
if(isset($_GET['start']) && isset($_GET['end'])){
	function isPrime($num) {
		if($num == 1)
			return false;
		if($num == 2)
			return true;
		if($num % 2 == 0) {
			return false;
		}
		for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
			if($num % $i == 0)
				return false;
		}
		return true;
	}
	$start = $_GET['start'];
	$end = $_GET['end'];
	for($i = $start; $i <= $end ; $i++){
		if(isPrime($i) && $i != $end){
			echo "<strong>$i, </strong>";
		}
		else if($i != $end){
			echo "$i, ";
		}
		else{
			echo "$i";
		}
	}
}
?>
</body>
</html>