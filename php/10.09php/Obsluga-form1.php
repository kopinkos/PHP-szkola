<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formularz rejestracyjny dla uczniow</h1>
    <form method="post" action="Obsluga-form1">
        <label for="imie">Imie:</label>
        <input type="text" name="imie"  required><br><br>

        <label for="nazwisko">Nazwisko:</label>
        <input type="text" name="nazwisko"  required><br><br>

        <label for="data_urodzenia">Data urodzenia:</label>
        <input type="date" name="data_urodzenia"  required><br><br>

        <label for="adres">Adres:</label>
        <textarea name="adres" rows="4" required></textarea><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email"  required><br><br>

        <input type="submit" value="Zarejestruj sie">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $data_urodzenia = $_POST["data_urodzenia"];
        $adres = $_POST["adres"];
        $email = $_POST["email"];

        if (empty($imie) || empty($nazwisko) || empty($data_urodzenia) || empty($adres) || empty($email)) {
            echo "Wszystkie pola formularza sa wymagane. Prosze wypelnic je wszystkie.";
        } 
        else {
            echo "Dane zostaly zarejestrowane:<br>";
            echo "Imie: $imie<br>";
            echo "Nazwisko: $nazwisko<br>";
            echo "Data urodzenia: $data_urodzenia<br>";
            echo "Adres: $adres<br>";
            echo "E-mail: $email<br>";
        }
    }
    ?>
    
</body>
</html>