<!DOCTYPE html>
<html>
<head>
		
</head>
<body>
	<form method="get">
		Enter numbers of years:
		<input type="text" name="years"/>
		<input type="submit" value="Show costs"/><br>
	</form>
<?php
if(isset($_GET['years'])){
	$year = 2014;
	?>
	<table border="1">
		<tr><td><strong>Year</strong></td><td><strong>January</strong></td><td><strong>February</strong></td><td><strong>Mart</strong></td><td><strong>April</strong></td><td><strong>May</strong></td><td><strong>June</strong></td><td><strong>July</strong></td><td><strong>August</strong></td><td><strong>September</strong></td><td><strong>October</strong></td><td><strong>November</strong></td><td><strong>December</strong></td><td><strong>Total:</strong></td></tr>
	<?php
	$inputYear = $_GET['years'];
	for($i = 0; $i < $inputYear; $i++){
		$total = 0;
	?>
		<tr><td><?php echo $year; ?></td>
	<?php
		for($month = 0; $month < 12; $month++){
		$rand_num = rand(0, 999);
	?>
			<td><?php echo $rand_num; ?></td>
	<?php
			$total += $rand_num;
		}
	?>
		<td><?php echo $total; ?></td></tr>
	<?php
		$year--;
	}
	?>
	</table>
	<?php 
}
?>
</body>
</html>