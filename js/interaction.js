function fillForm(){
  if(document.getElementById('fUser').value == ""){
    alert("Você não preencheu o campo 'Usuário'");
    return false;
  }else if(document.getElementById('fPassword').value == ""){
      alert("Você não preencheu o campo 'Senha'");
      return false;
    }
  return true;
}

function sizeTexPublicationArea(){
  var textPublication = document.getElementById("textPublication");
  if(textPublication.value.length > 100 ){
    textPublication.setAttribute("style", "height: 250px !important; transition: 1s;");
    document.getElementById("publishingArea").setAttribute("style", "height: 350px !important; transition: 1s;");
  }else{
    textPublication.setAttribute("style", "transition: 1s;");
    document.getElementById("publishingArea").setAttribute("style", "transition: 1s;");
  }
}

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