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

function verificaEntidade(selected){

    var campoCNPJ = document.getElementById('campoCNPJ');
    var razaoSocial = document.getElementById('razaoSocial');

    if(selected == 'pf'){
        document.getElementById('pessoaJuridica').checked = false;
        document.getElementById('pessoaFisica').checked = true;
        document.getElementById('pessoaJuridica').value = "";
        document.getElementById('pessoaFisica').value = "1";
    }else if(selected == 'pj'){
        document.getElementById('pessoaFisica').checked = false;
        document.getElementById('pessoaJuridica').checked = true;
        document.getElementById('pessoaFisica').value = "";
        document.getElementById('pessoaJuridica').value = "1";
    }

    if(selected == 'pj'){
        campoCNPJ.innerHTML =             
        `
        <input type="text" placeholder="CNPJ" name="CNPJ" class="form-control" >
        `
        razaoSocial.innerHTML = 
        `
        <input type="text" placeholder="Razão Social" name="companyName" class="form-control" > 
        `
    }else if(selected == 'pf'){
        campoCNPJ.innerHTML = '';
        nomeFantasia.innerHTML = '';
        razaoSocial.innerHTML = '';
    }
}


function validaCamposOpcao(e){
    if(document.getElementById('pessoaJuridica').checked == false && document.getElementById('pessoaFisica') == false){
        alert(`Selcione uma opção, 'Pessoa Fisica' ou 'Pessoa Juridica'`)
        e.prevent.default()
        return false 
    }
    return true;
}