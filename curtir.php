<?php

$id = $_GET['id'];
 	
$adiciona =" INSERT INTO curtidas (id_post) 
			 VALUES ('idPost')";
if(mysql_query($adiciona)){
	echo "<script> windows.hisotory.back</script>"
}else{
	echo "Erro ao curtir"
}





 ?>