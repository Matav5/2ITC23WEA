<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace a přihlášení</title>
</head>
<body>
    <?php
        session_start();
        print_r($_SESSION);
        
        var_dump($_POST);
        $chyby = "";

        if(!empty($_POST)){
                if(!empty($_POST["registrace"])){
                echo $_POST["uzivatelJmeno"];
                
                if(strlen($_POST["uzivatelJmeno"]) <= 3 ){
                    $chyby .= "Uživatelské jméno má 3 nebo méně znaků \n";
                }
                if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
                    $chyby .= "Email není email \n";
                }
                if(!str_contains($_POST["email"], "@seznam.cz")){
                    $chyby .= "Email není požadovaného formátu \n";
                }
                if(strlen($_POST["heslo"]) <= 8 ){
                    $chyby .= "Heslo má 8 nebo méně znaků \n";
                }

                /*
                    Pravidla:
                        Uživatelský jméno: víc jak 3 znaky

                        Email: musí to být email. email musí mít doménu @seznam.cz

                        Heslo: víc jak 8 znaků. Volitelné: 1 velký 1 malý písmeno 1 číslo 1 speciální znak
                */

                if(empty($chyby)){
                    //Zahájit proces registrace
                    echo "<p>Uživatel se zaregistroval</p>";
                }
            }


            if(!empty($_POST["prihlaseni"])){
                echo $_POST["uzivatelJmeno"];
                
                if(strlen($_POST["uzivatelJmeno"]) <= 3 ){
                    $chyby .= "Uživatelské jméno má 3 nebo méně znaků \n";
                }

                if(strlen($_POST["heslo"]) <= 8 ){
                    $chyby .= "Heslo má 8 nebo méně znaků \n";
                }
    
                /*
                    Pravidla:
                        Uživatelský jméno: víc jak 3 znaky
        
                        Heslo: víc jak 8 znaků. Volitelné: 1 velký 1 malý písmeno 1 číslo 1 speciální znak
                */
    
                if(empty($chyby)){
                    //Zahájit proces přihlášení
                    $_SESSION["jePrihlaseny"] = tRuE;
                    $_SESSION["uzivatelJmeno"] = $_POST["uzivatelJmeno"];
                    echo "<p>Uživatel se přihlásil</p>";
                }
            }
        }
    ?>
    <h1>Přihlášení:</h1>
    <form action="" method="POST">
        <label>Uživatelské jméno:</label>
        <input type="text" name="uzivatelJmeno"><br>

        <label>Heslo:</label>
        <input type="password" name="heslo"><br>

        <input type="submit" name="prihlaseni" value="Přihlásit se!">
    </form>


    <h1>Registrace</h1>
    <form action="" method="POST">
        <label>Uživatelské jméno:</label>
        <input type="text" name="uzivatelJmeno" value="<?= empty($_POST["uzivatelJmeno"]) ? "" : $_POST["uzivatelJmeno"] ?>"><br>
        
        <label>Email:</label>
        <input type="email" name="email" value="<?= empty($_POST["email"]) ? "" : $_POST["email"] ?>"><br>
        
        <label>Heslo:</label>
        <input type="password" name="heslo" value="<?= empty($_POST["heslo"]) ? "" : $_POST["heslo"] ?>"><br>

        <input type="submit" name="registrace" value="Registrovat se!">
    </form>

    <?php 
        echo "<p style='color:red'>$chyby</p>";
    ?>
</body>
</html>