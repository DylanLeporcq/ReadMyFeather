<?php
session_start();
//I include the connect information in server.php
include "../parts/database.php";

$idMem = $_GET['id'];

global $conn;
$sql = "DELETE 
FROM members
WHERE id=$idMem";
$result = $conn->query($sql);

header('location: ../pages/admin.php');
