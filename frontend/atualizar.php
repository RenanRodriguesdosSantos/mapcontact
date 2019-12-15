<?php
    session_start();
    if(!isset($_SESSION['iduser'])){
        unset($_SESSION['iduser']);
        header("location:../index.php");
    }
    include("../backend/crud.php");
    $con = new Crud;
    $result = $con->select("contato"," * ", "where id = ?",array($_GET['id']));
    $row = $result->fetch();
    $nome = $row['nome'];
    $telefone = $row['telefone'];
    $lon = $row['lon'];
    $lat = $row['lat'];
    $iduser = $row['iduser'];
    $id = $row['id'];
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
    <script src="scripts/contato.js"></script>
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
          <li><a href="novocontato.php"> Novo </a></li>
          <li><a href="pesquisar.php"> Pesquisar </a></li>
          <li><a href="sobre.php"> Sobre </a></li>
        </ul>
      </div>
    </nav>
  </div>
  <form action="../backend/update.php<?php echo "?id=$id;"?>" method="post">
    <div class="form-group" id="formulario">
      <div class="formula">
        <label for="nome">Nome: </label><input type="text" class="form-control" required="true" name="nome" id="nome" placeholder="Nome do contato.">
      </div>
      <div class="formula">
        <label for="telefone">Telefone: </label><input type="tel" class="form-control" required="true" name="telefone" id="telefone" placeholder="Número do telefone.">
      </div>
      <div class="formula">
        <label for="lon">Longitude: </label><br><input type="text" class="form-control" required="true" name="lon" id="lon" readonly placeholder="Selecione no mapa.">
      </div>
      <div class="formula">
        <label for="lat">Latitude: </label><br><input type="text" class="form-control" required="true" name="lat" id="lat" readonly placeholder="Selecione no mapa.">
      </div>
      <div class="formula">
        <input type="submit" value="Atualizar">
        <form action="pequisar.php"><input type="submit" value="Cancelar"></form>
      </div>
    </div>
  </form>
   <?php 
        echo "<script>";
        $contato = "var contato = new Contato('$nome','$telefone',$lon,$lat,$iduser);";
        echo $contato;
        echo "</script>";
    ?>
      <div id="map"></div>
      <div id="mouse-position"></div>
      <script>
        var nome = document.getElementById('nome');
        var telefone = document.getElementById('telefone');
        var lon = document.getElementById('lon');
        var lat = document.getElementById('lat');
        nome.value = contato.getNome();
        telefone.value = contato.getTelefone();
        lon.value = contato.getLon();
        lat.value = contato.getLat();
      </script>
      <script src="scripts/novo.js"></script> 
</body>
</html>