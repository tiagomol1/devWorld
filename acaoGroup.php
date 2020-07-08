<?php
include 'database/connection.php';
$nomeGrupo = $_POST['nomeGrupo'];
$categoriaGrupo = $_POST['nomeCategoria'];



$sql = "INSERT INTO groups (namegroup, category) VALUES ('$nomeGrupo', '$categoriaGrupo')";

if (mysqli_query($connection, $sql)) {
               echo 'cadastrado';
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            }
            mysqli_close($connection);

?>
