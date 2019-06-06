

<?php
error_reporting(1);
$con = new mysqli ("localhost", "root", "", "coolpet");
	$filtro_sql = "";



	
	//existe erro de conexão?
	
	if ($con -> connect_errno) {
		echo "Erro ao se conectar";
	}

if ($_POST != NULL){
	$filtro = $_POST ["filtro"];

	$filtro_sql = " WHERE id = '$filtro' 
					OR nome LIKE '%$filtro%' ";					
}
?>
<?php include_once "topoFeed.php";?>

<!DOCTYPE html>
<html><center>
	<head>
		<title>CoolPet</title>
		<meta charset="utf-8">
	</head>
	<body><br><br><br>
		<form method="POST">
		Procurar pet
		<input type="text" name="filtro">
		<input type="submit" value="ok"><br>
		</form>
		<centar><a href="cadastrarAnimal.php">Cadastrar Pet</a>
		<br><br><br>
		<table border="0" width="80%" >
			<tr>
				<th>Nome</th>
				<th>Tipo</th>
				<th>Sexo</th>
				<th>Idade</th>
				<th>Raça</th>
				<th>Tamanho</th>
				<th>Porte</th>
				<th>Cor</th>
				<th>Pelagem</th>
			</tr></center>
			<?php
			$sql = "SELECT * 
			        FROM animais
			        $filtro_sql";
			$retorno = $con -> query ($sql);

			while ($registro = $retorno -> fetch_array() ){
				$id = $registro["id"];
				$nome = $registro["nome"];
				$tipo = $registro["tipo"];
				$sexo = $registro["sexo"];
				$idade = $registro["idade"];
				$raca = $registro["raca"];
				$tamanho = $registro["tamanho"];
				$porte = $registro["porte"];
				$cor = $registro["cor"];
				$pelagem = $registro["pelagem"];
				
				echo "<tr>
						<td> $nome </td>
						<td> $tipo </td>
						<td> $sexo </td>
						<td> $idade </td>
						<td> $raca </td>
						<td> $tamanho </td>
						<td> $porte </td>
						<td> $cor </td>
						<td> $pelagem </td>
						<td><a onclick=return confirm(\"Deseja excluir animal ?\") href='excluirpet.php'> excluir </a></td>
						<td><a onclick=return confirm(\"Deseja editar animal ?\") href='editarpet.php'> editar </a></td>
						</tr>";
			}		
			?>
		</table>
	</body>
</html>	<br><br><br><br><br><br><br><br><br><br>
<?php include_once "rodape.php";?>