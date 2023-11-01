<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kámen nůžky papír</title>
</head>
<body>
    <?php
        print_r($_GET);
        if($_GET["vyhralHrac"]){
            ?>
                <h1 style="color:lime;">Hráč:</h1>
            <?php
        }
        else{
            ?>
                <h1 style="color:red;">Hráč:</h1>
            <?php
        }

    ?>
    <form action="server.php" method="post">
        <label for="vyber">Kámen:</label>
        <input type="radio" name="vyber" value="kamen" 
            <?= $_GET["vyberHrace"] == "kamen" ?  "checked" : ""?> 
        ><br>
        
        <label for="vyber">Nůžky:</label>
        <input type="radio" name="vyber" value="nuzky"
        <?= $_GET["vyberHrace"] == "nuzky" ?  "checked" : ""?> 

        ><br>

        <label for="vyber">Papír:</label>
        <input type="radio" name="vyber" value="papir"
        <?= $_GET["vyberHrace"] == "papir" ?  "checked" : ""?> 
        ><br>
        <input type="submit" value="Hraj!">
    </form>

        <h1 style="color: <?= $_GET["vyhralPocitac"] ? "lime" : "red" ?>;">Počítač</h1>

    <form>
        <label for="vyber">Kámen:</label>
        <input type="radio" name="vyber" value="kamen" 
        <?= $_GET["vyberPocitace"] == "kamen" ?  "checked" : ""?> 
         disabled><br>
        
        <label for="vyber">Nůžky:</label>
        <input type="radio" name="vyber" value="nuzky"
        <?= $_GET["vyberPocitace"] == "nuzky" ?  "checked" : ""?> 
         disabled><br>

        <label for="vyber">Papír:</label>
        <input type="radio" name="vyber" value="papir"
        <?= $_GET["vyberPocitace"] == "papir" ?  "checked" : ""?> 
         disabled><br>
    </form>

</body>
</html>