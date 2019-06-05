


<?php 
    include_once "topoFeed.php";
 ?>
  <!DOCTYPE html>
  <html>
  <title>|Time |Line</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
  </style>
  <body class="w3-theme-l5">


  

  <!-- Page Container -->
  <div class="w3-container w3-content" style="max-width:1400px;margin-top:0px">    
    <!-- The Grid -->
    <div class="w3-row">
      <!-- Left Column -->
      <div class="w3-col m3">
        <!-- Profile -->
        <div class="w3-card w3-round w3-white">
          <div class="w3-container">
          <h4 class="w3-center"> <?php echo $_SESSION["nome"]; ?> </h4>
           <p class="w3-center"><p class="w3-center">
             <b>
              <?php 
                include_once "conexao_bd.php";
                include_once "getImagem.php";
               
                getImagem("usuario", $_SESSION["id"], $conexao); 
              ?>
            </b>
           <hr>
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><b> Varivel do com o nome do Pet</b></p>
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><b> Varivel do com o nome do Dono</b></p>
           <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><b> Cidade aonde mora </b></p>
           <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"><b></i> Data do dia</b></p>
          </div>
        </div>
        <br>
        
        <!-- Accordion -->
        <div class="w3-card w3-round">
          <div class="w3-white">
            <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
            <div id="Demo1" class="w3-hide w3-container">
              <p>Some text..</p>
            </div>
            <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
            <div id="Demo2" class="w3-hide w3-container">
              <p>Some other text..</p>
            </div>
            <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
            <div id="Demo3" class="w3-hide w3-container">
           <div class="w3-row-padding">
           <br>
             <div class="w3-half">
               <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
             <div class="w3-half">
               <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
             </div>
           </div>
            </div>
          </div>      
        </div>
        <br>
        
       
        <br>
        
        <!-- Alert Box -->
        <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
          <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
            <i class="fa fa-remove"></i>
          </span>
          <p><strong>Hey!</strong></p>
          <p>Seja Bem Vindo a CoolPet, Nossa rede social de pets!!!</p>
        </div>
      
      <!-- End Left Column -->
      </div>
      
      <!-- Middle Column -->
      <div class="w3-col m7">
        
        <!-- listar os resultados encontrados -->
        
        
        <!-- Listar os posts -->
        <div class="w3-container w3-card w3-white w3-round w3-margin">
            <br><center><h4>RESULTADO DA PESQUISA</h4></center>
            <hr class="w3-clear">
            <center>

            
                <?php
                    include_once "conexao_bd.php";
                    
                    //variavel get para pegar a pesquisa
                    $pesquisar = $_GET["pesquisar"];
                    $filtro = $pesquisar; 
                    
                    if ($_GET != NULL){
                        $filtro_sql = " WHERE id = '$filtro' 
                                    OR nome = '$filtro'
                                    OR sobrenome = '$filtro'
                                    OR email = '$filtro' ";
                                                    
                    }
                    
                    $sql = "SELECT * FROM usuario $filtro_sql ";
            
                    $retorno = $conexao->query($sql);
                    
                    while ($registro = $retorno -> fetch_array())
                    {   
                        $id = $registro["id"];
                        $nome = $registro["nome"];
                        $url = "perfil.php?idPessoa=" . $id;
                        
                      

                        echo '
                            '.getImagem("usuario", $id, $conexao) . '
                            <h4>'.$nome.'</h4><br>
                            <hr class="w3-clear">
                            <p>Sobre o perfil</p>
                            <a href="'.$url.'"><button type="button" class="w3-button w3-theme-d1 w3-margin-bottom">Ver perfil</button><a>
                        ';
                        //botão pra ver perfil ainda não implementado
                        //Quero colocar um imput invisivel que manda pro banco de dados como uma solicitação
                        //de amizade e que só vai pros amigos quando o outro usuario aceitar
                        //talvez seja necessario criar uma tabela solicitações de amizades 
                    }

                    //getRegistro($filtro_sql, $conexao);
                ?>
                
            </center>    
        </div>
        
        
        
        
          

         
        
      <!-- End Middle Column -->
      </div>
      
      <!-- Right Column -->
      <div class="w3-col m2">
        <div class="w3-card w3-round w3-white w3-center">
          <div class="w3-container">
            <p>Upcoming Events:</p>
            <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
            <p><strong>Holiday</strong></p>
            <p>Friday 15:00</p>
            <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
          </div>
        </div>
        <br>
        
        <div class="w3-card w3-round w3-white w3-center">
          <div class="w3-container">
            <p>Friend Request</p>
            <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
            <span>Jane Doe</span>
            <div class="w3-row w3-opacity">
              <div class="w3-half">
                <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
              </div>
              <div class="w3-half">
                <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
              </div>
            </div>
          </div>
        </div>
        <br>
        
        <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
          <p>ADS</p>
        </div>
        <br>
        
        <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
          <p><i class="fa fa-bug w3-xxlarge"></i></p>
        </div>
        
      <!-- End Right Column -->
      </div>
      
    <!-- End Grid -->
    </div>
    
    <?php include_once "rodape.php"; ?>
  <!-- End Page Container -->
  </div>
  <br>

  


  <script>
  // Accordion
  function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
      x.previousElementSibling.className += " w3-theme-d1";
    } else { 
      x.className = x.className.replace("w3-show", "");
      x.previousElementSibling.className = 
      x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
  }

  // Used to toggle the menu on smaller screens when clicking on the menu button
  function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }

  
  </script>

  </body>
  </html> 