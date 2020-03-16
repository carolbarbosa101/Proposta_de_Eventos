<?php
 include_once("_menu.php");
?>
<!DOCTYPE html>
<html lang="pt-br">


  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="<?php echo URL ?>View/css/estilos.css"> 

    <!-- Icones CSS -->
    <link rel="stylesheet" href="<?php echo URL ?>View/css/icones.css"> 

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    

    <!--Import materialize.css
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>-->


    <title>Proposta Evento</title>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #2362bd;">
      <div class="container">
        <div style="width:100%; text-align:center;">
          <h2 style="color:white;">Celendário de Ações e Eventos do MCTIC 2020</h2>
        </div>
      </div>
    </nav>
    

    
    <style>
      iframe {
      width: 100% !important;
      height: 90vh !important;
      }
    </style>
  </head>
  <body>
  
    <!-- Cabeçalho <span class="glyphicon glyphicon-menu-hamburger" style="font-size:40px;cursor:pointer" onclick="openNav()">&nbsp&#9776; </span>-->
    <header id="header">
    <div>
        <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
       </div>
      <!-- Menu de navegação -->
      <?php 
      
      //header("Content-Type: text/html; charset=ISO-8859-1",true);
      
      ?>
      
    </header>
    