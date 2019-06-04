

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
<?php include_once "topo.php";?>

<!DOCTYPE html>
<html><center>
	<head>
		<title>CoolPet</title>
		<meta charset="utf-8">
	</head>
	<body><br><br><br>
		<form method="POST">
		Procurar amigo
		<input type="text" name="filtro">
		<input type="submit" value="ok"><br>
		</form>
		<br><br><br>
		<table border="0" width="50%" >
			<tr>
				<th colspan="2">Nome</th>
			</tr>
			<?php
			$sql = "SELECT * 
			        FROM amigo
			        $filtro_sql";
			$retorno = $con -> query ($sql);

			while ($registro = $retorno -> fetch_array() ){
				$id = $registro["id"];
				$nome = $registro["nome"];
				$sobrenome = $registro["sobrenome"];
				
				echo "<tr>
						<td><a href='perfil.php?id=$id'> $nome $sobrenome </a></td>
						<td><a onclick=return confirm(\"Deseja excluir amigo ?\") href='excluiramigo.php?id=$id'> excluir </a></td>
						</tr>";
			}		
			?>
		</table>
	</body>
</html>	<br><br><br><br><br><br><br><br><br><br>
<?php include_once "rodape.php";?>