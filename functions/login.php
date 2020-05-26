<?php

//I include the connect information in server.php
include "../parts/database.php";
// I defined a login and password (sha1 to encrypted)
$username = $_POST['loginCheck'];
$password = sha1($_POST['passwordCheck']);

$conn->select_db($dbname);
$id = "SELECT * FROM members";
$result = $conn->query($id);
while ($row = $result->fetch_assoc()) {
    $login_valide = $row["pseudo"];
    $pwd_valide = $row["password"];
    $idMember = $row["id"];



//Test if the login and password are corrects
    if (isset($username) && isset($password)) {
        // Checking of the login information
        if ($login_valide == $username && $pwd_valide == $password) {
            // All is okay, I launch the session

            session_start();
            //I stock the informations in some vars
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['idmember']= $idMember;
            $_SESSION['firstname']= $row['firstname'];
            $_SESSION['lastname']= $row['lastname'];
            $_SESSION['mail']= $row['mail'];
            $_SESSION['favourites_style']= $row['favourites_style'];
            $_SESSION['is_author']= $row['is_author'];
            $_SESSION['id_ranking']= $row['id_ranking'];

            // Redirection to the blog
            header('location: ../index.php');
        }
        else {
            // If information are wrong, an alert spawn
            echo '<body onLoad="alert(\'Pseudo ou mot de passe incorrect, veuillez réessayer !\')">';


        }
    } else {
        echo 'Les variables du formulaire ne sont pas déclarées.';
    }
}
//End<?php