<?php

//chamando a conexao bd
include "connect.php";

$nome = $_POST['formnome'];
$email = $_POST['formemail'];
$senha = $_POST['formsenha'];


//primeiro parametro é o link da conexão
mysqli_query($link,"INSERT into tb_login(nome,email,senha) values ('$nome','$email','$senha')");

//redirecionar para a pagina
header('location:form_insert.php');


?>