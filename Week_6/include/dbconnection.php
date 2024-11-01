<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "phonestore";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "Connection error";
}