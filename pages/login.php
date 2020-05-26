<?php require "../parts/header.php" ?>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="pages.css">


<div id="main_page">
    <h2>Connexion à ReadMyFeather</h2>
    <form id="formLog" action="../functions/login.php" method="post">
        <input name="loginCheck" type="text" placeholder="Tapez votre pseudo">
        <input name="passwordCheck" type="password" placeholder="Tapez votre mot de passe">
        <input type="submit" placeholder="Connection">
    </form>
</div>


<?php require "../parts/footer.php"; ?>
<link rel="stylesheet" href="../parts/css/footer.css">
<script src="../functions/script.js"></script>