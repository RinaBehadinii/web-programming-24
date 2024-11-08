<?php
/* @var mysqli $conn */
include 'dbconnection.php';

session_start();

$curr_user = $_SESSION['username'];

$query = "SELECT * FROM users WHERE username = '$curr_user'";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

$curr_logged_in_user = $row['username'];

if (!isset($_SESSION['username'])) {
    header("location: index.php");
}
