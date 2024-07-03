<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tablica_calkowita = array(23,45,66,33,12,1231,12,3,54,5,6,3,4,5,6,23,2,2,12,34);
        $ilosc_elementow = count ($tablica_calkowita);
       // echo $ilosc_elementow;
        function parzy_nieparzy($tablica_calkowita, $ilosc_elementow) {
           $parzyste =0;
           $nieparzyste =0;
            for ($i = 0;$i <$ilosc_elementow; $i++) {
                if($tablica_calkowita[$i] %2==0){
                 $parzyste++;
                }
                else{
                    $nieparzyste++;
                }
            }
            echo "liczby parzyste to: $parzyste a liczby nieparzyste to: $nieparzyste";
        }
        parzy_nieparzy($tablica_calkowita, $ilosc_elementow);
    ?>
    
</body>
</html>