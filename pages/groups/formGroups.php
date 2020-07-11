<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../../styles/bootstrap.css"/>
  </head>
  <body>
    <div class="container">
      <div class="card mt-3">
        <div class="card-body">
          <form action="../groups/acaoGroup.php" method="POST">
            <center><h1 class="display-2">Cadastro de grupo</h1></center>
            <label for="nomeGrupo" class="mt-3">Nome do grupo</label>
            <input type="text" class="form-control" placeholder="Nome do grupo" name="nomeGrupo" id="nomeGrupo">
            <label for="categoria" class="mt-3">Categoria</label>
            <input type="text" class="form-control" placeholder="Nome da categoria" name="nomeCategoria" id="nomeCategoria">
            <button type="submit" class="btn btn-success mt-2">Criar grupo</button>
            <button type="reset" class="btn btn-warning mt-2">Limpar</button> 
          </form>
        </div>
      </div>
    </div>
  </body>
</html>