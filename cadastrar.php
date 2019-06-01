<?php
		include_once "conexao_bd.php";
		//add o arquivo php que pega a foto
		include_once "uploud.php";
		session_start();
		echo " *** Files está setado? " . isset($_FILES) . "***<br>";
		echo "O id é: " . $_SESSION["id"] . "*** <br>";

		//se a variavel de arquivo estiver cadastrada, chama a função pra pegar a foto
		if (isset($_FILES)) {
			echo"Pauloooooooooooooo";
			getFoto($_SESSION["id"], "usuario", "cadastrarAnimal.php", $conexao);
		}
		


		if($_POST!=NULL)
		{   
            
			//a variavel de configuração do banco é $conexao
			
			

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
			


			$retorno = $conexao->query($sql);



			if ($retorno == TRUE) {
				echo "	
					<script>
						alert('Cadastrado com sucesso!');
					</script>
				";
				
				//função logar definida em conexão_bd.php
				logar($email, $senha, $conexao);
				$_SESSION["cadastrado"] = "not";
				
				
				

			}
			else 
			{
				echo "<script>
						alert('Erro ao Cadastrar!');
					</script>";
				echo $conexao->error;
			}


        }
        else {
            //se tentar entrar na pagina de cadastro sem fazer o login, ela redireciona para o login.php
            //header('Location: index.php');
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
		<div class="container-fluid">
			<!-- Topo -->
			<?php
				include_once "topo.php";
			?>

			<div id="main" class="row justify-content-center">
				<div id="cadastrar">
					<center>
						<h2>Cadastre uma foto sua</h2>
						<div>
							<img src="imagens/user.png" alt="icone de usuario">
						</div>
						<div class="form-group">
							<br>
							<form action="cadastrar.php" enctype="multipart/form-data" method="POST">
								<input type="file" name="foto" >
								<center>
									<br>
									<button type="submit"  class=" btn btn-danger">Prosseguir</button>
								</center>
							</form>
							
						</div>
					</center>
					
				</div>
			</div>



			<!-- Footer -->
			<?php
				include_once "rodape.php";
			?>
		</div>
		
		

		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
	</body>
</html>

