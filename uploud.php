<?php
    //pagina php apenas pra cadastrar uma imagem no banco de dados
    include_once "conexao_bd.php";
    session_start();
    $id = $_SESSION["id"];
    

    $foto = $_FILES["foto"];
    if($foto != NULL)
    {
        
        $nomeFinal = time().'.jpg';
        //pra usar essa função tive que dar previlegios a mais no diretorio do linux
        // o comando foi: chmod -R 777 /opt/lampp/htdocs/CoolPet
        if (move_uploaded_file($foto['tmp_name'], $nomeFinal)) {
            $tamanhoImg = filesize($nomeFinal); 
            
            $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
         
        
            $sql = "UPDATE usuario SET foto = '$mysqlImg' where id = '$id'";
        
            $retorno = $conexao->query($sql);
            if ($retorno==TRUE) {
                echo "
                <script>
                    alert('Imagem cadastrada com sucesso');
                </script>
                ";
                header("location: cadastrarAnimal.php");
            }
            else{
                echo "
                <script>
                    alert('A imagem não foi enviada');
                </script>
                ";
                echo "Erro: " . $conexao->error;
            }
        
        }
        
        

        
            
            

            
        
        
    
    }

?>