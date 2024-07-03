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
     echo 'Uplynelo '.$data["yday"].' a zostalo'. 365 -$data["yday"]  ;
     
     
    ?>
    
</body>
</html>