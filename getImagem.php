<?php

    include_once "conexao_bd.php";
    
    
    
    //session_start();
    $id= $_SESSION['id'];
    //$cod = $_GET["cod"];

    
    
    function getImagem($tabela, $id, $conexao)
    {
        $sql ="SELECT * FROM $tabela where id='$id' ";
        $retorno = $conexao->query($sql);
        
        if($registro = $retorno->fetch_array())
            {
            
                $foto = $registro["foto"];   
                
            }   

        echo ' <img height="100px" width="100px" src="data:image/jpg;base64,' .  base64_encode($foto)  . '" /> ';
    }  
    function getImagem2($tabela, $id, $conexao)
    {
        $sql ="SELECT * FROM $tabela where id='$id' ";
        $retorno = $conexao->query($sql);
        
        if($registro = $retorno->fetch_array())
            {
            
                $foto = $registro["foto"];   
                
            }   

        echo ' <img height="50px" width="50px" src="data:image/jpg;base64,' .  base64_encode($foto)  . '" /> ';
    }    

?>    



