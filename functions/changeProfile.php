<?php
session_start();
//I include the connect information in server.php
include "../parts/database.php";

$changeFirstName = $_POST['newFirstName'];
$changeLastName = $_POST['newLastName'];
$changeMail = $_POST['newMail'];
$changeUsername = $_POST['newPseudo'];
$changeStyle = $_POST['style'];
$changePassword = sha1($_POST['newPassword']);
$actualId = $_SESSION['idmember'];

if (!empty($changeFirstName) && !empty($changeLastName) && !empty($changeMail) && !empty($changeUsername) && !empty($changePassword) && !empty($changeStyle)) {
    $conn->select_db($dbname);
    $id = "UPDATE members
        SET firstname='$changeFirstName', lastname='$changeLastName', mail='$changeMail', pseudo='$changeUsername', password='$changePassword', favourites_style='$changeStyle'
        WHERE id=$actualId";
    $result = $conn->query($id);

    $_SESSION['username'] = $changeUsername;
    $_SESSION['password'] = $changePassword;
    $_SESSION['firstname']= $changeFirstName;
    $_SESSION['lastname']= $changeLastName;
    $_SESSION['mail']= $changeMail;
    $_SESSION['favourites_style']= $changeStyle;


    // Redirection to the blog
    header('location: ../pages/login.php');
} else {
    header('location: ../pages/profile.php?message=1');
}



