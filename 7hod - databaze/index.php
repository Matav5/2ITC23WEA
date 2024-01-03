<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmová databáze</title>
    <style>
        .film {
            display: inline-block;
            border: 1px solid black;
            padding: 10px;
            margin: 5px;
            border-radius: 5%;
        }
    </style>
</head>
<body>
    <?php 
        require_once 'db.php';
        print_r($_POST);
        if(isset($_POST["smazat"])){
            $id = $_POST["id"]; 
            $sql = "DELETE FROM filmy WHERE id = $id";
            $db->query($sql);
        }


        $sql = "SELECT * FROM filmy;";
        $result = $db->query($sql);
        while($zaznam = $result->fetch_object()){
            vytvorHTMLFilmu($zaznam);
        }

        function vytvorHTMLFilmu($zaznam){
            echo "

                <div class=\"film\">
                    <form action='' method='post'>
                        <input type='hidden' name='id' value='$zaznam->id'>
                        <textarea name='nazev'>$zaznam->nazev</textarea>
                        <div>
                            <img src=\"$zaznam->obrazek\" width='400'>
                        </div>
                        <textarea name='delka' >Délka filmu: $zaznam->delka</textarea>
                        <textarea name='zanr'>Žánr: $zaznam->zanr</textarea>
                        <input type='submit' name='uprav' value='Upravit!'>
                    </form>

                    <form action='' method='post'>
                        <input type='hidden' name='id' value='$zaznam->id'>
                        <input type='submit' name='smazat' value='Smaž!'>
                    </form>
                </div>
            ";
        }
    ?>
</body>
</html>