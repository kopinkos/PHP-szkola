<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr, td{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        /*
            for($i = 151; $i >= 100; $i--){
                if($i % 5 == 0){
                    echo " $i <br>";
                }
            }
    */
    /*
            $PrzedOceny = array(
                array ("JezykAngielski","JezykPolski","Matematyka","Historia","Wos"), 
                array (5,3,2,3,1)
        );
        for($i=0;$i<count($PrzedOceny[0]);$i++){
                $x = $PrzedOceny[0][$i];
                $y = $PrzedOceny[1][$i]; 
                 echo "
                 <table>
                     <thead>
                      <th> Przedmiot <th> Ocena
                      <tbody>
                      <td> $x <td> $y
                 </table>";
        }
        */
        $tablicaMN = array(1,2,3,4,5,6,7,8,9,10);
        for($i=0;$i<count($tablicaMN);$i++){
            for($y=0;$y<count($tablicaMN);$y++){
                $x= $tablicaMN[$y] * $i;
                echo "
                   <table>
                       <thead>
                       
                       <tbody>
                       <td> $x 
                   </table>"; 
            }
        }



   
    

    ?>
</body>
</html>