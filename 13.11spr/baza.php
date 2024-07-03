<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "moja_baza";

$db_conn = new mysqli($db_host, $db_username, $db_password, $db_name);
if ($db_conn->connect_error) {
    die("blad polaczeniea". $db_conn->connect_error);
}

if (isset($_POST['submit'])) {
    $akcja = $_POST['akcja'];
    $nazwa = $_POST['nazwa'];
    $cena = $_POST['cena'];
    $opis = $_POST['opis'];
    $data_dodania = $_POST['data_doda'];
    $id = $_POST['id'];

    if ($akcja == 'dodaj') {
        $sql = "INSERT INTO produkty (`nazwa`, `cena`, `opis`, `data_dodania`, id) VALUES ('$nazwa', '$cena', '$opis', '$data_dodania', '$id')";
    } elseif ($akcja == 'aktualizuj') {
        $sql = "UPDATE produkty SET `data_dodania`='$data_dodania', `cena`='$cena' WHERE `produkty`. `id`=$id";
    } elseif ($akcja == 'usun') {
        $sql = "DELETE FROM produkty WHERE id=$id";
    }

    if ($db_conn->query($sql) === TRUE) {
        echo "Operacja zakończona sukcesem.";
    } else {
        echo "Błąd operacji: " . $db_conn->error;
    }
}
$db_conn->close();
?>