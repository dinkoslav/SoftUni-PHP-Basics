<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>GetFormData</title>
    <style>
        input{
            margin: 5px;
        }
    </style>
</head>
<body>
<form method="get">
    <input type="text" name="tags"><br>
    <input type="submit"><br>
</form>

<?php
if(isset($_GET['tags'])){
    $elements = $_GET['tags'];
    $tags = explode(', ', $elements);
    $arr = [];
    foreach($tags as $value){
       if(!array_key_exists($value, $arr)){
           $arr = array_merge($arr, array($value=>1));
       }
        else{
            $arr[$value] += 1;
        }
    }
    arsort($arr);
    foreach($arr as $key=>$value){
        echo "<p>$key:$value</p>";
    }
    reset($arr);
    $mostFr = key($arr);
    echo "<br><p>Most Frequent Tag is: $mostFr.</p>";
}
//Pesho, homework, homework, exam, course, PHP
?>

</body>
</html>