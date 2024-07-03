<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obsluga danych</title>
</head>
<body>
<h2>Dodaj dane</h2>
    <form action="baza.php" method="post">
        <input type="hidden" name="akcja" value="dodaj">
        Nazwa prodkutku: <input type="text" name="nazwa" required>
        Cena prodkutku: <input type="number" name="cena" required>
        Opis: <input type="text" name="opis"required>
        Data dodania: <input type="date" name="data_doda"required>
        ID: <input type="number" name="id" required>
        <input type="submit" name="submit" value="Dodaj">
    </form>

    <h2>Aktualizuj dane</h2>
    <form action="baza.php" method="post">
        <input type="hidden" name="akcja" value="aktualizuj">
        ID: <input type="number" name="id" required>
        Nowa cena: <input type="number" name="cena" required>
        Nowa data doddania: <input type="date" name="data_doda"required>
        <input type="submit" name="submit" value="Aktualizuj">
    </form>

    <h2>Usuń dane</h2>
    <form action="baza.php" method="post">
        <input type="hidden" name="akcja" value="usun">
        ID: <input type="number" name="id" required>
        <input type="submit" name="submit" value="Usuń">
    </form>
    <?php
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "moja_baza";
    
    $db_conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($db_conn->connect_error) {
        die("blad polaczeniea". $db_conn->connect_error);
    }
    $sql = "SELECT * FROM produkty";
    $wiersze = $db_conn->query($sql);
    
    if ($wiersze->num_rows > 0) {
        echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Cena</th>
                <th>Opis</th>
                <th>Data_dodania</th>
            </tr>";
    
        while ($kol = $wiersze->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $kol["id"] . "</td>";
            echo "<td>" . $kol["nazwa"] . "</td>";
            echo "<td>" . $kol["cena"] . "</td>";
            echo "<td>" . $kol["opis"] . "</td>";
            echo "<td>" . $kol["data_dodania"] . "</td>";
            echo "</tr>";
        }
    
        echo "</table>";
    } else {
        echo "Brak wyników.";
    }
    
    $db_conn->close();
    ?>

</body>
</html>