<?php
include 'database/connection.php';

$pf           = $_POST['pessoaFisica'];
$pj           = $_POST['pessoaJuridica'];
$fullname     = $_POST['fullname'];
$username     = $_POST['username'];
$email        = $_POST['email'];
$password1    = $_POST['password1'];
$password2    = $_POST['password2'];

if($email == '' || $password1 == '' || $password2 == ''){
    echo 'Nenhum dos campos pode estar vazio!';
}else if(($pf == "" && $pj == "") || ($pf == "on" && $pj == "on")){
        echo 'Selecione um tipo de cadastro!';
    }else{
        if($pf == "1"){

            $typeUser = 2;
            $sql = "INSERT INTO users (email, username, password, fullName, companyName, cnpj, typeUser ) VALUES ('$email', '$username', '$password1', '$fullname', '', 0, $typeUser)";
            if (mysqli_query($connection, $sql)) {
                header('Location: sucessRegister.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            }
            mysqli_close($connection);

        }

        if($pj == "1"){

            $typeUser     = 2;
            $cnpj         = $_POST['cnpj'];
            $razaoSocial  = $_POST['companyName'];
            $sql = "INSERT INTO users (email, username, password, fullName, companyName, cnpj, typeUser ) VALUES ('$email', '$username', '$password1', '$fullname', '$companyName', '$cnpj', $typeUser)";
            if (mysqli_query($connection, $sql)) {
                header('Location: sucessRegister.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            }
            mysqli_close($connection);

        }
    }   

?>