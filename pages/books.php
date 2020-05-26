<?php require "../parts/header.php" ?>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="pages.css">

<h2>Voici la liste de tous les livres écrits par nos artistes</h2>

<div id="listOfAuthors">
    <table>
        <tr>
            <td class="firstCase">Nom du livre</td>
            <td class="firstCase">Ecrit par</td>
            <td class="firstCase">Style</td>
            <td class="firstCase">Posté le</td>
            <?php
            if (isset($_SESSION['idmember'])){
            if ($_SESSION['idmember'] == 1 || $_SESSION['idmember'] == 3){
                ?><td class="firstCase">Supprimer le livre</td><?php }} ?>


        </tr>
        <tr>
            <?php

            global $conn;
            $sql = "SELECT books.*, pseudo FROM books LEFT JOIN members ON members.id = books.id_author ORDER BY name DESC";
            $result = $conn->query($sql);
            while ($tst = $result->fetch_assoc() )
            {
                ?>
                       <tr>
                        <td class='tabCase'><a href="aBook.php?id=<?=$tst['id']?>"><?=utf8_encode($tst['name'])?></a></td>
                        <td class='tabCase'><?=utf8_encode($tst['pseudo'])?></td>
                        <td class='tabCase'><?=utf8_encode($tst['style1'])?></td>
                        <td class='tabCase'><?=utf8_encode($tst['date_post'])?></td><?php
            if (isset($_SESSION['idmember'])){
                if ($_SESSION['idmember'] == 1 || $_SESSION['idmember'] == 3){
                    ?>
                    <td class="firstCase">
                        <form action="../functions/deleteBook.php" method="post">
                            <input name="bookDelete" type="text" hidden value="<?=$tst['id']?>">
                            <input class="log_btn" type="submit" value="Supprimer">
                        </form>
                    </td>
                <?php
                }
            }
            }?>


                        </tr>
        </tr>
    </table>

</div>

<?php require "../parts/footer.php";?>
<link rel="stylesheet" href="../parts/css/footer.css">
<script src="../functions/script.js"></script>