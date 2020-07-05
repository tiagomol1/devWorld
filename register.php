<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/login.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <title>Cadastro</title>
</head>

<body>

    <video autoplay muted loop id="myVideo">
        <source src="assets/videos/videoLogin.mp4" type="video/mp4">
    </video>

    <a href="http://localhost/faculdade/redesocial"><i class="fas fa-arrow-left" styles="font-size: 30px; color: white;"></i></a>
    <div class="content">
        <h1>Seja um membro</h1>
        <form method="POST" id="formCadastro" action="insertingUser.php" onsubmit="validaCamposOpcao()">
            <center>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pessoaFisica" onclick="verificaEntidade('pf')" id="pessoaFisica">
                    <label class="form-check-label" for="inlineRadio1">Pessoa fisica</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pessoaJuridica" onclick="verificaEntidade('pj')" id="pessoaJuridica">
                    <label class="form-check-label" for="inlineRadio2">Pessoa juridica</label>
                </div>
            </center>
            <div class="form-group">
                <input type="text" placeholder="Nome Completo" class="form-control" name="fullname" required>
                <div id="campoCNPJ">
                </div>
                <div id="razaoSocial">
                </div>
                <div id="nomeFantasia">
                </div>
                <input type="email" name="email" placeholder="E-mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <input type="username" name="username" placeholder="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <input type="password" onkeyup="validPass()" placeholder="Insira uma senha" class="form-control" id="password1" name="password1" required>
                <input type="password" onkeyup="validPass()" placeholder="Repita a senha" class="form-control" id="password2" name="password2" required>
            </div>
            <center>
                <div id="infoPass"></div>
            </center>
            <center>
                <button type="submit" class="btn btn-primary">Cadastrar</button> <button onclick="validPass()" type="reset" class="btn btn-warning">Limpar</button>
            </center>
        </form>
    </div>
</body>
<script src="js/script.js"></script>

</html>