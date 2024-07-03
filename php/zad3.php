<?php
$tablica = array(7, 2, 13, 3, 9, 5, 6, 10, 8, 2, 1, 3, 6, 12, 18, 19);
$min = $tablica[0];
$max = $tablica[0];
$suma_parzyste = 0;
$suma_nieparzyste = 0;
foreach ($tablica as $element){
    if($element < $min){
        $min = $element;
    }
    if($element > $max){
        $max = $element;
    }
    if($element %2 == 0){
        $suma_parzyste += $element;
    }
        else{
            $suma_nieparzyste += $element;
        }
}
echo'minimum' . $min . '<br>';
echo'maksimum' . $max . '<br>';
echo'suma liczb parzystych' . $suma_parzyste . '<br>';
echo'suma liczb nieparzystych' . $suma_nieparzyste . '<br>';
?>