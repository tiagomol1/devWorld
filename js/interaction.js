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