<!DOCTYPE html>
<html>
<head>
    <title>Find Fruit</title>
</head>
<body>
<form action="" method="post">
    <label for="fruit">Enter a fruit name:</label>
    <input type="text" name="fruit" id="fruit">
    <input type="submit" value="Find">
</form>
<?php
    if(isset($_POST['fruit'])){
        $fruitList = ['apple', 'watermelon', 'kiwi', 'strawberry'];

        $inputtedFruit = $_POST["fruit"];
        $indexOfFruit = array_search($inputtedFruit, $fruitList);

        if($indexOfFruit !== false) {
            echo "The fruit is located in the index $indexOfFruit";
        } else {
            echo "The inputted fruit is not in the list.";
        }
    }
?>
</body>
</html>