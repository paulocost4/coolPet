<?php  
    
    
    //session_start();
    

    if ($_POST!=NULL && $_session["logado"]==NULL ) {
        include_once "conexao_bd.php";
        $email=$_POST["email"];
        $senha=$_POST["senha"];
        echo"******* TESTE *******";
        //logar definido em conexa_bd.php
        //inicia a sessão 
        logar($email, $senha, $conexao);
        
        header("location: feed.php");
    }

    

    
    
    
    


?>