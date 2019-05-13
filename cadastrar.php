<?php
		
		
		if($_POST!=NULL)
		{   
            //inclui o arquivo de configuração
			include_once("conf.php");

			

			$nome = $_POST["nome"];
			$sobrenome = $_POST["sobrenome"];
			$email = $_POST["email"];
			$senha = $_POST["senha"];
			$dataNascimento = $_POST["dataNascimento"];
			$sexo = $_POST["sexo"];
			
			if ($nome =="" || $sobrenome =="" || $email=="" 
			|| $senha=="" || $dataNascimento=="" || $sexo=="") 
			{
				echo"
					<script>
						alert('Digite todos os campos!');
					</script>
				";
			}
			

			$sql = "INSERT into usuario (nome, sobrenome, email, senha, dataNascimento, sexo)
			VALUES('$nome', '$sobrenome', '$email', '$senha', '$dataNascimento', '$sexo')";
			
			$retorno = $con->query($sql);



			if ($retorno == TRUE) {
				echo "	
					<script>
						alert('Cadastrado com sucesso!');
					</script>
				";
			}
			else 
			{
				echo "<script>
						alert('Erro ao Cadastrar!');
					</script>";
				echo $con->error;
			}


        }
        else {
            //se tentar entrar na pagina de cadastro sem fazer o login, ela redireciona para o login.php
            //header('Location: Login.php');
        }
?>

<!DOCTYPE html>
<html >

	
	<head>
		
		<title>Cadastrar</title>
		
		<meta charset="utf-8">
  	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- css proprio -->
        <link rel="stylesheet" type="text/css" href="style.css">


        <style>
        
            
            
        
        </style>
	</head>	
	<body >
		<!-- as tabelas agora são grid do bootstrap -->
		<!-- pesquise sobre isso, tem na documentaçaõ do bootstrap -->

		<div class="container-fluid">
            <div class="row">
                <ul id="banner" class="nav">
                        <div class="col-6">
                                <li id="navItem" class="nav-item">
                                    <a class="nav-link active" href="login.php"><img class="" src="imagens/camera22.png" height="65px" width="100px" alt="CoolPet"></a>
                                </li>
                                <li class="nav-item">
                                    <a id="navItem2" class="nav-link active" href="login.php"><h1><b>CoolPet</b></h1></a>
                                </li>
                        </div>     
                </ul>	
            </div>
                
	
	
	
		</div> 

		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
	</body>
</html>

