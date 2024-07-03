<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a =4;
   function liczba_calkowita_to_pierwsza ($a){
    $sprawdzenie = true;
    $i =2;
    while ($i < $a) {
        if ($a% $i == 0) {
            $sprawdzenie == false;
        }
        $i++;
    }
    if($sprawdzenie == false){
        echo "liczba nie jest pierwsza";
    }
    else{
        echo "liczbas jest pierwsza";
    }
       
   }
   liczba_calkowita_to_pierwsza($a)
    ?>
</body>
</html>