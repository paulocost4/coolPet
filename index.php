<!DOCTYPE html>
<html >

	
	<head>
		
		<title>CoolPet</title>
		
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
				
			
			<!-- Topo -->
			<?php
				//a variavel de configuração do banco é $conexao
				include_once "topoLogin.php";
			?>		

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
								
								
								<!-- div dos 4s e radios do cadastrar -->
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
		
				
				
			
			
				
			<!-- Footer -->
			<?php
				include_once "rodape.php";
			?>
		</div> 

		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
	</body>
</html>

