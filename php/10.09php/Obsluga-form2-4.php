<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="Obsluga-form2-4.php">
        <label for="figura">Wybierz figure:</label>
        <select name="figura">
            <option value="kwadrat">Kwadrat</option>
            <option value="prostokat">Prostokat</option>
            <option value="okrag">Okrag</option>
        </select>
        <br>
        <div id="parametry">
            <label for="parametr1">Podaj wymiar 1:</label>
            <input type="text" name="parametr1">
            <br>
            <label for="parametr2">Podaj wymiar 2:</label>
            <input type="text" name="parametr2">
            <br>
        </div>
        <input type="submit" value="Oblicz">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $figura = $_POST["figura"];

    $parametr1 = isset($_POST["parametr1"]) ? $_POST["parametr1"] : "";
    $parametr2 = isset($_POST["parametr2"]) ? $_POST["parametr2"] : "";

    if (!is_numeric($parametr1) || ($figura === "prostokat" && !is_numeric($parametr2))) {
        echo "Blad: Podane dane nie sa liczbami.";
    } 
    else {
        switch ($figura) {
            case "kwadrat":
                $pole = $parametr1 * $parametr1;
                $obwod = 4 * $parametr1;
                break;
            case "prostokat":
                $pole = $parametr1 * $parametr2;
                $obwod = 2 * ($parametr1 + $parametr2);
                break;
            case "okrag":
                $pole = M_PI * $parametr1 * $parametr1;
                $obwod = 2 * M_PI * $parametr1;
                break;
            default:
                echo "Blad: Nieznana figura.";
                break;
        }

        echo "<h2>Wyniki dla figury: $figura</h2>";
        echo "Pole: $pole<br>";
        echo "Obwod: $obwod<br>";
        }
    }
    ?>
</body>
</html>