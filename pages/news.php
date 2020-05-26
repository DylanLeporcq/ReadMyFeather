<?php require "../parts/header.php" ?>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="pages.css">

<h2>Découvrez les dernières nouveautés postées sur ReadMyFeather</h2>
<?php
global $conn;
$sql = "SELECT books.*, pseudo FROM books  
        LEFT JOIN members ON books.id_author=members.id 
        ORDER BY  date_post DESC
        LIMIT 100";
$result = $conn->query($sql);
while ($tst = $result->fetch_assoc() )
{
 ?><a class="titleBook" href="aBook.php?id=<?=$tst['id']?>"><?=utf8_encode($tst['name'])?></a>

    <div class="newsBloc">

        <div class="photoBook"></div>

        <div>
            <p class="bookCrit">Auteur : <a href=""><?=utf8_encode($tst['pseudo'])?></a></p>
            <p class="bookCrit">Date de publication : <span><?=utf8_encode($tst['date_post'])?></span></p>
            <p class="bookCrit">Genre : <span><?=utf8_encode($tst['style1'])?></span></p>
            <p class="bookCrit">Résumé : <span><?=utf8_encode($tst['resume'])?></span></p>
        </div>

</div><?php } ?>






<?php require "../parts/footer.php";?>
<link rel="stylesheet" href="../parts/css/footer.css">
<script src="../functions/script.js"></script>