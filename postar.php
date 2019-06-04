<?php
    include_once "conexao_bd.php";
    include_once "uploud.php";
    
    //configura o fuso horario para sp
    date_default_timezone_set('America/Sao_Paulo');
    session_start();
    $id = $_SESSION["id"];
    $texto = $_POST["texto"];
    $imagem = $_FILES["foto"];
    
    
    
    $sql = "INSERT INTO post(texto, data, hora) 
            values ('$texto', CURDATE(), CURTIME())";
    $retorno = $conexao->query($sql);
    
    
    //postar a imagem
    if($imagem!=NULL)
    {   
        if($retorno==true)
        {   
        
        
        
            echo "<script>
                alert('Insert com sucesso!');
            </script>";
            
            //Pega o id do ultimo post cadastrado 
            $sql = "SELECT * FROM post";
            $retorno = $conexao->query($sql);
            $maior = 0;
            while($registro = $retorno->fetch_array())
            {   
                $i = $registro["id"];  
                if($i > $maior)
                {
                    $maior = $i;
                }
            }
            $idPost = $maior;

            //sql pra setar idUsuario na tabela post_usuario
            $sql2 = "INSERT INTO post_usuario VALUES ($id, $idPost)";
            $retorno2 = $conexao->query($sql2);
        }
        else {
            echo "<script>
                alert('Insert falhou!');
            </script>";
            echo $conexao->error;
        }
        
        //pega foto
        //referencia: getFoto($id, $tabelaVar, $src, $conexao)
        getFoto($idPost,"post", "feed.php", $conexao);
    }
    else {
        echo "<script>
                alert('É necessario ter uma imagem!');
                window.location.href = 'feed.php';
            </script>";
    }

?>