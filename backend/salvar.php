<?php
session_start();
if(!isset($_SESSION['iduser'])){
    unset($_SESSION['iduser']);
    header("location:../index.php");
  }
include("crud.php");
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$lon = $_POST['lon'];
$lat = $_POST['lat'];
$iduser = $_SESSION['iduser'];
$con = new Crud;
$con->insert("contato","(nome,telefone,lon,lat,iduser)","(?,?,?,?,?)",array($nome,$telefone,$lon,$lat,$iduser));
header('location:../frontend/map.php');