<?php

//chamando a conexao bd
include "connect.php";

//variavel de consulta
$consulta = mysqli_query($link,"select * from tb_login");


//enquanto vetor receber o que vier da consulta, le linha por linha/ coluna por coluna
while($vetor = mysqli_fetch_array($consulta)){
    $id = $vetor['id_login'];
    $nome = $vetor['nome'];
    $email = $vetor['email'];
    $senha = $vetor['senha'];

    echo "id: $id<br>";
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Senha: $senha<hr>";
}



?>