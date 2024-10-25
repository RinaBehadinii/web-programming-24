<?php
/* @var mysqli $conn */
include 'includes/dbconnection.php';


$id = $_GET["id"];

$statement = $conn->prepare("DELETE FROM brands WHERE bid=?");
$statement->bind_param("i", $id);
$statement->execute();

header("location:index.php");
exit();

