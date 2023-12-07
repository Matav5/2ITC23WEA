<?php

print_r($_POST);
if(isset($_POST["uloz"])){
    $odkaz = $_POST["odkaz"];

    $soubor = fopen($_POST["vyber"],"a");
    fwrite($soubor, $odkaz."\n");
    fclose($soubor);
}
?>>