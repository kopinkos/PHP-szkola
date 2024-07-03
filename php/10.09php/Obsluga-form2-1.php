<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="Obsluga-form2-1.php">
        <label>
            <input type="checkbox" name="opcja1" value="Opcja 1"> Opcja 1
        </label><br>
        <label>
            <input type="checkbox" name="opcja2" value="Opcja 2"> Opcja 2
        </label><br>
        <label>
            <input type="checkbox" name="opcja3" value="Opcja 3"> Opcja 3
        </label><br>
        <input type="submit" value="Wyswietl zaznaczone opcje">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<h2>Wybrane opcje:</h2>";
        if (isset($_POST["opcja1"])) {
            echo "<p>Opcja 1: " . $_POST["opcja1"] . "</p>";
        }
        if (isset($_POST["opcja2"])) {
            echo "<p>Opcja 2: " . $_POST["opcja2"] . "</p>";
        }
        if (isset($_POST["opcja3"])) {
            echo "<p>Opcja 3: " . $_POST["opcja3"] . "</p>";
        }
    } 
    else {
        echo "<p>Nic nie zostalo wybrane.</p>";
    }
    ?>
</body>
</html>