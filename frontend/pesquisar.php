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
    <link rel="stylesheet" href="styles/pesquisa.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
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
                <li><a href="#"> Pesquisar </a></li>
                <li><a href="sobre.php"> Sobre </a></li>
            </ul>
        </div>
      </nav>
    </div>
    <div id="bloc">
        <div id="divtable">
            <table id="tabela" class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"> Nome </th>
                        <th scope="col"> Telefone </th>
                        <th scope="col" colspan="3"> Opções </th>
                    </tr>
                </thead>
                <?php
                    include('../backend/crud.php');
                    $con = new Crud;
                    $result = $con->select("contato","*","", array());
                    while($row = $result->fetch()){
                ?>
                <tbody>
                    <tr>
                        <td> <?php echo $row["nome"];?> </td>
                        <td> <?php echo $row["telefone"];?> </td>
                        <td><a href=<?php echo "map.php?id={$row['id']}"?>><img src="imagens/zoom.png"></a></td>
                        <td><a href=<?php echo "atualizar.php?id={$row['id']}"?>><img src="imagens/user_edit.png"></a></td>
                        <td><a href=<?php echo "deletar.php?id={$row['id']}&nome={$row['nome']}";?>><img src="imagens/user_delete.png"></a></td>
                    </tr>
                </tbody>
                <?php 
                    }
                ?>
            </table>   
        </div>
    </div>
</body>
</html>