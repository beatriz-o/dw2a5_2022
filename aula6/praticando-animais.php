<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Destino</title>
</head>

<body>
    <h1>Destino</h1>
    <hr>
    <?php
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);


        echo "<p>Nome informado: $nome<br>Email: $email</p>"
    ?>
  <div class="box">
      <img class="img1" src="https://www.petz.com.br/blog/wp-content/uploads/2021/12/porque-cachorro-lambe-tudo-2-1280x720.jpg">
      <img class="img2" src="https://www.petz.com.br/blog/wp-content/uploads/2021/11/enxoval-para-gato-Copia.jpg">
      <img class="img2" src="https://www.jornalciencia.com/wp-content/uploads/2016/08/golfinho-960x500.jpg">
      <img class="img2" src="https://ccb.med.br/uploads/not-2020/not_02_09_2020.jpg">
    


      <style>
        .box{
            display: inline-flex;
            align-items: flex-start;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: flex-start;
        }
        .img1{
            flex: 1 1 auto;
            height: 150px;
        }
        .img2{
            flex: 1 1 auto;
            height: 150px;
        }
        .img3{
            flex: 1 ;
            height: 150px;
        }
        .img4{
            flex: 1;
            height: 150px;
        }
       </style> 

</body>
</html>