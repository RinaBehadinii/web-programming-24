<!DOCTYPE html>
<html>
<head>
    <title>Strings and Integers</title>
</head>
<body>
<form action="" method="post">
    <label for="name">Enter your name:</label>
    <input type="text" name="name" id="name">

    <label for="age">Enter your age:</label>
    <input type="number" name="age" id="age">

    <input type="submit" value="Submit">
</form>

<?php

if(isset($_POST["name"]) && isset($_POST["age"])){
    $name = $_POST["name"];
    $age = $_POST["age"];

    echo "Hi my name is $name! I'm $age!";
}

?>
</body>
</html>