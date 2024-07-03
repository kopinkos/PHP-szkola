<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function wynik($a, $b){
        $c = $a**3 + $b**3 ;
        echo "Wynik dzialania sumy tych argumentow podniesionych do trzeciej potegi to " . $c;
    }
    wynik(4,5);
    ?>
</body>
</html>