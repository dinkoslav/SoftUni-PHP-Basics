 <?php
	$firstNumber = 2;
	$secondNumber = 5;
	$sum = $firstNumber + $secondNumber;
?>
<p>$firstNumber + $secondNumber = <?php echo $firstNumber . ' + ' . $secondNumber . ' = ' . number_format((float)$sum, 2, '.', '') ?></p>
<?php
	$firstNumber = 1.567808;
	$secondNumber = 0.356;
	$sum = $firstNumber + $secondNumber;
?>
<p>$firstNumber + $secondNumber = <?php echo $firstNumber . ' + ' . $secondNumber . ' = ' . number_format((float)$sum, 2, '.', '') ?></p>
<?php
	$firstNumber = 1234.5678;
	$secondNumber = 333;
	$sum = $firstNumber + $secondNumber;
?>
<p>$firstNumber + $secondNumber = <?php echo $firstNumber . ' + ' . $secondNumber . ' = ' . number_format((float)$sum, 2, '.', '') ?></p>
