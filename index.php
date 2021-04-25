<?php
    session_start();
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
    <title>Everest Parking Station</title>
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
                    <h1 class="tituloInicio">Consultar veículo</h1>
                    <div class="input-group mb-3">
                        <?php                           
                           if (isset($_SESSION['msg'])){
                                  echo $_SESSION['msg'];                                        
                                 }       
 
                         ?>
                        <form method="POST" id="consultaForm" class="input-group mb-3" action="data/processa.php">
                            <span class="input-group-text">Placa</span>                     
                            <input required="" type="text" class="form-control" name="placa" aria-label="Placa do veículo" placeholder="XYZ-0000">                                                    
                            <input type="submit" name="buscarPlaca" id="buscarPlaca" value="Consultar" class="btn btn-primary">                            
                                
                            
                        </form>
                    </div>
                    
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
    <!--<script type="text/javascript" src="scripts/alert.js"></script> -->
</body>
</html>