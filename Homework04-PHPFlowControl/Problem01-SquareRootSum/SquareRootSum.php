<!DOCTYPE html>
<html>
<head>
		
</head>
<body>
	<table border="1">
<?php
$count = 0;
for($i = 0; $i <= 100; $i+=2){
?>
	<tr><td><?php echo $i;?></td><td><?php echo round(sqrt($i),2);?></td></tr>	
<?php
$count += round(sqrt($i),2);
}
?>
		<tr><td><strong>Total:</strong></td><td><?php echo $count;?></td></tr>	
	</table>
</body>
</html>