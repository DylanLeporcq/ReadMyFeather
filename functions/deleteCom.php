<?php
session_start();
//I include the connect information in server.php
include "../parts/database.php";

$idCom = $_GET['commentID'];

global $conn;
$sql = "DELETE 
FROM rates
WHERE id=$idCom";
$result = $conn->query($sql);

header('location: ../pages/books.php');
