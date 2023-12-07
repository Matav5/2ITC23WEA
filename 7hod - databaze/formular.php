<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulář na Filmy</title>
</head>
<body>
<?php
    /*
    CREATE OR REPLACE TABLE filmy(
        id int PRIMARY KEY AUTO_INCREMENT,
        nazev varchar(64) NOT NULL,
        delka smallint UNSIGNED,
        zanr varchar(32),
        obrazek varchar(256)
    );
    */
    if(isset($_POST["uloz"])){
        require_once 'db.php';
        $nazev = $_POST["nazev"];
        $delka = $_POST["delka"];
        $zanr = $_POST["zanr"];
        $obrazek = $_POST["obrazek"];

        $sql = "INSERT INTO filmy VALUES (NULL, '$nazev', $delka, '$zanr', '$obrazek');";
        $db->query($sql);
    }
?>
<form action="" method="post">

    <label for="nazev">Název:</label>
    <input type="text" name="nazev"> <br>

    <label for="delka">Délka:</label>
    <input type="number" name="delka"> <br>    
    
    <label for="zanr">Žánr:</label>
    <input type="text" name="zanr"> <br> 
    
    <label for="obrazek">Obrázek:</label>
    <input type="text" name="obrazek"> <br>
    
    <input type="submit" name="uloz" value="Ulož film!">
</form>

</body>
</html>