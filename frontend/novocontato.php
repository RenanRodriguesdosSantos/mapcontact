<?php
    session_start();
    if(!isset($_SESSION['iduser'])){
        unset($_SESSION['iduser']);
        header("location:../index.php");
      }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Map Contact</title>
    <link rel="stylesheet" href="styles/ol.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/novo.css">
    <script src="scripts/ol.js"></script>
</head>
<body>
  <div id="cabecalho">
    <nav id="menu">
      <div id="titulo">
        <h1>Map Contact</h1>
      </div>
      <div id="menus">
        <ul type="disc">
          <li><a href="map.php"> Mapa </a></li>
          <li><a href="#"> Novo </a></li>
          <li><a href="pesquisar.php"> Pesquisar </a></li>
          <li><a href="sobre.php"> Sobre </a></li>
        </ul>
      </div>
    </nav>
  </div>
  <form action="../backend/salvar.php" method="post">
    <div class="form-group" id="formulario">
      <div class="formula">
        <label for="nome">Nome: </label><input type="text" class="form-control" required="true" name="nome" required="true" id="nome" placeholder="Nome do contato.">
      </div>
      <div class="formula">
        <label for="telefone">Telefone: </label><input type="tel" class="form-control" required="true" name="telefone" required="true" id="telefone" placeholder="Número do telefone.">
      </div>
      <div class="formula">
        <label for="lon">Longitude: </label><br><input type="text" class="form-control" required="true" name="lon" required="true" id="lon" readonly placeholder="Selecione no mapa.">
      </div>
      <div class="formula">
        <label for="lat">Latitude: </label><br><input type="text" class="form-control" required="true" name="lat" id="lat" readonly placeholder="Selecione no mapa.">
      </div>
      <div class="formula">
        <input type="submit" value="Salvar">
      </div>
    </div>
  </form>
  <div id="map"></div>
  <div style="display: none;"></div>
  <div id="mouse-position"></div>
  <script>
    var nome = document.getElementById('nome');
    var telefone = document.getElementById('telefone');
    var lon = document.getElementById('lon');
    var lat = document.getElementById('lat');
  </script>
  <script src="scripts/novo.js"></script>
</body>
</html>