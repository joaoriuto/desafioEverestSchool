<?php
    include_once("data/conexao.php");
    include_once("consulta.php");    
    session_start();  
    $query = sprintf("SELECT * FROM tabelaresponsavel");
    $dados = mysqli_query($conexao, $query) or die ('Falha ao obter dados.');
    $linha = mysqli_fetch_assoc($dados);
    $total = mysqli_num_rows($dados);    
   
    //$filtroPesquisa = "SELECT * FROM tabelaresponsavel WHERE 'placa'";
    //echo $filtroPesquisa;
    ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" type="text/css" rel="stylesheet">
    
    <!--CDN do Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Consulta</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-md-auto">                    
                    <img class="logoMarca" src="img/logoHorizontal.png">
                    <h1 class="tituloInicio">Consulta</h1>
                    <?php

                        //receber placa          

                        if( $total > 0 ){
                            do {
                         ?>                            
                            <ul class="list-group">
                                <li class="list-group-item"><?=$linha['id']?> <?=$linha['nome']?></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item">Placa: <?=$linha['placa']?></li>
                                <li class="list-group-item"></li>
                            </ul>
                        <?php       
                            }
                            while($linha = mysqli_fetch_assoc($dados));
                        }
                    ?>                    
                    
                </div>
                <div class="col"></div>
            </div>
        </div>
    </main>
    <footer>

    </footer>

    <!-- JavaScript bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!--Jquery CDN-->
    <script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
    <!--Meus scripts-->
     
</body>
</html>