<?php
	include "../security/security.php";
  include "../database/connection.php"; //$connection, this is a var of connection.

  $sql = "select posts.*, users.fullName, users.username from posts inner join users on users.id = posts.id_user order by posts.id desc";
	$result = mysqli_query($connection, $sql);
	
	$postsList = array();
	while ($post = mysqli_fetch_assoc($result)){
		$postsList[] = $post;
	}
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
        <input type="text" placeholder="Serch">
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
        <a href="groups/groups.php"><i class="fas fa-users"></i></a>
        <a href="#"><i class="fas fa-trophy"></i></a>
        <a href="#"><i class="fas fa-briefcase"></i></a>
        <a href="#"><i class="fas fa-comments"></i></a>
        <a href="#"><i class="fas fa-file-code"></i></a>
        <a href="#"><img src="../assets/images/user.png" alt="" class="imagePerfil"></a>
      

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
      <form class="publishingArea" id="publishingArea" method="POST" action="publish.php" enctype="multipart/form-data">
        <textarea name="textPublication" id="textPublication" onInput="sizeTexPublicationArea()" cols="80" rows="10" placeholder="Escreva alguma coisa..."></textarea>
        <div class="publishingOptions">
          <div>
            <input type="file" id="file_images" name="file_images" accept="image/*" onchange="countFiles()" />
            <label for="file_images"><i class="far fa-image"></i></label>
            <p id="count_file_images"></p>

            <input type="file" id="file_video" name="file_video" accept="video/*" onchange="countFiles()" />
            <label for="file_video"><i class="fas fa-video"></i></label>
            <p id="count_file_video"></p>

            <input type="file" id="file_file" name="file_file" accept="file/*" onchange="countFiles()" />
            <label for="file_file"><i class="fas fa-paperclip"></i></label>
            <p id="count_file_files"></p>
          </div>
          <button type="submit">Publicar</button>
        </div>
      </form>
      <?php foreach ($postsList as $post){ ?>
        <div class="publications">
          <div class="headerPublication">
            <img src="../assets/images/user.png" alt="" class="imagePerfil">
            <div>
              <p class="publicationAuthor"><?php echo $post['fullName'];?></p>
              <p class="publicationDate"><?php echo "(" . $post['username'] . ")    ". $post['date']; ?></p>
            </div>
          </div>
          <div class="bodyPublication">
            <div class="publicationText">
              <p> <?php echo $post['text'];?> </p>
            </div>
            <div class="publicationImages">
              <?php 
               if( $post['image_file'] != "" || $post['video_file'] != "" || $post['document_file'] != ""){
              ?>
                <br/>
                <?php if($post['image_file'] != ""){ ?>
                  <img src="../publications/image<?php echo $post['image_file'];?>" width="550px">
                <?php } ?>
                <?php if($post['video_file'] != ""){ ?>
                  <video width="550" height="320" style="margin-top: 5px" controls>
                    <source src="../publications/video<?php echo $post['video_file'];?>" type="video/mp4">
                  </video>
                <?php } ?>
                <?php if($post['document_file'] != ""){ ?>
                  <div style="margin-top: 10px;">
                    <a href="../publications/document<?php echo $post['document_file'];?>" download> 
                      <i class="fa fa-download" aria-hidden="true"></i><?php echo " - ". $post['document_file'];?>
                    </a>
                  </div>
                <?php } ?>
              <?php
               }
              ?>
            </div>
            <hr />
            <div class="publicationReaction">
              <i class="fas fa-comment"><p>4</p></i>
              <i class="fas fa-heart"><p>5</p></i>
              <i class="fas fa-thumbs-up"><p>12</p></i>
            </div>
          </div>
        </div>
      <?php }?>

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
  
