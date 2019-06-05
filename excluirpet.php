<?php 
error_reporting(1);

$con = new mysqli ("localhost", "root", "", "coolpet");

	//existe erro de conexão?
	
	if ($con -> connect_errno) {
		echo "Erro ao se conectar";
	}
			

$id = $_GET ["id"];

$sql = "DELETE FROM animais
		WhERE id=$id";

$excluiu = $con -> query ($sql);

if($excluiu = true){
	echo "<script> alert ('Amigo Excluido');
		location.href = 'listarpet.php';
		</script> ";
}else {
	echo "<script> alert ('Erro ao excluir amigo');
		location.href = 'listarpet.php';
		</script> ";
}


?>