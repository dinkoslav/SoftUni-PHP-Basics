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
    <input type="text" name="name"><br>
    <input type="text" name="age"><br>
    <input type="radio" name="gender" value="male">Male<br>
    <input type="radio" name="gender" value="female">Female<br>
    <input type="submit"><br>
</form>
<?php
    if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];
        echo "<p>My name is $name. I am $age years old. I am $gender.</p>";
    }
    else{
        echo "Invalid data !!!";
    }
?>
</body>
</html>

