<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.css">

    <title>Cadastro</title>
</head>

<body>

    <video autoplay muted loop id="myVideo">
        <source src="assets/videos/videoLogin.mp4" type="video/mp4">
    </video>

    <a href="http://localhost/devWorld/"><img src="img/volta.png" width="50px" id="volta" height="50px"></img></a>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h1 class="display-1">Seja um membro</h1>
                <form method="POST" id="formCadastro" action="insertingUser.php">
                    <center>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" onclick="verificaEntidade()" type="radio" name="inlineRadioOptions" id="pessoaFisica" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Pessoa fisica</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" onclick="verificaEntidade()" type="radio" name="inlineRadioOptions" id="pessoaJuridica" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Pessoa juridica</label>
                        </div>
                    </center>
                    <div class="form-group">
                        <div id="nomeUser">
                            <label for="nameUser">Insira seu nome completo</label>
                            <input type="text" class="form-control" name="nameUser" required>
                        </div>
                        <div id="campoCNPJ"></div>
                        <div id="razaoSocial"></div>
                        <div id="nomeFantasia"></div>
                        <label for="exampleInputEmail1">Insira seu e-mail</label>
                        <input type="email" name="emailCadastro" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" onkeyup="validPass()" class="form-control" id="password1" name="password1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Insira novamente a senha</label>
                        <input type="password" onkeyup="validPass()" class="form-control" id="password2" name="password2" required>
                    </div>
                    <center>
                        <div id="infoPass"></div>
                    </center>
                    <button type="submit" class="btn btn-primary">Cadastrar</button> <button onclick="validPass()" type="reset" class="btn btn-warning">Limpar</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="js/script.js"></script>

</html>