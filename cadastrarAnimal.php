
<?php 
	
	//************* Cadastrar a foto do animal *************/
	session_start();
	include_once "conexao_bd.php";
	

	
	echo "O id é: " . $_SESSION["id"] . "***";
	 
	
	//add o arquivo php que pega a foto
	include_once "uploud.php";
	
	

	echo "o id do animal é: " . $_SESSION["aux"]; 
	

	//se a variavel de arquivo estiver cadastrada, chama a função pra pegar a foto
	/* 
	
	if ($_FILES["foto"]!=NULL  ){	
		echo"hahahahahhahah";	
		$idAnimal = $_SESSION["aux"];
		if ($idAnimal==0) {
			//header("location: cadastrarAnimal.php");	
		}
		else
		{
			getFoto($idAnimal, "animais", "feed.php", $conexao);	
		}
		
		
		

		
		//getFoto($idAnimal, "animais", "feed.php", $conexao);	
	}
	
	*/
	
    
	

	// *********** Cadastrar animal ***********


	if($_POST!=NULL) 
  {
		echo " hahahahahah   logado = " . $_SESSION["logado"];
		echo " hahahahahah   id = " . $_SESSION["id"];
	
        // conectar-se ao banco de dados
        include_once "conexao_bd.php";
        //$_SESSION["logado"] = "ok";
        //echo " @ logado = " . $_SESSION["logado"];
        //existe erro de conexão?
    
        
    
        //obtenção de dados digitados
        $nome = $_POST["nome"];
        $tipo = $_POST["tipo"];
        $sexo =$_POST["sexo"];
        $idade = $_POST["idade"];
        $raca = $_POST["raca"];
        $tamanho = $_POST["tamanho"];
        $porte = $_POST["porte"];
        $cor = $_POST["cor"];
        $pelagem = $_POST["pelagem"];
    
        //comando sql
        $sql="INSERT INTO animais (nome, tipo, sexo, idade, raca, tamanho, porte, cor, pelagem) VALUES ('$nome', '$tipo' '$sexo', '$idade', '$raca', '$tamanho', '$porte', '$cor', '$pelagem')";
        
        // executa sql no banco de dados
        $retorno = $conexao->query($sql);
    
        // verificação de cadastro
    
		if ($retorno==true)
		{	
			echo "<br> *** Entrou *** <br>";
            $sql2 = " SELECT * FROM animais
                    where nome = '$nome'
                    AND idade = '$idade'
                    AND cor ='$cor'";
			
			$retorno = $conexao->query($sql2);
                    
            if($registro = $retorno->fetch_array())
            {
				$id_animal=$registro["id"];
				echo" id_animal =  " . $id_animal;
				$id = $_SESSION['id'];
				$idPessoa = $_SESSION["id"];
				$sql3 = "UPDATE animais SET idUsuario = '$id' where id='$id_animal' ";
				$retorno = $conexao->query($sql3);
				if ($retorno==true) {
					
					$_SESSION["aux"] = $id_animal;
					//session_abort();
						getFoto($id_animal, "animais", "feed.php", $conexao);
					echo "<script>
					alert('Animal cadastrado com sucesso!');
					
					</script>";
				}
				else{
					echo " <script>
						alert ('Animal não cadastrado!');
						
					</script>";
					//window.location.href = 'cadastrarAnimal.php';
					echo "Erro: " . $conexao->error;
				}
			
			}
            

			
		} //fim do if de cadatrar o animal
		else {
			echo "Erro: " . $conexao->error;
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
