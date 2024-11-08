<?php
/* @var mysqli $conn */
include 'include/dbconnection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    $number_of_rows = mysqli_num_rows($result);

    if ($number_of_rows == 1) {
        $_SESSION['username'] = $username;
        header('location: welcome.php');
    } else {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
