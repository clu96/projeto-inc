<?php


define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'projeto_inc');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('NÃO FOI POSSIVEL CONECTAR');


?>