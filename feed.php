<?php 
  session_start();
  if ($_SESSION["logado"]=="ok") 
  {
    include_once "logar.php"; 
    
    
     
  }
  elseif ($_SESSION["logado"]!="ok") {
    echo  "<script>
            alert('Você deve fazer o login primeiro'); 
            window.location.href = 'index.php';   
          </script>";
  }
  else {
    echo  "<script>
            alert('Email ou senha incorreto'); 
            window.location.href = 'index.php';   
          </script>";
    
  }

  //função de postar
  
?>



  <?php include_once "topoFeed.php"; ?>
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
  <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
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
           <hr>
           <div style="background: lightgrey">
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><b><?php echo $_SESSION["nome"]; ?></b></p>
           
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><b> Varivel do com o nome do pet</b></p>
           <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"><b></i>   
            <script language="JavaScript">
                  var mydate=new Date()
                  var year=mydate.getYear()
                  if (year<2000)
                  year += (year < 1900) ? 1900 : 0
                  var day=mydate.getDay()
                  var month=mydate.getMonth()
                  var daym=mydate.getDate()
                  if (daym<10)
                  daym="0"+daym
                  var dayarray=new Array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado")
                  var montharray=new Array(" de Janeiro de "," de Fevereiro de "," de Março de ","de Abril de ","de Maio de ","de Junho de","de Julho de ","de Agosto de ","de Setembro de "," de Outubro de "," de Novembro de "," de Dezembro de ")
                  document.write(dayarray[day]+", "+daym+" "+montharray[month]+" "+ year+ " ")
                  document.write("</b></i></font>")
            </script>
            </b></p>
          </div>
          </div>
        </div>
        <br>
        
        <!-- Accordion -->
        <div class="w3-card w3-round">
          <div class="w3-white">
            
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
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <!-- End Left Column -->
      </div>
      
      <!-- Middle Column -->
      <div class="w3-col m7">
        
        <!-- Postar -->
        <div class="w3-row-padding">
          <div class="w3-col m12">
            <div class="w3-card w3-round w3-white">
              <div class="w3-container w3-padding">
                <center><h6 class="w3-opacity">Faça seu Post!</h6></center>
                <div class="form-group">
                  <form method="POST" enctype="multipart/form-data" action="postar.php">
                    <textarea  class="form-control" name="texto" rows="3" cols="50">No que você esta pensando?</textarea><br>
                    <center><h6 class="w3-opacity">Faça o uploud de sua foto</h6></center>
                    <input class="form-control" type="file" name="foto"><br>
                    <center><button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i> Postar</button></center> 
                  </form>
                </div>
                  
              
              
              
                </div>
            </div>
          </div>
        </div>
        
        <!-- Listar os posts 
        <?php
        
        /* $sql = "SELECT *  
                from usuario as u 
                INNER JOIN post_usuario as pu 
                INNER JOIN post as p
                ON u.id = pu.idUsuario AND p.id = pu.idPost
                "; */
        
          
        ?>
    
         -->
        
      <!-- End Middle Column -->
      </div>
      
      <!-- Right Column -->
      
        <br>
        
        
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


    


