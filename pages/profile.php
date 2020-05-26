<?php
session_start();
require "../parts/header.php" ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="pages.css">

    <h2><?php echo $_SESSION['username'] ?></h2>

    <form id="subscribeForm" action="../functions/changeProfile.php" method="post">
        <input name="newFirstName" type="text" placeholder="Tapez votre prénom" value="<?php echo $_SESSION['firstname'] ?>">
        <input name="newLastName" type="text" placeholder="Tapez votre nom" value="<?php echo $_SESSION['lastname'] ?>">
        <input name="newMail" type="text" placeholder="Tapez votre adresse mail" value="<?php echo $_SESSION['mail'] ?>">
        <input name="newPseudo" type="text" placeholder="Tapez votre pseudo" value="<?php echo $_SESSION['username'] ?>">
        <input name="newPassword" type="password" placeholder="Tapez votre mot de passe">
        <select name="style">
            <option value="Non défini">--Style favoris--</option>
            <option value="Horreur">Horreur</option>
            <option value="Amour">Amour</option>
            <option value="Humour">Humour</option>
            <option value="Policier">Policier</option>
            <option value="Dramatique">Dramatique</option>
        </select>

        <input value="Modifier le profil" type="submit">
    </form>

<?php
if ($_GET['message']==1){
    echo "<script>alert('Veuillez remplir tous les champs.')</script>";
}

?>

<?php require "../parts/footer.php"; ?>
    <link rel="stylesheet" href="../parts/css/footer.css">
    <script src="../functions/script.js"></script><?php
