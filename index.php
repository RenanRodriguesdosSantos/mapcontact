<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Map Contact</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="frontend/styles/bootstrap.min.css">
    <style>
        body{
            width: 100%;
            background: url("frontend/imagens/fundo.png");
        }
        .login{
            width: 25%;
            height: 50%;
            background-color: #008080;
            margin: auto;
            margin-top: 10%;
            border-radius: 10px;
        }
        #titulo{
            text-align: center;
            color: #B22222;
        }
        #submit{
            background-color: #C0C0C0;
        }
    </style>
</head>
<body>
    <div class="login" id="form">
        <form method="post" action="backend/autenticar.php" >
            <div class="container">
                <div class="form-group" id="titulo"><h2>Map Contact</h2></div>
                <div class="form-group">
                    <label for="user">Usuário: </label><br><input class="form-control" type="text" name="user" id="user" placeholder="Nome de usuário"><br>
                </div>
                <div class="from-group">
                    <label for="password">Senha: </label><br><input class="form-control" type="password" name="password" id="password" placeholder="Sua senha"><br>
                </div>
                <div class="form-group">
                    <input  type="submit" class="form-control" id="submit" value="ENTRAR">
                </div>
            </div>
        </form>
    </div>
</body>
</html>