<?php
session_start();
require "../parts/header.php" ?>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="pages.css">

<?php


global $conn;
$sql = "SELECT books.*, pseudo FROM books LEFT JOIN members ON members.id = books.id_author WHERE books.id=".$_GET['id'];
$result = $conn->query($sql);
$tst = $result->fetch_assoc();


?>

<div id="main_page">

    <h2><?=utf8_encode($tst['name'])?></h2>

    <span class="titleBook">Résumé :  <span><?=utf8_encode($tst['resume'])?></span></span>
    <span class="titleBook">Auteur : <span><?=utf8_encode($tst['pseudo'])?></span></span>
    <span class="titleBook">Ecrit le : <span><?=utf8_encode($tst['date_post'])?></span></span>
    <span class="titleBook">Style : <span><?=utf8_encode($tst['style1'])?></span></span>

</div>

<div id="allComments">
    <h3>Commentaires</h3>


        <?php
        if (isset($_SESSION['idmember'])) {
            ?>
            <form id="formComment" action="../functions/addComment.php" method="post">

        <select name="rate">
            <option value="None">--Choisir une note--</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <input type="text" placeholder="Ecrivez votre commentaire" name="comment">
        <input type="submit" value="Poster">
        <input name="bookID" type="text" hidden readonly value="<?=$_GET['id']?>">
    </form>

    <?php}

    $sql2 = "SELECT rates.*, pseudo
FROM rates
LEFT JOIN members ON members.id = id_member
WHERE id_book=".$_GET['id']."
ORDER BY date DESC";
    $result2 = $conn->query($sql2);
    while ($tst2 = $result2->fetch_assoc()) {
        echo "
            <p class='comment'>".$tst2['rate']."/10</p>
            <p class='comment'>" . $tst2['comment'] . "</p>
            <span>Posté par " . $tst2['pseudo'] . " le " . $tst2['date'] . "</span>";
        if (isset($_SESSION['idmember'])){
            if ($_SESSION['id_ranking'] == 1 || $_SESSION['id_ranking'] == 3 || $_SESSION['id_ranking'] == 2){
                ?><a class="delete" href="../functions/deleteCom.php?commentID=<?=$tst['id']?>">Supprimer le commentaire ci-dessus</a><?php
            }
        }
    }
    ?>
</div>


<?php require "../parts/footer.php"; ?>
<link rel="stylesheet" href="../parts/css/footer.css">
<script src="../functions/script.js"></script>