<?php
/* @var mysqli $conn */
include 'includes/dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];

    $statement = $conn->prepare("UPDATE brands SET name=? WHERE bid=?");
    $statement->bind_param("si", $name, $id);
    $statement->execute();

    header("location:index.php");
    exit();
}

