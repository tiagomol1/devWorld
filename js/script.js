function some(){
    var linha = document.getElementById("underline");
    linha.style.color = 'black';
}

function aparece(){
    var linha = document.getElementById("underline");
    linha.style.color = 'green';
}

function underline(){
setInterval(some, 500);
setInterval(aparece, 1000);
}

function validPass(){
var password1 = document.getElementById('password1').value;
var password2 = document.getElementById('password2').value;
var infoPass  = document.getElementById('infoPass');

if(password1 != password2){
    
    infoPass.innerHTML = ` <div class="alert alert-danger" role="alert">
                                As senhas estão diferentes!
                           </div> `

}else if(password1 == '' && password2 == ''){

    infoPass.innerHTML = `  <div class="alert alert-danger" role="alert">
                               Nenhum dos campos pode estar vazios!
                            </div> `

    }else{
        infoPass.innerHTML = ` <div class="alert alert-success" role="alert">
                                  As senhas estão iguais!
                               </div> `
    }
}


numeroCinco = 5;
function contagemRegressiva(){
    
   var contagem = document.getElementById('contagem')
   contagem.style.color = 'rgb(0, 255, 0)';
   contagem.innerHTML = `<center>${numeroCinco}</center>`;
   numeroCinco = numeroCinco - 1
   if(numeroCinco == 0){
    window.location.href = "http://localhost/faculdade/redeSocial/login.php";
   }

}

function teste(){
    setInterval(contagemRegressiva, 1000)
}

function verificaEntidade(){
var pessoaFisica = document.getElementById('pessoaFisica').checked
var pessoaJuridica = document.getElementById('pessoaJuridica').checked
var campoCNPJ = document.getElementById('campoCNPJ')
var razaoSocial = document.getElementById('razaoSocial')
var nomeFantasia = document.getElementById('nomeFantasia')
var nomeUser = document.getElementById('nomeUser')

if(pessoaJuridica == true){
    campoCNPJ.innerHTML =             
    `
    <label for="campoCNPJ">Insira seu CNPJ</label>
    <input type="text" name="campoCNPJ" class="form-control" >
  
    `
    razaoSocial.innerHTML = 
    `
    <label for="razaoSocial">Insira a razão social da sua empresa</label>
    <input type="text" name="razaoSocial" class="form-control" >
  
    `

    nomeFantasia.innerHTML = 
    `
    <label for="nomeFantasia">Insira o nome fantasia da sua empresa</label>
    <input type="text" name="nomeFantasia" class="form-control" >
  
    `

    //nomeUser.innerHTML = ''

}else if(pessoaFisica == true){
    campoCNPJ.innerHTML = '';
    nomeFantasia.innerHTML = '';
    razaoSocial.innerHTML = '';
    
}


}

