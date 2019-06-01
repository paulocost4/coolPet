<?php

    include_once "conexao_bd.php";
    
    
    
    //session_start();
    $id= $_SESSION['id'];
    //$cod = $_GET["cod"];

    $sql ="SELECT * FROM usuario where id='$id' ";
    $retorno = $conexao->query($sql);
    
    if($registro = $retorno->fetch_array())
        {
         
            $foto = $registro["foto"];   
            
        }   

        echo ' <img height="100px" width="" src="data:image/jpg;base64,' .  base64_encode($foto)  . '" /> ';
?>    



