<!-- Topo para a pagina inicial com o login -->
<!DOCTYPE html>
<html >
	<head>
		
		<title></title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- css proprio -->
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>	
	<body >
		<!-- as tabelas agora são grid do bootstrap -->
		<!-- pesquise sobre isso, tem na documtaçaõ do bootstrap -->

		<div class="row">
                    
                    
                    <ul id="banner" class="nav">
                        <!-- Divide a nav em 2 colunas usando o grid  -->
                      
                        <div class="col-6">
                            <li id="navItem" class="nav-item">
                                <a class="nav-link active" href="login.php"><img class="" src="imagens/camera22.png" height="65px" width="100px" alt="CoolPet"></a>
                            </li>
                            <li class="nav-item">
                                <a id="navItem2" class="nav-link active" href="login.php"><h1><b>CoolPet</b></h1></a>
                            </li>
                        </div>
                        <div class="col-6 justify-content-end">                     
                            <li>    
                                <div id="navItem3" >
                                    <form method="POST" action="feed.php">
                                            <div class="form-group">
                                                <input type="text" name="email" placeholder="Digite seu email" required>
                                                <input type="password" name="senha" placeholder="Digite sua Senha" required>
                                                <button type="submit" class="btn btn-success">Login</button>
                                            </div>    

                                            
                                    </form>
                                </div>
                            </li>
                        </div>              
                    </ul>
                </div> 


    </body>    

		


