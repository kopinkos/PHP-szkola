<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="Obsluga-form2-6.php">
        <label>
            <input type="radio" name="wybor" value="opcja1"> Opcja 1
        </label><br>
        <label>
            <input type="radio" name="wybor" value="opcja2"> Opcja 2
        </label><br>
        <label>
            <input type="radio" name="wybor" value="opcja3"> Opcja 3
        </label><br>
        <input type="submit" value="Wyswietl zaznaczone opcje">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["wybor"])) {
                $wybor = $_POST["wybor"];
                echo "<p>Zaznaczono opcje: " . $wybor . "</p>";
            } 
            else {
                echo "<p>Nic nie zostalo zaznaczone.</p>";
            }
        }
    ?>
</body>
</html>