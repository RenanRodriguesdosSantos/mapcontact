<?php
    session_start();
    if(!isset($_SESSION['iduser'])){
        unset($_SESSION['iduser']);
        header("location:../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Map Contact</title>
    <link rel="stylesheet" href="styles/sobre.css">
</head>
<body>
<div>
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
          <li><a href="#"> Sobre </a></li>
        </ul>
      </div>
    </nav>
    </div>
    Plataforma desenvolvida para que o usuário possa salvar seus contatos, marcando sua localização no mapa, e assim
    podendo visualiza-los no mapa quando quiser.
    </div>
    <div> Para inserir um novo contato: </div>

    <div> Para visualizar um contato:</div>

    <div> Para atualizar um contato:</div>

    <div> Para deletar um contato:</div>

    <div> Para visualizar o mapa:  </div> 
</body>
</html>


