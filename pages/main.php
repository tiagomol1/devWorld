<?php
	include "../security/security.php";
  include "../database/connection.php"; //$connection, this is a var of connection.
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="#" />
    <script src="https://kit.fontawesome.com/b5207eb6cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/global.css">
    <title>DevWorld</title>
  </head>
  <body>
  <header>
    <div class="menuSpaceBetweenSearch">
      <div class="searchHeader">
        <input type="text">
        <button><i class="fas fa-search"></i></button>
      </div>
    </div>  
    <div class="menuSpaceBetweenImage">
      <img src="../assets/images/logo.png" alt="" width="80px">
    </div>
    <div class="menuSpaceBetweenNav">
      <nav>
        <a href="#"><i class="fas fa-trophy"></i></a>
        <a href="#"><i class="fas fa-briefcase"></i></a>
        <a href="#"><i class="fas fa-comments"></i></a>
        <a href="#"><i class="fas fa-file-code"></i></a>
        <a href="#"><i class="fas fa-user iconUser"></i></a>
      </nav>
    </div>
  </header>

  <container class="containerBody">

    <content class="leftBody">

    </content>

    <content class="centerBody">

    </content>

    <content class="rightBody">

    </content>

  </container>

  </body>
</html>
  
