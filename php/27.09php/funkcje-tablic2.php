<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tab =array(
        11 => 3,
        12 => 8,
        13 => 5,
        14 => 2,
        15 => 10,
        16 => 26,
        17 => 54,
        18 => 4,
        19 => 432,
        20 => 23,
        21 => 54,
        22 => 784,
        23 => 4234,
        24 => 821,
        25 => 23,
        26 => 73
    );
    foreach($tab as $wartosc){
        if($wartosc % 3 === 0 && $wartosc % 4 === 0  ){
            echo  $wartosc.'<br>';
        }
        else {
            echo "c <br>";

        }
        
    }
    ?>
    
</body>
</html>