<!DOCTYPE html>
<html >

	
	<head>
		
		<title>Pagina de Login</title>
		
		<meta charset="utf-8">
  	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- css proprio -->
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>	
	<body >
		<!-- as tabelas agora são grid do bootstrap -->
		<!-- pesquise sobre isso, tem na documentaçaõ do bootstrap -->

		<div class="container-fluid">
				<!-- row é uma classe de linha do bootstrap -->
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
									<form method="POST">
											<input type="text" name="email" placeholder="Digite seu email" required>
											<input type="password" name="senha" placeholder="Digite sua Senha" required>
											<button type="submit" class="btn btn-success">Login</button>
									</form>
								</div>
							</li>
						</div>				
					</ul>
				</div> 		
				<!-- 
					<div  id="login" class="col-6">
						
						<form method="POST">
                                <input type="text" name="email" placeholder="Digite seu email" required>
                                <input type="password" name="senha" placeholder="Digite sua Senha" required>
                                <button type="submit" class="btn btn-success">Login</button>
                            </form>
                        </div> 
                -->

				




				<!-- justify-content-center justifica o conteudo ao centro -->
				<div id="main"  class="row justify-content-center">
					<div id="cadastrar" >
						
						<center>
							<h2>Criar uma nova conta</h2>
							<h5>É gratuito e sempre será</h5>
							
							<div class="form-group">

								<!-- formulario para cadastrar um novo usuario -->
								<!-- O action="cadastrar.php" leva para a pagina cadastrar,php mantendo os dados do $_POST -->
								<form method="post" action="cadastrar.php">
									<div class="row">
											<div class="col-6">
												<input class="form-control" type="text" name="nome" placeholder="Nome" required>
											</div>
											<div class="col-6">
												<input class="form-control" type="text" name="sobrenome" placeholder="Sobrenome" required><br>
											</div>
									</div>

									<input class="form-control" type="text" name="email" placeholder="Email" required><br>
									<input class="form-control" type="password" name="senha" placeholder="Nova senha" required><br>
									
									<div>
										<div class="row">
											<div class="col-7">
												<center><label><h4>Data de nascimento</h4></label></center>	
											</div>
											<div class="col-5">
												<center><h4>Sexo</h4></center>
											</div>
										</div>	
									</div>
									
									
									<!-- div dos selects e radios do cadastrar -->
									<div class="row ">
										<div class="col-7">
											<input class="form-control" type="date" name="dataNascimento"  >
										</div>

										<div class="col-5">
											<div>
												<div class="row ">
													<div class="col-6">
														<label>Feminino</label>
														<input class="" type="radio" name="sexo" value="feminino" required>
													</div>
													<div class="col-6">
														<label>Masculino</label>
														<input class="" type="radio" name="sexo" value="masculino" required>
													</div>
												</div>
											</div>
												
												
										</div>
										<div>
											<br>
											<p>Ao clicar em Inscreva-se, você concorda com nossos Termos, Política de Dados e Política de Cookies. 
												Você pode receber notificações por SMS e pode cancelar isso quando quiser.
											</p>
										</div>	
										
									</div>
									
									<br><button type="submit" class="btn btn-danger">Inscrever-se</button>
									
									
									

									
								</form>
							</div>
						</center>
					</div>
				</div>
			
				<div class="row">
					<div id="footer" class="col-12">
							<footer >
								<center>Todos os direitos reservados @NoCopyCoolPet</center>
							</footer>
					</div>
				</div>
				
			
			
				<!-- Acho que esta pronto, mas tenho que ver o layout ainda
					proximo passo: criar e conectar a um banco de dados
				-->
	
	
	
	
	
		</div> 

		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
	</body>
</html>