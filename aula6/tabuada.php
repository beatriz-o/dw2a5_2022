<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Tabuada</title>
</head>

<body>
    <h1>Tabuada</h1>
    <hr>
    <form action="tabuada.php" method="GET">

    <label for="valor">Valor</label>
    <input type="number" name="valor" id="valor" placeholder="Digite um número" required><br>

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>
    </form>

    <?php
        $valor = filter_input(INPUT_GET, "valor", FILTER_SANITIZE_NUMBER_INT);
       
        

        if ($valor != null){
            echo "<h1>Tabuada do $valor</h1>";
            
            for ($x = 1; $x <= 10; $x++){
                $resultado = $valor * $x;
                echo "$valor x $x = $resultado <br>";
            }
        }
        
   
    ?>

</body>
</html>