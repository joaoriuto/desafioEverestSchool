
<!DOCTYPE html>
<html lang="pt-br">
<?php
    session_start();
    include_once("conexao.php");
?>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/style.css" type="text/css" rel="stylesheet">
    
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
                    <img class="logoMarca" src="../img/logoHorizontal.png">
                    <h1 class="tituloInicio">Consulta</h1>

                    <table class="table ">
                     <thead>
                       <tr>                         
                         <th scope="col">Responsável</th>
                         <th scope="col">Placa do veículo</th>
                         <th scope="col">Filho(a) na escola</th>
                        </tr>
                     </thead>                   

                    <?php

                        $pesquisar = $_POST['placa'];
                        $result_placa = "SELECT * FROM tabelaresponsavel WHERE placa LIKE '$pesquisar%'";
                        $resultado_placa = mysqli_query($conexao, $result_placa);  
                        $totLinhas = mysqli_num_rows($resultado_placa);
                       
                        if ($totLinhas == 0) {                                                                 
                            echo<<<HTML
                            <div class="alert alert-danger" role="alert">
                                Esta placa não está cadastrada.
                            </div>
                            HTML;                                
                    }
                        
                        
                     ?>
                        
                     <?php   
                     
                     while($rows_placas = mysqli_fetch_array($resultado_placa)){ 
                            $filhoId = $rows_placas['aluno_id'];
                            $placa = $rows_placas['placa'];
                            $responsavel = $rows_placas['nome'];                      

                          
                            $alunoInfos = "SELECT * FROM tabelaalunos WHERE id LIKE '$filhoId'";
                            $alunoEsp = mysqli_query($conexao, $alunoInfos);                         

                           
                            while($rows_alunos = mysqli_fetch_array($alunoEsp)){
                                $filhoNome = $rows_alunos['nome'];
                                $filhoPresenca = $rows_alunos['presenca'];
                                
                            ?>
                               <tbody>
                                <tr>                                 
                                 <td><?php echo $responsavel; ?></td>
                                 <td><?php echo $placa; ?></td>
                                 <td><?php echo $filhoNome; ?></td>
                                </tr>                                        
                               </tbody>
                                </table>
                                <img src="../img/alunoModels.jpg" class="rounded mx-auto d-block" alt="Foto perfil aluno"> <br><br><br>
                                <span class="badge badge-pill badge-primary"><a style="text-decoration: none;" href="../index.php">Nova consulta</a></span>
                               
                                 
                            <?php
                            }     
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