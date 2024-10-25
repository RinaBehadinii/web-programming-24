<?php
/* @var mysqli $conn */
include 'includes/dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];

    $statement = $conn->prepare("INSERT INTO brands (name) VALUES (?)");
    $statement->bind_param("s", $name);
    $statement->execute();

    header("location:index.php");
    exit();
}

