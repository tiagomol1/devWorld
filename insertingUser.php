<?php
include 'database/connection.php';

$cnpj           = $_POST['campoCNPJ'];
$nomeFantasia   = $_POST['nomeFantasia'];
$razaoSocial    = $_POST['razaoSocial'];
$nameUser       = $_POST['nameUser'];
$email          = $_POST['emailCadastro'];
$password1      = $_POST['password1'];
$password2      = $_POST['password2'];

if($email == '' || $password1 == '' || $password2 == ''){
    echo 'nenhum dos campos pode estar vazio!';
}else{
    $sql = "INSERT INTO users (email, username, password, cnpj, razaoSocial, nomeFantasia) VALUES ('$email', '$nameUser', '$password1', '$cnpj', '$razaoSocial', '$nomeFantasia')";
    if (mysqli_query($connection, $sql)) {
        header('Location: /devWorld/sucessoCadastro.php');
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);


}


?>