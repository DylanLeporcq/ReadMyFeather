<?php
session_start();
//I include the connect information in server.php
include "../parts/database.php";

$idBook = $_POST['bookDelete'];

global $conn;
$sql = "DELETE 
FROM books
WHERE id=$idBook";
$result = $conn->query($sql);

header('location: ../pages/books.php');