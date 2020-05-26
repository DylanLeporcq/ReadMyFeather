<?php require "parts/header.php"; ?>
<link rel="stylesheet" href="parts/css/header.css">
<link rel="stylesheet" href="style.css">

<title>ReadMyFeather - Accueil</title>


<h1>ReadMyFeather</h1>

<h2>Une bibliothèque géante accueillant des oeuvres littéraires écrites par nos jeunes talents</h2>

<div id="presentation">
    <h3>
        ReadMyFather est un site regroupant des livres écrits par des talents neufs, tous protégés par un ISBN unique. Inscrivez-vous
        afin de pouvoir souscrire à vos auteurs favoris, composer votre propre bibliotèque ou même vous lancer vous même dans
        l'écriture.
    </h3>
    <h3>Les artistes publiant leur travail le font dans le but de faire connaître leur plume et de se faire un nom dans le milieu
        littéraire, alors si vous appréciez le travail de vos favoris, n'hésitez pas à faire des dons pour les soutenirs.
    </h3>
    <h3>
        Rendez-vous dans la section <a href="#">Les auteurs</a> afin de retrouver l'intégralité des auteurs inscrits sur ce site. Ou alors
        allez voir les <a href="">nouveautés</a> pour voir les oeuvres nouvelle sorties très récemment. Vous pouvez tout de même faire
        un tri par note ou par auteur dans la catégorie <a href="#">Les oeuvres</a> afin de chercher plus précisement en fonction de
        vos goûts.
    </h3>
</div>

<div id="bestOf">
    <span>Top 5 des livres les mieux notés</span>

    <div id="bestRates">
        <?php
        global $conn;
        $sql = "SELECT name, AVG(rate) AS moyenne FROM rates LEFT JOIN books ON rates.id_book = books.id GROUP BY name ORDER BY moyenne DESC LIMIT 5";
        $result = $conn->query($sql);
        while ($tst = $result->fetch_assoc() )
        {
            echo "<a href='pages/aBook.php?id='>".utf8_encode($tst['name'])."</a>";
        }
        ?>
    </div>
</div>

<?php require "parts/footer.php"; ?>