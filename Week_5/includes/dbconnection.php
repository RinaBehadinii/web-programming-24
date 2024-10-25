<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "phonestore";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {

    echo "Connection failed";
}