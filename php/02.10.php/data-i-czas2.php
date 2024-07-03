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
        $dzien =array('Monday' => 'Poniedzialek',
        'Tuesday' => 'Wtorek',
        'Wednesday' =>'Sroda',
        'Thursday' => 'Czwartek',
        'Friday' => 'Piatek',
        'Saturday' => 'Sobota',
        'Sunday' => 'Niedziela');
        echo "Dzisiaj jest: ".$dzien[$data["weekday"]];
    ?>
</body>
</html>