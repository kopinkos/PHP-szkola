<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="Obsluga-form2-5.php">
        <label for="imie_nazwisko">Imie i Nazwisko:</label>
        <input type="text" name="imie_nazwisko" required><br>

        <label for="adres">Adres:</label>
        <input type="text" name="adres" required><br>

        <label for="telefon">Numer Telefonu:</label>
        <input type="tel" name="telefon" pattern="[0-9]{9}" required><br>

        <label for="email">Adres E-mail:</label>
        <input type="email" name="email" required><br>

        <label for="komentarz">Komentarz:</label><br>
        <textarea name="komentarz" rows="4" cols="50"></textarea><br>

        <input type="submit" value="Wyslij">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $imieNazwisko = $_POST["imie_nazwisko"];
        $adres = $_POST["adres"];
        $telefon = $_POST["telefon"];
        $email = $_POST["email"];
        $komentarz = $_POST["komentarz"];

        if (empty($imieNazwisko) || empty($adres) || empty($telefon) || empty($email)) {
            echo "<p>Blad: Wszystkie pola sa wymagane.</p>";
        }  
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Blad: Nieprawidlowy adres e-mail.</p>";
        } 
        else {

            echo "<h1>Dane Osobowe:</h1>";
            echo "<p><strong>Imie i Nazwisko:</strong> " .$imieNazwisko . "</p>";
            echo "<p><strong>Adres:</strong> " . $adres . "</p>";
            echo "<p><strong>Numer Telefonu:</strong> " . $telefon . "</p>";
            echo "<p><strong>Adres E-mail:</strong> " . $email . "</p>";
            echo "<p><strong>Komentarz:</strong> " . $komentarz . "</p>";
        }
    }
    ?>
</body>
</html>