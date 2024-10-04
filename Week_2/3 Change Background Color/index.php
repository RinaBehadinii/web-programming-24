<!DOCTYPE html>
<html>
<head>
    <title>Change Background Color</title>
</head>
<body style="background-color: <?php echo isset($_POST['color']) ? $_POST['color'] : 'white' ?>">
<form action="" method="post">
    <label for="color">Choose a color:</label>
    <select name="color" id="color">
        <option value="red">Red</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
        <option value="yellow">Yellow</option>
        <option value="purple">Purple</option>
    </select>
    <input type="submit" value="Change Color">
</form>

</body>
</html>