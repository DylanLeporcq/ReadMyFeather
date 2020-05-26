<?php

//I include the connect information in server.php
include "../parts/database.php";

$newFirstName = $_POST['newFirstName'];
$newLastName = $_POST['newLastName'];
$newMail = $_POST['newMail'];
$newUsername = $_POST['newPseudo'];
$newPassword = sha1($_POST['newPassword']);


if (!empty($newFirstName) && !empty($newUsername) && !empty($newMail) && !empty($newUsername) && !empty($newPassword)) {
    $conn->select_db($dbname);
    $id = "INSERT INTO members (`firstname`, `lastname`, `mail`, `pseudo`, `password`, `favourites_style`, `is_author`, `id_ranking`) VALUES ('$newFirstName', '$newLastName','$newMail', '$newUsername', '$newPassword', 'Non défini', 'Non', 2)";
    $result = $conn->query($id);
    // Redirection to the blog
    header('location: ../pages/login.php');
} else {
    header('location: ../pages/subscribe.php?message=1');
}
