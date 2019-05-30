<?php
// Para nao exibir alertas
error_reporting(1);

// verificação de envio
if ( $_POST != NULL) {

	// conectar-se ao banco de dados
	$con = new mysqli ("localhost", "root", "", "coolpet");

	//existe erro de conexão?

	if ($con -> connect_errno) {
		echo "Erro ao se conectar";
	}

	//obtenção de dados digitados
	$nome = $_POST["nome"];
	$sexo =$_POST["sexo"];
	$idade = $_POST["idade"];
	$raca = $_POST["raca"];
	$altura = $_POST["altura"];
	$porte = $_POST["porte"];
	$cor = $_POST["cor"];
	$pelagem = $_POST["pelagem"];

	//comando sql
	$sql="INSERT INTO animais (nome, sexo, idade, raca, altura, porte, cor, pelagem) VALUES ('$nome', '$sexo', '$idade', '$raca', '$altura', '$porte', '$cor', '$pelagem')";

	// executa sql no banco de dados
	$retorno = $con  -> query ($sql);

	// verificação de cadastro

	if ($retorno=true){
		echo "<script>alert('Aluno cadastrado')
			 </script>";		 
	}else{
		echo "<script>alert ('Aluno não cadastrado')
			 </script>";
	}


} 
	include_once "topo.php";
?>

<!DOCTYPE html>
<html>
	<head>



		<title>CoolPet</title>
		<meta charset="utf-8">
		<!-- css proprio -->
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	<body>

		<div class="content-fluid">
			<div id="mainCadastrarAnimal" class="row justify-content-center">
					
					<div class="form-group">
							<b><center><h1>Cadastre seu Pet</h1></b><br><br>
								<table border="0" width="500px" height="250px" >
									<tr>
										<td colspan="2"><img width="500px" height="125px" src="imagens/imagemcadastrar1.jpg"></td>
										
									</tr>
									<tr>
										<td>
										<center><input type="radio" name="tipo" value="gato" required></td></center>
										<td>
										<center><input type="radio" name="tipo" value="cachorro" required></td></center>
									</tr>
								</table>
							<form method="post">
								
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
								<input type="text" class="form-control" name="altura" required><br><br>
					
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
					
								<button type="submit" class="btn btn-danger">Enviar</button>
					
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
