<?php require "../parts/header.php" ?>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="pages.css">

<h2>Inscription sur ReadMyFeather</h2>

<form id="subscribeForm" action="../functions/subscribe.php" method="post">
    <input name="newFirstName" type="text" placeholder="Tapez votre prénom">
    <input name="newLastName" type="text" placeholder="Tapez votre nom">
    <input name="newMail" type="text" placeholder="Tapez votre adresse mail">
    <input name="newPseudo" type="text" placeholder="Tapez votre pseudo">
    <input name="newPassword" type="password" placeholder="Tapez votre mot de passe">

<input value="S'inscrire" type="submit">
</form>

<?php
if ($_GET['message']==1){
    echo "<script>alert('Veuillez remplir tous les champs.')</script>";
}

?>

<?php require "../parts/footer.php"; ?>
<link rel="stylesheet" href="../parts/css/footer.css">
<script src="../functions/script.js"></script>