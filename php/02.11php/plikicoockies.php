<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ciasteczka</title>
</head>
<body>
   <?php
    function dni_do_urodzin($urodziny) {
        $data = new DateTime();
        $nastepne_urodziny = new DateTime($urodziny);
        $nastepne_urodziny->modify('this year');
            if ($nastepne_urodziny < $data) {
                $nastepne_urodziny->modify('+1 year');
            }
            $roznica = $data->diff($nastepne_urodziny);
            return $roznica->days;
        }
            if (isset($_POST['urodziny'])) {
                $urodziny = $_POST['urodziny'];
                setcookie('urodziny', $urodziny, time() + 31536000);
                $dni_do_urodzin = dni_do_urodzin($urodziny);
            }
            elseif (isset($_COOKIE['urodziny'])) 
            {
                $urodziny = $_COOKIE['urodziny'];
                $dni_do_urodzin = dni_do_urodzin($urodziny);
            } 
            else{
                $dni_do_urodzin = null;
            }
        
    ?>  
<h1>Liczba dni do urodzin</h1>
    
    <?php if ($dni_do_urodzin !== null): ?>
        <p>Do Twoich urodzin pozostalo <?php echo $dni_do_urodzin; ?> dni.</p>
    <?php endif; ?>
    
    <form method="post">
        <label>Podaj swoja date urodzin:</label>
        <input type="date" name="urodziny" required>
        <input type="submit" value="Sprawdz dni do urodzin">
    </form>
   
    
</body>
</html>
