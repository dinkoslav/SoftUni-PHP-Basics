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
        foreach($tags as $key => $value){
            echo "<p>$key:$value</p>";
        }
    }

//Pesho, homework, homework, exam, course, PHP
?>

</body>
</html>