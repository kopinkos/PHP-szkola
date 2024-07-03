<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data = getdate();
        //$dzien = $data["mday"];
        //$miesiac = $data["mon"];
        // $rok = $data["year"];
        // echo $data['month']."<br>";
        $miesiac=array(1 => 'Stycznia',
            2 => 'Lutego',
            3 => 'Marca',
            4 => 'Kwietnia',
            5 => 'Maja',
            6 => 'Czerwca',
            7 => 'Lipca',
            8 => 'Sierpnia',
            9 => 'Wrzesnia',
            10 => 'Pazdziernika',
            11 => 'Listopada',
            12 => 'Grudnia');
            
        echo "Biezaca data to: ".$data["mday"]." - ".$miesiac[$data["mon"]]."- ".$data["year"] ."r."; 
    ?>
</body>
</html>