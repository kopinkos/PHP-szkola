<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="number" name="liczba">
        <button>Sprawdz czy rok jest przestepny</button>
    </form>
    <?php
        $a = $_POST['liczba']; //2008 , 2012, 2016, 2004, 2000, 2020
            function przestepny($a){
                if($a%4 && $a%400){
                    echo "Rok jest przestepny";
                }
                else{
                    echo "Rok nie jest przestepny";
                }
            }
        echo przestepny($a); 
        /*1. Napisz skrypt sprawdzający czy podany przez użytkownika w formularzu rok jest przestępny. (Podpowiedź: rok jest przestępny, gdy jest podzielny przez 4 i nie jest podzielny przez 100 lub jest podzielny przez 400. ) W zadaniu wykorzystaj funkcję sprawdzającą i formularz HTML, zadbaj o wygląd kodu dołączając CSS.

        2. Utwórz 100-elementową tablicę liczb całkowitych i wypełnij ją losowymi liczbami z przedziału 1 do 100, następnie stwórz formularz w którym użytkownik poda jedną liczbę z tego zakresu i oblicz wystąpienie tej liczby w tablicy. 

        Wylosowane liczby z tablicy zaprezentuj w formie tabelki 10x10. 

        Wynik wyświetl na stronie poniżej tabelki a znalezioną liczbę zaakcentuj innym kolorem.
            */
    ?>
</body>
</html>