<?php
    session_start();
    if(!isset($_SESSION['iduser'])){
      unset($_SESSION['iduser']);
      header("location:../index.php");
    } 
    $id = $_GET['id'];
    
    include('crud.php');
    $con = new Crud;

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $lon = $_POST['lon'];
    $lat = $_POST['lat'];

    $con->update("contato","nome = ?, telefone = ?, lon = ?, lat = ?","where id = ?",array($nome,$telefone,$lon,$lat,$id));
    header("location: ../frontend/pesquisar.php");
  