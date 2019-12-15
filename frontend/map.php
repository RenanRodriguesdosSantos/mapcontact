<?php
  session_start();
  if(!isset($_SESSION['iduser'])){
    unset($_SESSION['iduser']);
    header("location:../index.php");
  }
    include("../backend/crud.php");
    $iduser = $_SESSION['iduser'];
    $conn = new Crud;
    $result = $conn->select("contato","*","where iduser = ?",array($iduser));

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Map Contact</title>
    <link rel="stylesheet" href="styles/ol.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/index.css">
    <script src="scripts/ol.js"></script>
    <script src="scripts/contato.js"></script>
    <?php
      $cont = 0;
      echo "<script>";
      echo "var contatos = [];";
      while($row = $result->fetch()){
        $id = $row['id'];
        $nome = $row['nome'];
        $telefone = $row['telefone'];
        $lon = $row['lon'];
        $lat = $row['lat'];
        echo "contato = new Contato('$nome','$telefone',$lon,$lat,$iduser);";
        echo "contatos[$cont] = contato;";
        $cont++;
      }
      echo "</script>";
    ?>
  </head>
  <body>
    <div id="cabecalho">
      <nav id="menu">
        <div id="titulo">
          <h1>Map Contact</h1>
      </div>
      <div id="menus">
         <ul type="disc">
            <li><a href="#"> Mapa </a></li>
            <li><a href="novocontato.php"> Novo </a></li>
            <li><a href="pesquisar.php"> Pesquisar </a></li>
            <li><a href="sobre.php"> Sobre </a></li>
        </ul>
      </div>
      </nav>
    </div>
    <div id="map" class="map"></div>
    <div style="display: none;"></div>
    <script src="scripts/main.js"></script>
    <?php
      if(isset($_GET['id'])){
        $idlocalizar = $_GET['id'];
        $result = $conn->select("contato","*","where id = ?",array($idlocalizar));
        $row = $result->fetch();
        $lon = $row['lon'];
        $lat = $row['lat'];
        echo "<script>visual($lon,$lat);</script>";
      }
    ?>
  </body>
</html>