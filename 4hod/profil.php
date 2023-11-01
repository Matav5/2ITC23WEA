<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <?php
        session_start();
        
        if(!$_SESSION["jePrihlaseny"]){
            header("location: index.php");
            die();
        }
    ?>
    <h1>Vítejte uživateli <?= $_SESSION["uzivatelJmeno"] ?>  <h1>
        <?php 
            if(!empty($_SESSION["email"])){
                echo $_SESSION["email"] ;
            }
         ?>
    <form action="logout.php" method="post">
        <button>Logout</button>
    </form>

</body>
</html>