<?php 
  session_start();
 
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
            <hr>
           <div style="background: lightgrey">
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><b><?php echo $_SESSION["nome"]; ?></b></p>
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"><b></i>Data:
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

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br>
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
        $aux=1;
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
            
            if($aux==1)
            {
              $aux="0";
              echo '
                <div class="w3-col m6" id="mainCol">
                  <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
                    <img class="w3-left w3-circle w3-margin-right" style="width:100px" height="100px" width="100px" src="data:image/jpg;base64,' .  base64_encode($fotoUsuario)  . '" />
                    <span class="w3-right w3-opacity">'.$hora.'</span>
                    <h4>'.$nome.'</h4><br>
                    <hr class="w3-clear">
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>Adicionar amigo</button>  
                  </div>
                </div>
                ';
              
            }

            echo '
        <div class="w3-col m6" id="mainCol">
          <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <img class="w3-left w3-circle w3-margin-right" style="width:60px" height="50px" width="50px" src="data:image/jpg;base64,' .  base64_encode($fotoUsuario)  . '" />
            <span class="w3-right w3-opacity">'.$hora.'</span>
            <h4>'.$nome.'</h4><br>
            <hr class="w3-clear">
            <img style="width:100%" class="w3-margin-bottom"  src="data:image/jpg;base64,' .  base64_encode($fotoPost)  . '" />
            <p>'.$texto.'</p>
            <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom" href"curtir.php"><i class="fa fa-thumbs-up"></i>  Like</button> 
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
        </div>
        <br>
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