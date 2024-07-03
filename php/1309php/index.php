<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td, tr{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
        <?php
            for($i=1;$i <= 10;$i++){
                for($x=1;$x<=10;$x++){
                    $y = $i * $x;
                    echo"
                        <table>
                            <tr>
                                <td> 
                            </tr>


                        </table>";
                }
            }
        ?>
    </table>
    
</body>
</html>