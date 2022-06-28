<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Contador</title>
</head>

<body>
    <h1>Contador</h1>

    <?php
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_INT);
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_INT);
        $incremento = filter_input(INPUT_POST, "incremento", FILTER_SANITIZE_NUMBER_INT);

        if ($num1 < $num2){
            echo "<h2>Parâmetros informados:</h2>";
            echo "Início: $num1 <br>Final: $num2 <br>Incremento: $incremento<br>";
            
            for ($x = $num1; $x <= $num2; $x+= $incremento){
                echo $x.", ";
            }
        }

        if ($num1 > $num2){
            echo "<h2>Parâmetros informados:</h2>";
            echo "Início: $num1 <br>Final: $num2 <br>Incremento: $incremento<br>";
            
            for ($x = $num1; $x >= $num2; $x-= $incremento){
                echo $x.", ";
            }
        }

        
   
    ?>

</body>
</html>