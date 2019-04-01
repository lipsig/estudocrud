<?php

//chamando a conexao bd
include "connect.php";
$nome= "Marcelo";
$senha = "m1234";


//primeiro parametro é o link da conexão
//update sem where ira atualizar todos os campos CUIDADO
mysqli_query($link,"UPDATE tb_login set nome = '$nome', senha = '$senha'  where id_login = 3");

//redirecionar para a pagina


?>