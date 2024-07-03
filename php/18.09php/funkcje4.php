<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <form action="funkcje4.php" method="post">
        <input type="number" name="liczba1" placeholder="wybierz 1 liczbe">
        <input type="number" name="liczba2" placeholder="wybierz 2 liczbe">

        <button>oblicz</button>

        <select name="wybor">
            <option value="+">dodawanie </option>
            <option value="-">odejmowanie</option>
            <option value="*">mnozenie</option>
            <option value="/">dzielenie</option>
        </select>
    </form>
    <?php
       $a = $_POST['liczba1'];
       $b = $_POST['liczba2'];
       $wybor = $_POST['wybor'];

       function kalkulator ($a, $b, $wybor){
        if($wybor == "+" ){
            $c=$a + $b;
            echo $c;
        }
        elseif($wybor == "-"){
            $c=$a - $b;
            echo $c;
        }
        elseif($wybor == "*"){
            $c=$a * $b;
            echo $c;
        }
        elseif($wybor == "/"){
            $c=$a / $b;
            echo $c;
        }
        
       }
       kalkulator($a,$b,$wybor);



    ?>
</body>
</html>