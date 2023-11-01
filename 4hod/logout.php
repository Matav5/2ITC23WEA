<?php
    session_start();


    //session_destroy();
    $_SESSION["jePrihlaseny"] = false;
    unset($_SESSION["uzivatelJmeno"]);

    header("location: index.php");
    die();

?>