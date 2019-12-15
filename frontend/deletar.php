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
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <style>
        #bloco{
            width: 40%;
            margin: auto;
            margin-top: 20%;
            background-color: #353636;;
            text-align: center;
            padding: 0.6%;
        }
        #bloc{
            background-color: #48f3b1;
        }
        .opcoes{
            display: inline-block;
            margin: auto;
            margin-left: 3%;
            margin-right: 3%;
        }
        #opcoes{
            margin: auto;
        }
        body{
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <div id="bloco" class="container">
        <div id="bloc">
            <div>
                <h3>Deseja excluir o contato <?php echo $_GET['nome'];?>?</h3>
            </Div>
            <div id="opcoes">
                <div class="opcoes">
                    <form class="form-group" action="../backend/excluir.php" method="GET">
                        <input type="number" name="id" id="id" style="display: none;" value=<?php echo $_GET['id']?>>
                        <input type="submit" value="    SIM    ">
                    </form>
                </div>
                <div class="opcoes" >
                    <form class="form-group" action=<?php echo "pesquisar.php";?>>
                        <input type="submit" value="    NÃO    ">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>