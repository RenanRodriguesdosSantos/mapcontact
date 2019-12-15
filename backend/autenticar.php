<?php
session_start();
include("crud.php");
$login = $_POST['user'];
$senha = $_POST['password'];

$crud = new Crud;
$result = $crud->select("usuario","*", "where login = ? and senha = md5(?)", array($login,$senha));
if($result->rowCount() > 0){
    $iduser = 0;
    while($row = $result->fetch()){
        $iduser = $row['id'];
    }
    $_SESSION["iduser"] = $iduser;
    header('location:../frontend/map.php');
}
else{
    unset($_SESSION['iduser']);
    header('location: ../index.php');
}


