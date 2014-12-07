<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="get">
    <textarea name="text" cols="100" rows="20">Hi PHP5</textarea><br>
    <input type="text" name="minFontSize" value="4"/><br>
    <input type="text" name="maxFontSize" value="8"/><br>
    <input type="text" name="step"  value="3"/><br>
    <input type="submit" value="Submit">
</form>
<?php
    $text = $_GET['text'];
    $minFS = $_GET['minFontSize'];
    $maxFS = $_GET['maxFontSize'];
    $step = $_GET['step'];

    $decoration = '';
    $fontSize = $minFS;
    $increment = true;

    for($i=0; $i < strlen($text); $i++){
        $char = $text[$i];
        $output = htmlspecialchars($char);
        if(ord($char)%2 == 0){
            $decoration = 'text-decoration:line-through;';
        }
        else{
            $decoration = '';
        }
        echo "<span style='font-size:$fontSize;$decoration'>$output</span>";
        if(ord($char) >= ord('a') && ord($char) <= ord('z') ||
		ord($char) >= ord('A') && ord($char) <= ord('Z')){
            if($increment){
                $fontSize += $step;
            }
            else{
                $fontSize -= $step;
            }
        }
        if($fontSize >= $maxFS){
            $increment = false;
        }
        else if($fontSize <= $minFS){
            $increment = true;
        }
    }
?>
</body>
</html>