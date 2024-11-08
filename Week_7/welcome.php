<?php
/* @var mysqli $curr_logged_in_user */
include 'include/session.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <span>Hi <?php echo $curr_logged_in_user; ?>! Welcome to the landing page!</span>
    <br>
    <span>Click here to logout <a href="logout.php">Log Out</a> </span>
</div>

</body>
</html>