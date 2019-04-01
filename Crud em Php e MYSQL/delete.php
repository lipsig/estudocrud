<?php
include "connect.php";

$id = 2;
//$id = $_post['id']
mysqli_query($link,"delete from tb_login where id_login = $id");



?>