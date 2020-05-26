<?php
session_start();
require "database.php"?>

<link rel="stylesheet" href="../parts/css/header.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/d49bbded3d.js" crossorigin="anonymous"></script>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<header>
    <!-- this bar contain the login and subscribe link, possibility to hide it with 'showBtn' -->
    <div id="login_bar">
        <span id="hideBtn">Masquer le menu</span>

        <div>
            <?php
            if (isset($_SESSION['idmember'])){
                ?>
                    <a href="http://localhost:63342/ReadMyFeather/functions/logout.php" class=\"log_btn\" type=\"button\">Deconnexion</a>
                   <a style='cursor: default' class='log_btn'>Bonjour, <?php echo $_SESSION['username'] ?></a>
                   <a href="http://localhost:63342/ReadMyFeather/pages/profile.php" class='log_btn'>Mon profil</a>

                <?php if ($_SESSION['idmember'] == 1 || $_SESSION['idmember'] == 3){
                    ?><a href="http://localhost:63342/ReadMyFeather/pages/admin.php" class="log_btn" type="button">Espace gestion</a><?php
                }
            } else {
                ?>
                    <a href="http://localhost:63342/ReadMyFeather/pages/login.php" class=\"logsub\">Connexion</a>
                    <a href="http://localhost:63342/ReadMyFeather/pages/inscription.php" class=\"logsub\">Inscription</a>
                  <?php
            }
            ?>

        </div>

    </div>
    <span id="showBtn">Ouvrir le menu</span>

    <!-- this is the main menu cases -->
    <div id="main_menu">
        <a href="http://localhost:63342/ReadMyFeather/index.php" id="main"><i id="logo" class="fas fa-book"></i></a>
        <a href="http://localhost:63342/ReadMyFeather/pages/authors.php" id="authors">Les auteurs</a>
        <a href="http://localhost:63342/ReadMyFeather/pages/news.php" id="news">Nouveautés</a>
        <a href="http://localhost:63342/ReadMyFeather/pages/books.php" id="books">Les oeuvres</a>
        <a href="#" id="search">Rechercher</a>
    </div>

</header>