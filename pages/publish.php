<?php
	include "../security/security.php";
  include "../database/connection.php"; //$connection, this is a var of connection.

  $id_user = $_SESSION['user'];
  $textPublish = $_POST['textPublication'];
  date_default_timezone_set('America/Sao_Paulo');
  $dataLocal = date('d/m/Y H:i:s', time());
  $date = date('d/m/Y') . " as " . date('h:i');
  $image = "";
  $video = "";
  $document = "";

  $imageSize = $_FILES['file_images']['size'];
  if ($imageSize > 0){
    // um arquivo foi carregado com sucesso
    $archiveName    = basename($_FILES['file_images']['name']);
    $path   = "C:/xampp/htdocs/faculdade/redeSocial/publications/image";
    $archive = $path . $archiveName;
    move_uploaded_file($_FILES['file_images']['tmp_name'], $archive);
    $image = $archiveName;
  }

  $videoSize = $_FILES['file_video']['size'];
  if ($videoSize > 0){
    // um arquivo foi carregado com sucesso
    $archiveName    = basename($_FILES['file_video']['name']);
    $path   = "C:/xampp/htdocs/faculdade/redeSocial/publications/video";
    $archive = $path . $archiveName;
    move_uploaded_file($_FILES['file_video']['tmp_name'], $archive);
    $video = $archiveName;
  }

  $documentSize = $_FILES['file_file']['size'];
  if ($documentSize > 0){
    // um arquivo foi carregado com sucesso
    $archiveName = basename($_FILES['file_file']['name']);
    $path = "C:/xampp/htdocs/faculdade/redeSocial/publications/document";
    $archive = $path . $archiveName;
    move_uploaded_file($_FILES['file_file']['tmp_name'], $archive);
    $document = $archiveName;
  }

  $sql = "insert into posts (id_user, text, date, image_file, video_file, document_file) 
          values ($id_user, '$textPublish', '$date', '$image', '$video', '$document')";
  
  mysqli_query($connection, $sql);
  
	header("Location: main.php");

?>