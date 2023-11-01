<?php
//print_r($_GET["vyber"]);
//print_r($_POST["vyber"]);
$moznosti = ["kamen","nuzky","papir"];
$nahodnyIndex = rand(0,2);

$vyberPocitace = $moznosti[$nahodnyIndex];
$vyberHrace = $_POST["vyber"];


echo "<br>";
echo $vyberPocitace;
echo "<br>";
echo $vyberHrace;

$vyhralPocitac = false;
$vyhralHrac = false;

if($vyberHrace == $vyberPocitace){
    echo "<br>";
    echo "Remíza joo";
}
else if ($vyberHrace == "kamen"){
    if($vyberPocitace == "papir"){
        $vyhralPocitac = true;
    }
    else{
        $vyhralHrac = true;
    }
}
else if ($vyberHrace == "nuzky"){
    if($vyberPocitace == "kamen"){
        $vyhralPocitac = true;
    }
    else{
        $vyhralHrac = true;
    }
}
else if ($vyberHrace == "papir"){
    if($vyberPocitace == "nuzky"){
        $vyhralPocitac = true;
    }
    else{
        $vyhralHrac = true;
    }
}


echo "<br>";
echo "Hráč: ".$vyhralHrac;
echo "<br>";
echo "Počítač: ".$vyhralPocitac;

header("location: index.php?vyhralHrac=$vyhralHrac&vyhralPocitac=$vyhralPocitac&vyberHrace=$vyberHrace&vyberPocitace=$vyberPocitace");
die();
?>