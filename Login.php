<!DOCTYPE html>
<html >
	<head>
		
		<title>Pagina de Login</title>
		
		<meta charset="utf-8">
  	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		

		<style>
			
			h1{
				color: whitesmoke;
			}
			#banner{
				height: 65px;
				background-color: #006400;
			}
			#main
			{
				height: 600px;
				background-color: #DCDCDC;
			}
			#cadastrar{
				
				height: 500px;
				width: 600px;
			}
			#footer{
				font-size: 10px ; 
				background-color: #006400; 
				height: 30px; 
				color: whitesmoke;
				width: 100%;
			}
			
		</style>

	</head>	
	<body >
		<!-- as tabelas agora são grid do bootstrap -->
		<!-- pesquise sobre isso, tem na documentaçaõ do bootstrap -->

		<div id="banner" class="container-fluid">
				<!-- row é uma classe de linha do bootstrap -->
				<div class="row">
					<!-- col-numero é uma classe de colunas do bootstrap -->
					<!-- o numero varia de 1 a 12 -->
					<div  class="col-6 ">
						<!-- justify-content-right justifica o codigo a direita -->
						<div class="row justify-content-right">
							<div class="col-2 "><img class="h-100" src="imagens/camera22.png" height="65px" width="100px" alt="CoolPet"></div>
							<div class="col-4 "><h1><b>CoolPet</b></h1></div>
						</div>
									
					</div>
					
					
					
					
					<div  id="login" class="col-6">
						<!-- formulario de login -->
						<form method="POST">
							<input type="text" name="id" placeholder="Digite seu Login" required>
							<input type="password" name="senha" placeholder="Digite sua Senha" required>
							<button class="btn btn-success">Login</button>
						</form>
					</div>
				</div>
				<!-- justify-content-center justifica o conteudo ao centro -->
				<div id="main"  class="row justify-content-center">
					<div id="cadastrar" >
						
						<center>
							<h2>Criar uma nova conta</h2>
							<h5>É gratuito e sempre será</h5>
							
							<div class="form-group">
								<!-- formulario para cadastrar um novo usuario -->
								<form method="post">
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
											<center><label><h4>  Data de nascimento</h4></label></center>	
											</div>
										</div>	
									</div>
									
									
									<!-- div dos selects e radios do cadastrar -->
									<div class="row ">
										<div class="col-2	">	
											<select class="custom-select" name="diaNascimento" required>
												<!-- php pra exibir os 31 dias do mês no select -->
												<?php
													for($i=1;$i<=31;$i=$i+1)
													{
														echo "<option value='$i'>$i</option>";
													}
												?>
											</select>
										</div>
										<div class="col-2">
											<select class="custom-select" name="mesNascimento" required>
												<!-- php pra exibir os 12 meses do ano -->
												<?php
													for($i=1;$i<=12;$i=$i+1)
													{
														echo "<option value='$i'>$i</option>";
													}
												?>
											</select>
										</div>
										<div class="col-3">
											<select class="custom-select" name="anoNascimento req" required>
												<!-- php pra exibir os anos de 2019 até 1950 -->
												<?php
													for($i=2019;$i>=1950;$i=$i-1)
													{
														echo "<option value='$i'>$i</option>";
													}
												?>	<br>	
											</select>
										</div>

										<div class="col-5">
											<div>
												<div class="row ">
													<div class="col-6">
														<label>Feminino</label>
														<input class="" type="radio" name="sexo" value="feminino" required>
													</div>
													<div class="col-6">
														<lable>Masculino</lable>
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
									
									
									
									
									

									<br><button class="btn btn-danger">Inscrever-se</button>
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
				
			
			
	
	
	
	
	
	
		</div> 

		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
	</body>
</html>