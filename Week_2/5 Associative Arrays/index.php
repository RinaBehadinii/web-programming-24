<!DOCTYPE html>
<html>
<head>
    <title>Associative Arrays</title>
</head>
<body>
<form action="" method="post">
    <label for="key">Choose a key:</label>
    <select name="key" id="key">
        <option value="firstName">First Name</option>
        <option value="lastName">Last Name</option>
        <option value="age">Age</option>
    </select>
    <input type="submit" value="Display">
</form>

<?php
    //Associative array
    $information = ["firstName" => "Rina", "lastName" => "Behadini", "age" => "?"];

    if(isset($_POST["key"])){
        $key = $_POST["key"];

        echo "The key is $key and the value for that key is $information[$key]";
    }

?>
</body>
</html>