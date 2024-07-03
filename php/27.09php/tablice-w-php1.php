<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tablice-w-php.php" method="post">
        <input type="number" placeholder="Wpisz wartosc" name="l1">
        <input type="submit" value="przeslij">
    </form>
    <?php
    if(isset($_POST['l1'])){
        $wartosc = $_POST['l1'];
        $tablicawartosci = str_split($wartosc);
        sort($tablicawartosci);
        echo "posortowana tablica wartosci";
        foreach($tablicawartosci as $wart){
            echo $wart;
        }
    }
   
    
    ?>
</body>
</html>