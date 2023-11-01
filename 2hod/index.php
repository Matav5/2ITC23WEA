<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop</title>
    <link rel="stylesheet" href="style.css">
    <?php
        require_once "hlavicka.php";
        require_once "hlavicka.php";
        require_once "hlavicka.php";
        require_once "hlavicka.php";
        require_once "hlavicka.php";
    ?>
</head>
<body>
<?php
    function vytvorProdukt($obrazek, $nazev, $cena, $obsah){
        global $jeAdmin;
       ?>
            <div class="produkt">
                <img src="<?= $obrazek ?>">
                <h3><?= $nazev ?></h3>
                <h4>Cena: <?= $cena ?>,-</h4>
                <p><?= $obsah ?></p>
                <button>Do košíku</button>
                    <?php if($jeAdmin){
                        ?>
                        <div>
                            <button>Upravit</button>
                            <button>Smazat</button>
                        </div>    
                        <?php 
                    }
                    ?>
            </div>
        <?php

    }
    vytvorProdukt("http://www-detskakardiologie.cz/wp-content/uploads/2014/09/srdce-300x300.png","Srdce",200000,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatibus adipisci, placeat corporis temporibus provident molestias dolor, eum, doloribus debitis incidunt. Sed quasi distinctio nihil asperiores inventore est atque totam?");
    vytvorProdukt("http://www-detskakardiologie.cz/wp-content/uploads/2014/09/srdce-300x300.png","Játra",10000,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatibus adipisci, placeat corporis temporibus provident molestias dolor, eum, doloribus debitis incidunt. Sed quasi distinctio nihil asperiores inventore est atque totam?");
    vytvorProdukt("http://www-detskakardiologie.cz/wp-content/uploads/2014/09/srdce-300x300.png","Mozek",0,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatibus adipisci, placeat corporis temporibus provident molestias dolor, eum, doloribus debitis incidunt. Sed quasi distinctio nihil asperiores inventore est atque totam?");
    vytvorProdukt("http://www-detskakardiologie.cz/wp-content/uploads/2014/09/srdce-300x300.png","Srdce",200000,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatibus adipisci, placeat corporis temporibus provident molestias dolor, eum, doloribus debitis incidunt. Sed quasi distinctio nihil asperiores inventore est atque totam?");
    vytvorProdukt("http://www-detskakardiologie.cz/wp-content/uploads/2014/09/srdce-300x300.png","Srdce",200000,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatibus adipisci, placeat corporis temporibus provident molestias dolor, eum, doloribus debitis incidunt. Sed quasi distinctio nihil asperiores inventore est atque totam?");

?>

<?php
    include "footer.php";
?>

</body>
</html>