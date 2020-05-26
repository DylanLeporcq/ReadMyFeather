<?php require "../parts/header.php" ?>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="pages.css">

<h2>Liste de tous les utilisateurs</h2>

<div id="listOfAuthors">
    <table>
        <tr>
            <td class="firstCase">Nom</td>
            <td class="firstCase">Prénom</td>
            <td class="firstCase">Mail</td>
            <td class="firstCase">Pseudo</td>
            <td class="firstCase">Style</td>
            <td class="firstCase">Auteur ?</td>
            <td class="firstCase">Ranking</td>
            <td class="firstCase">Action</td>
        </tr>


            <?php

            global $conn;
            $sql = "SELECT * FROM members";
            $result = $conn->query($sql);
            while ($tst = $result->fetch_assoc() ) {
                echo "
                    <tr>
                        <td class='tabCase'>" . utf8_encode($tst['lastname']) . "</td>
                        <td class='tabCase'>" . utf8_encode($tst['firstname']) . "</td>
                        <td class='tabCase'>" . utf8_encode($tst['mail']) . "</td>
                        <td class='tabCase'>" . utf8_encode($tst['pseudo']) . "</td>
                        <td class='tabCase'>" . utf8_encode($tst['favourites_style']) . "</td>
                        <td class='tabCase'>" . utf8_encode($tst['is_author']) . "</td>
                        <td class='tabCase'>" . utf8_encode($tst['id_ranking']) . "</td>
                        <td class='tabCase'><a href='../functions/deleteMember.php?id=".$tst['id']."'>Supprimer</a>
                        </td>
                        </tr>
                      ";
            }?>

    </table>

    <span>Info ranking : 1 - Leader, 2 - Visiteur, 3 - Modérateur, 4 - Administrateur</span>

</div>


<?php require "../parts/footer.php"; ?>
<link rel="stylesheet" href="../parts/css/footer.css">
<script src="../functions/script.js"></script>