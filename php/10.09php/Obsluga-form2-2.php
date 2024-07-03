<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="Obslug-form2-2.php">
        <input type="text" name="tekst" placeholder="Wpisz tekst">
        <input type="submit" value="Wyswietl tekst">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $tekst = $_POST["tekst"];

        echo "<p>Wprowadzony tekst: ". $tekst . "</p>";
    }
    ?>
</body>
</html>