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
    <link rel="stylesheet" href="../styles/timeline.css">
    <script src="../js/interaction.js"></script>
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
      <a href="main.php">
        <img src="../assets/images/logo.png" alt="" width="80px">
        <p>DevWorld</p>
      </a>
    </div>
    <div class="menuSpaceBetweenNav">
      <nav>
        <a href="#"><i class="fas fa-trophy"></i></a>
        <a href="#"><i class="fas fa-briefcase"></i></a>
        <a href="#"><i class="fas fa-comments"></i></a>
        <a href="#"><i class="fas fa-file-code"></i></a>
        <a href="#"><img src="../assets/images/tiago.png" alt="" class="imagePerfil"></a>
      </nav>
    </div>
  </header>

  <container class="containerBody">

    <content class="leftBody">
      <fieldset class="fieldsetVacancies">
        <legend>Vagas</legend>
      </fieldset>
      <fieldset class="fieldsetBirthdays">
        <legend>Aniversariantes</legend>
      </fieldset>
      <fieldset class="fieldsetRank">
        <legend>Rank da Semana</legend>
      </fieldset>
    </content>

    <content class="centerBody">
      <!-- Area publicação -->
      <form class="publishingArea" id="publishingArea" method="post">
        <textarea name="textPublication" id="textPublication" onInput="sizeTexPublicationArea()" cols="80" rows="10" placeholder="Escreva alguma coisa..."></textarea>
        <div class="publishingOptions">
          <div>
            <input type="file" id="file_images" accept="image/*" onchange="countFiles()" multiple />
            <label for="file_images"><i class="far fa-image"></i></label>
            <p id="count_file_images"></p>

            <input type="file" id="file_video" accept="video/*" onchange="countFiles()" multiple />
            <label for="file_video"><i class="fas fa-video"></i></label>
            <p id="count_file_video"></p>

            <input type="file" id="file_file" accept="file/*" onchange="countFiles()" multiple />
            <label for="file_file"><i class="fas fa-paperclip"></i></label>
            <p id="count_file_files"></p>
          </div>
          <button type="submit">Publicar</button>
        </div>
      </form>
      <script>
        function countFiles(){
          var fileImages = document.getElementById('file_images').files;
          if(fileImages.length > 0) {
            document.getElementById('count_file_images').innerHTML = " "+ fileImages.length;
          }else{
            document.getElementById('count_file_images').innerHTML = "";
          }

          var fileVideo = document.getElementById('file_video').files;
          if(fileVideo.length > 0) {
            document.getElementById('count_file_video').innerHTML = " "+ fileVideo.length;
          }else{
            document.getElementById('count_file_video').innerHTML = "";
          }

          var fileFiles = document.getElementById('file_file').files;
          if(fileFiles.length > 0) {
            document.getElementById('count_file_files').innerHTML = " "+ fileFiles.length;
          }else{
            document.getElementById('count_file_files').innerHTML = "";
          }

        }
      </script>

      <div class="publications">
        <div class="headerPublication">
          <img src="../assets/images/mauricio.jpg" alt="" class="imagePerfil">
          <div>
            <p class="publicationAuthor">Mauricio Nunes</p>
            <p class="publicationDate">27/06/2020 às 19:00 hrs</p>
          </div>
        </div>
        <div class="bodyPublication">
          <div class="publicationText">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit corrupti et hic odit? Necessitatibus, iure? Itaque praesentium accusamus reprehenderit voluptas autem, voluptatum non dolorem suscipit mollitia facere! Saepe, est. Fugit.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit corrupti et hic odit? Necessitatibus, iure? Itaque praesentium accusamus reprehenderit voluptas autem, voluptatum non dolorem suscipit mollitia facere! Saepe, est. Fugit.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit corrupti et hic odit? Necessitatibus, iure? Itaque praesentium accusamus reprehenderit voluptas autem, voluptatum non dolorem suscipit mollitia facere! Saepe, est. Fugit.</p>
          </div>
          <div class="publicationImages">
            
          </div>
          <hr />
          <div class="publicationReaction">
            <i class="fas fa-comment"><p>4</p></i>
            <i class="fas fa-heart"><p>5</p></i>
            <i class="fas fa-thumbs-up"><p>12</p></i>
          </div>
        </div>
      </div>

      <div class="publications">
        <div class="headerPublication">
          <img src="../assets/images/tiago.png" alt="" class="imagePerfil">
          <div>
            <p class="publicationAuthor">Tiago Murilo</p>
            <p class="publicationDate">27/06/2020 às 12:00 hrs</p>
          </div>
        </div>
        <div class="bodyPublication">
          <div class="publicationText">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit corrupti et hic odit? Necessitatibus, iure? Itaque praesentium accusamus reprehenderit voluptas autem, voluptatum non dolorem suscipit mollitia facere! Saepe, est. Fugit.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit corrupti et hic odit? Necessitatibus, iure? Itaque praesentium accusamus reprehenderit voluptas autem, voluptatum non dolorem suscipit mollitia facere! Saepe, est. Fugit.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit corrupti et hic odit? Necessitatibus, iure? Itaque praesentium accusamus reprehenderit voluptas autem, voluptatum non dolorem suscipit mollitia facere! Saepe, est. Fugit.</p>
          </div>
          <div class="publicationImages">
            <img src="" alt="">
          </div>
          <hr />
          <div class="publicationReaction">
            <i class="fas fa-comment"><p>2</p></i>
            <i class="fas fa-heart"><p>5</p></i>
            <i class="fas fa-thumbs-up"><p>10</p></i>
          </div>
        </div>
      </div>

    </content>

    <content class="rightBody">
      <fieldset class="fieldsetProjects">
        <legend>Projetos</legend>
      </fieldset>
      <fieldset class="fieldsetCommunities">
        <legend>Comunidades</legend>
      </fieldset>
    </content>

  </container>

  </body>
</html>
  
