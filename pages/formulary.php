<?php require "../parts/header.php" ?>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="pages.css">

<h1>Contactez-nous</h1>

<div id="bloc_form">

    <form action="../functions/mail.php" method="post" enctype="application/x-www-form-urlencoded" name="formulary">

        <div class="caseForm">
            <span class="titleForm">Nom et prénom</span>
            <input maxlength="25" class="inputForm" type="text" name="name">
        </div>

        <div class="caseForm">
            <span class="titleForm">Adresse mail</span>
            <input maxlength="30" class="inputForm" type="text" name="mail">
        </div>

        <div class="caseForm">
            <span class="titleForm">Objet</span>
            <input maxlength="30" class="inputForm" type="text" name="object">
        </div>

        <div class="caseForm">
            <span class="titleForm">Message</span>
            <textarea name="message" maxlength="250" class="inputForm"></textarea>
        </div>

        <div class="caseForm">
            <input class="inputForm" type="reset" name="Vider le formulaire">
            <input class="inputForm" type="submit" name="Envoyer votre message">
        </div>
    </form>

</div>


<?php require "../parts/footer.php";?>
<link rel="stylesheet" href="../parts/css/footer.css">
<script src="../functions/script.js"></script>
