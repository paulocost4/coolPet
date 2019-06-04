<?php 
  session_start();
  echo " hahahahahah   logado = " . $_SESSION["logado"];
  echo " hahahahahah   id = " . $_SESSION["id"];
  echo " hahahahahah   nome = " . $_SESSION["nome"];
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
      #rightCol{
            position: absolute;
            top: 146px;
            right: 9px;
      }
      
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
           <p class="w3-center">
            <b>
                <?php 
                  include_once "conexao_bd.php";
                  include_once "getImagem.php";
                  getImagem("usuario", $_SESSION["id"], $conexao); 
                ?>
              </b>
           </p>
           <hr> <!-- style="height:106px;width:106px" -->
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
      
      <!-- POSTS -->
      
      <?php
        $idPessoa = $_GET["idPessoa"];
        //$id = $_SESSION['id'];
        include_once "conexao_bd.php";
        //sql pra recuperar os posts de um perfil
        $sql = "SELECT u.id, u.foto, p.hora, p.imagem, u.nome, pu.idUsuario, pu.idPost, p.texto 
        from usuario as u
        inner join post_usuario as pu
        INNER JOIN post as p 
        on u.id = pu.idUsuario and 
        pu.idPost = p.id 
        where u.id = $idPessoa
        ORDER BY p.hora";
        
        $retorno = $conexao->query($sql);
        
        if ($retorno==false) {
          echo "deu falso" . $conexao->error;
        }
        while($registro = $retorno->fetch_array())
        {   
            $fotoUsuario = $registro["foto"];
            $nome = $registro["nome"];
            $texto = $registro["texto"];
            $fotoPost = $registro["imagem"];
            $hora = $registro["hora"];
             
            echo '
        <div class="w3-col m6" id="mainCol">
          <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <img class="w3-left w3-circle w3-margin-right" style="width:60px" height="50px" width="50px" src="data:image/jpg;base64,' .  base64_encode($fotoUsuario)  . '" />
            <span class="w3-right w3-opacity">'.$hora.'</span>
            <h4>'.$nome.'</h4><br>
            <hr class="w3-clear">
            <img style="width:100%" class="w3-margin-bottom"  src="data:image/jpg;base64,' .  base64_encode($fotoPost)  . '" />
            <p>'.$texto.'</p>
            <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
            <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
          </div>
        </div>
        ';
            
        }
        
//
        

      ?>
      
      
      <!-- Right Column -->
      <div class="w3-col m3" id="rightCol">
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

  <?php include_once "rodape.php"; ?>