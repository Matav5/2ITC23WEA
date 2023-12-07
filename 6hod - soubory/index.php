<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databáze fotek (100% legální... mám licenci)</title>
</head>
<body>
    <?php 
        if(isset($_GET["vyber"])){
            $vyber = $_GET["vyber"];
        }
        else{
            $vyber = "databaze.txt";
        }
        $obrazky = file_get_contents($vyber);
        $obrazky = explode("\n",$obrazky);
        //print_r($obrazky);
        foreach($obrazky as $obrazek){
            echo "<img src='$obrazek' height=400>";
        }
    ?>
    <form action="" method="get" id="vyberFormular">
        <select name="vyber" onchange="posliVyber()">
            <option value="databaze.txt">---------------</option>
            <option value="databaze.txt"> Databáze obrázku</option>
            <option value="shitposty.txt"> Shitposty</option>
            <option value="totallyLegalWebcamPhotos.txt"> Krásné obrázky</option>
        </select>
    </form>
    <form action="server.php" method="post">
        <label for="odkaz">Odkaz na obrázek:</label>
        <input type="text" name="odkaz"><br>
>        <input type="submit" name="uloz" value="Ulož obrázek">
    </form>

    
</body>
<script>

function posliVyber(){
    document.getElementById("vyberFormular").submit();
}


</script>
</html>