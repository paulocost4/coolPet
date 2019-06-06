<?php
    error_reporting(1);
    
    include_once "conexao_bd.php";
        session_start();

        $id = $_SESSION["id"];
       
       
        $sql = "SELECT * FROM animais WHERE id='$id'";
        $retorno = $conexao->query($sql);
        echo $conexao-> error;
        while( $registro = $retorno->fetch_array() )
        {
            $nome = $registro["nome"];
        $tipo = $registro["tipo"];
        $sexo =$registro["sexo"];
        $idade = $registro["idade"];
        $raca = $registro["raca"];
        $tamanho = $registro["tamanho"];
        $porte = $registro["porte"];
        $cor = $registro["cor"];
        $pelagem = $registro["pelagem"];
        }               
       
        $retorno = $conexao->query($sql);
            if ($retorno2=TRUE) {
               

            }
            else {
                echo"FALHOU em selecionar da tabela" . $conexao->error;
            }
        
        if ($_POST!=NULL) {
            
            $nome = $_POST["nome"];
            $tipo = $_POST["tipo"];
            $sexo =$_POST["sexo"];
            $idade = $_POST["idade"];
            $raca = $_POST["raca"];
            $tamanho = $_POST["tamanho"];
            $porte = $_POST["porte"];
            $cor = $_POST["cor"];
            $pelagem = $_POST["pelagem"];
            
            $sql2 = "UPDATE animais 
                SET nome ='$nome', tipo='$tipo',
                sexo='$sexo', idade='$idade', raca='$raca', tamanho='$tamanho', porte='$porte', cor='$cor', pelagem='$pelagem'
                WHERE id='$id'
                " ;
            
            
            $retorno2 = $conexao->query($sql2);
            if ($retorno2=TRUE) {
                echo"Alterado com sucesso!";
               
                header("Location: listarpet.php");

            }
            else {
                echo"FALHOU EM ALTERAR A ANIMAL" . $conexao->error;
            }
        }


?>
<!DOCTYPE html>
<html>
    <head>



        <title>CoolPet</title>
        <meta charset="utf-8">
        <!-- css proprio -->
        <link rel="stylesheet" type="text/css" href="style.css">
        
        <style>
            
            #mainAnimal
            {
                height: 1450px;
                background-color: DCDCDC;
            }
        </style>
        

    </head>
    <body>

        <div class="content-fluid">
            <div id="mainAnimal" class="row justify-content-center">
                    
                    <div class="form-group">
                            
                            <form method="POST" enctype="multipart/form-data" action="">
                                
                                <b><center><h1>Cadastre seu Pet</h1></b><br><br>
                                <table border="0" width="500px" height="250px" >
                                    <tr>
                                        <td colspan="2"><img width="500px" height="125px" src="imagens/imagemcadastrar1.jpg"></td>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <td><center><h3>Gato</h3></center></td>
                                        <td><center><h3>Cachorro</h3></center></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <center><input type="radio" name="tipo" value="gato" required></td></center>
                                        <td>
                                        <center><input type="radio" name="tipo" value="cachorro" required></td></center>
                                    </tr>
                                </table>

                                <h3>Nome:</h3>
                                <input type="text" class="form-control" name="nome" required><br><br>
                    
                                <h3>Sexo:</h3>
                                Macho
                                <input type="radio" name="sexo" value="macho" required>
                                Fêmea
                                <input type="radio" name="sexo" value="femea" required><br><br>
                    
                                <h3>Idade:</h3>
                                <input type="text" class="form-control" name="idade" required><br><br>
                    
                                <h3>Raça:</h3>
                                <input type="text" class="form-control" name="raca" required><br><br>
                    
                                <h3>Altura:</h3>
                                <input type="text" class="form-control" name="tamanho" placeholder="Altura em centímetros" required><br><br>
                    
                                <h3>Porte:</h3>
                                <select name="porte" required>
                                    <option value="">-----Selecione-----</option>
                                    <option value="pequeno">Pequeno</option>
                                    <option value="medio">Médio</option>
                                    <option value="grande">Grande</option>
                                </select><br><br>
                    
                                <h3>Cor:</h3>
                                <input type="text" class="form-control" name="cor" required><br><br>
                    
                                <h3>Pelagem:</h3>
                                <select name="pelagem" required>
                                    <option value="">-----Selecione-----</option>
                                    <option value="curto">Curto</option>
                                    <option value="medio">Médio</option>
                                    <option value="longo">Longo</option>
                                </select><br><br>

                                <h3>Foto</h3>

                                <input type="file", name="foto"><br><br>

                    
                                <button type="submit" class="btn btn-danger"><a href="perfil.php">Enviar</a></button>
                    
                            </form></center>
                    </div>
                </div>
                    

            <!-- Footer -->
            <?php 
                include_once "rodape.php"; 
            ?>
        </div>

        
    </body>
</html>
