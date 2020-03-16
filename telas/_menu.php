<?php
  $arrayMenu = [
    "Secretaria" => '<i class="fas fa-columns"></i>',
    "Setor" =>'<i class="fas fa-book-open"></i>',
    "Evento" => '<i class="fas fa-globe-asia"></i>',
  ];

  //echo $_SERVER['REQUEST_URI'];
  $url = explode('/', $_SERVER['REQUEST_URI']);
  //var_dump($url);
  $paginaAtual = $url[count($url)-1];
  $paginaAtual = str_replace('.php', '', $paginaAtual);
  //echo $paginaAtual;
?>

<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="w3-sidebar w3-bar-block w3-animate-left" style="width:265px;display:none;z-index:5" id="mySidebar">
<br><br><br>
  <?php
    // Laço de repetição para exibir menu
    foreach($arrayMenu as $menu => $icone) {
      // verificar qual a página atual e selecionar menu como ativo
      if (strtoupper($menu) == strtoupper($paginaAtual)){
        $active = "active";
      } else {
        $active = "";
      }
      ?>
    
      <a href="<?php echo "{$menu}.php" ?>" class="w3-bar-item  w3-button w3-large abbr<?php echo $active ?>">
        <span>
          <?php echo $icone ?>
        </span>
        <strong>
          <?php echo $menu ?>
        </strong>
      </a>

      <?php
    }
  ?>
</div>
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>


<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
   
</body>
</html> 
