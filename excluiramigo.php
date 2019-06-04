<?php 
error_reporting(1);

$con = new mysqli ("localhost", "root", "", "coolpet");

	//existe erro de conexão?
	
	if ($con -> connect_errno) {
		echo "Erro ao se conectar";
	}
			

$id = $_GET ["id"];

$sql = "DELETE FROM amigo
		WhERE id=$id";

$excluiu = $con -> query ($sql);

if($excluiu = true){
	echo "<script> alert ('Amigo Excluido');
		location.href = 'listaramigo.php';
		</script> ";
}else {
	echo "<script> alert ('Erro ao excluir amigo');
		location.href = 'listaramigo.php';
		</script> ";
}


?>