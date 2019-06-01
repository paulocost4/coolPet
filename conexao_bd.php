<?php


    $conexao = new mysqli("localhost", "root", "" , "coolpet");


    if ($conexao->connect_error) 
    {

        echo "Erro ao conectar: " . $conexao->connect_error . "<br>";

    }
    function logar($email, $senha, $con)
        {
            
            $sql = " SELECT * FROM usuario 
                    where email = '$email'
                    AND senha = '$senha'";
                    $retorno = $con->query($sql);
                    
            if($registro = $retorno->fetch_array())
            {
                $id = $registro["id"];
                $nome = $registro["nome"];
                //começa uma sessão
                session_start();

                $_SESSION["logado"] = "ok";
                $_SESSION["id"] = $id;
                $_SESSION["nome"] = $nome;
                $_SESSION["aux"] = 0;
            }
        }


?>