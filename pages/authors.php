<?php require "../parts/header.php" ?>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="pages.css">

<h2>Voici la liste de tous les auteurs ayant posté sur ReadMyFeather</h2>

<div id="listOfAuthors">
    <table>
        <tr>
            <td class="firstCase">Pseudo de l'auteur</td>
            <td class="firstCase">Style favoris</td>
            <td class="firstCase">Dernier livre produit</td>

        </tr>
        <tr>
            <?php

            global $conn;
            $sql = "SELECT *, name FROM members LEFT JOIN books ON books.id_author = members.id WHERE is_author='Oui' ORDER BY name DESC LIMIT 1";
            $result = $conn->query($sql);
            while ($tst = $result->fetch_assoc() ) {
                echo "<td class='tabCase'>" . utf8_encode($tst['pseudo']) . "</td>
                      <td class='tabCase'>" . utf8_encode($tst['favourites_style']) . "</td>
                      <td class='tabCase'>" . utf8_encode($tst['name']) . "</td>";
            }?>
        </tr>
    </table>

</div>

<?php require "../parts/footer.php";?>
<link rel="stylesheet" href="../parts/css/footer.css">
<script src="../functions/script.js"></script>
