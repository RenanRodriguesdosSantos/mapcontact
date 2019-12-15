<?php
session_start();
if(!isset($_SESSION['iduser'])){
  unset($_SESSION['iduser']);
  header("location:../index.php");
}

include("crud.php");
$con = new Crud;
$id = $_GET['id'];
$con->delete("contato","where id = ?",array($id));
header("location: ../frontend/pesquisar.php");