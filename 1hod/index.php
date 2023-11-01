<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>První hodina PHP</title>
</head>
<body>
    <?php
    
        $a = 20;
        $b = 10;


        echo $a - $b . "<br>";

        echo "<b>Vítejte na první hodince PHP</b>";

        echo "<br>";
        if($a > $b){
            echo "A je větší jak B";
        }
        else if($a == $b){
            echo "A je stejně velké jako B";
        }
        else{
            echo "B je větší jak A";
        }
        echo "<br>";
        switch($a){
            case 5:
                echo "A se rovná pěti";
                break;
            default:
                echo "A má deprese";
                break;
        }
        # 0 - 3
        $pole = ["Zdeněk","Arnie","Dave","Filip"];

        for($i = 0; $i < count($pole); $i++){
            echo "<br>";
            echo $pole[$i];
        }
        echo "<br>";
        echo "Cyklus naopak ------";

        for($i = count($pole) - 1; $i >= 0; $i--){
            echo "<br>";
            echo $pole[$i];
        }
        
        foreach($pole as $prvek){
            echo "<br>";
            echo $prvek;
        }

        while($a > $b){
            echo "<br>";
            echo --$a;
        }

        $vypis = "Tohle je Super Hustej Krutopřísnej Výpis";

        function SuperHustejKrutoprisnejVypis($barva){
            global $vypis;
            echo "<p style=\"color: $barva \"> $vypis </p>";
            $vypis = "Smutnej Výpis";
        }
        SuperHustejKrutoprisnejVypis("crimson");
        SuperHustejKrutoprisnejVypis("hotpink");
        SuperHustejKrutoprisnejVypis("green");
        $vypis = "Tohle je Ultra Super Hustej Krutopřísnej Nejnejnej Výpis";
        SuperHustejKrutoprisnejVypis("#FD05ED");
        SuperHustejKrutoprisnejVypis("yellow");
        SuperHustejKrutoprisnejVypis("blue");
    ?>


</body>
</html>