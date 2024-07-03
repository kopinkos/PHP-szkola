<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function liczby_pitagorejskie($a, $b, $c){
        if($a*$a + $b * $b == $c*$c){
            return 1;
        }
        else{
            return 0;
        }
    }
    $warunek = liczby_pitagorejskie(2, 3, 2);
    echo"Czy twoje liczby pitagorejskie spelniaja warunek $warunek";
    ?>
    
</body>
</html>