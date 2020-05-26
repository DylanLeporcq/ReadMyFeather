<?php
session_start();
//I include the connect information in server.php
include "../parts/database.php";

$commentBook = $_POST['comment'];
$rateBook = $_POST['rate'];
$idmember = $_SESSION['idmember'];
$idbook = $_POST['bookID'];

global $conn;

if (!empty($commentBook) || !empty($rateBook))
{
    $sql = "INSERT INTO rates (`rate`, `id_member`, `date`, `comment`, `id_book`) 
        VALUES ('$rateBook', '$idmember', CURRENT_TIME, '$commentBook', '$idbook' )";
    $result = $conn->query($sql);
}

header('location: ../pages/aBook.php?id='.$idbook);