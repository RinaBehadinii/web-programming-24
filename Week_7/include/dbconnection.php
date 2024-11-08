<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "test_auth";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "Connection failed";
}