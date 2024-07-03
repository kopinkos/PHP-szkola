<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a =2;
   function liczba_calkowita_to_pierwsza ($a){
        for ($i=2;$i<=$a;$i++){
            if($a%$i==0){
             return 1;
               
            }
            else
            break;
        }
        return 0;
       
   }
    $odpowiedz = liczba_calkowita_to_pierwsza ($a);
    echo $odpowiedz;
    ?>
</body>
</html>