<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form method="post">
		Enter Amount <input type="text" name="amount"><br>
		<input type="radio" name="currency" value="$">USD
		<input type="radio" name="currency" value="euro">EUR
		<input type="radio" name="currency" value="leva">BGN<br>
		Compound Interest Amount <input type="text" name="interest"><br>
		<select name="time">
			<option value="6">6 Months</option>
			<option value="1">1 Year</option>
			<option value="2">2 Years</option>
			<option value="5">5 Years</option>
		</select>
		<input type="submit">
	</form>
<?php
if(isset($_POST['amount']) && isset($_POST['currency']) && isset($_POST['interest']) && isset($_POST['time'])){
	$result = 0;
	$powExp = 0;
	$p = $_POST['amount'];
	$currency = $_POST['currency'];
	$interest = $_POST['interest']/1200;
	if($_POST['time'] == 6){
	$powExp = 6;
	}
	else{
	$powExp = $_POST['time'] * 12;
	}
	$result = $p * pow((1+$interest), $powExp);
	$result = round((float)$result, 2);
	echo "$currency $result";
}
?>
</body>
</html>