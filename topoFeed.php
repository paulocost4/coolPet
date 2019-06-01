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
                    
                    
            <ul id="bannerLogo" class="nav">
                <!-- Divide a nav em 2 colunas usando o grid  -->
                
                <div class="col-6">
                    <li id="navItem" class="nav-item">
                        <a class="nav-link active" href=""><img class="" src="imagens/camera22.png" height="65px" width="100px" alt="CoolPet"></a>
                    </li>
                    <li class="nav-item">
                        <a id="navItem2" class="nav-link active" href=""><h1><b>CoolPet</b></h1></a>
                    </li>
                </div>
                <div class="col-6 justify-content-end">                     
                    <li>    
                        <div id="navItem3" >
                            <form method="POST" action="">
                                    <div class="form-group">
                                        <input size="30px" type="text" name="pesquisar" placeholder="O que você quer encontrar?" required>
                                        <button type="submit" class="btn btn-success">Pesquisar</button>
                                    </div>    

                                    
                            </form>
                        </div>
                    </li>
                    
                </div>              
            </ul>
        </div> 
        <div class="row" id="nav">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a style="color: snow" class="nav-link " href="feed.php">Home</a>
                </li>
                <li class="nav-item">
                        <a style="color: snow" class="nav-link" href="perfil.php">Perfil</a>
                        </li>
                <li class="nav-item dropdown">
                    <a style="color: snow; background-color: #006400" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opção</a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    <a class="dropdown-item" href="#">A ser implementado</a>
                    <a class="dropdown-item" href="#">A ser implementado</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">A ser implementado</a>
                    </div>
                </li>
                    
                    
            </ul>
        </div>
                
                

                <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>    

		


