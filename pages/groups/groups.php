<?php
  include "../../security/security.php";
  include "../../database/connection.php"; //$connection, this is a var of connection.
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="utf-8" />
    <link rel="icon" href="#" />
    <script src="https://kit.fontawesome.com/b5207eb6cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/global.css">
    <link rel="stylesheet" href="../../styles/timeline.css">
    <script src="../../js/interaction.js"></script>
    <title>DevWorld</title>
  </head>
  <body>
  <header>
    <div class="menuSpaceBetweenSearch">
      <div class="searchHeader">
        <input type="text" placeholder="Serch">
        <button><i class="fas fa-search"></i></button>
      </div>
    </div>  
    <div class="menuSpaceBetweenImage">
      <a href="../main.php">
        <img src="../../assets/images/logo.png" alt="" width="80px">
        <p>DevWorld</p>
      </a>
    </div>
    <div class="menuSpaceBetweenNav">
      <nav>
        <a href="groups.php"><i class="fas fa-users"></i></a>
        <a href="#"><i class="fas fa-trophy"></i></a>
        <a href="#"><i class="fas fa-briefcase"></i></a>
        <a href="#"><i class="fas fa-comments"></i></a>
        <a href="#"><i class="fas fa-file-code"></i></a>
        <a href="#"><img src="../../assets/images/tiago.png" alt="" class="imagePerfil"></a>
      

      </nav>
    </div>
  </header>

  <a href="http://localhost/faculdade/redeSocial/pages/groups/formgroups.php"><button class="btn btn-success mt-2" >Adicionar grupo</button></a>
  </body>
</html>