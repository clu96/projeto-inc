<?php
/*

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'projeto_inc');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('NÃO FOI POSSIVEL CONECTAR');

*/
$username = 'root';
$password = '';

try{
$conn = new PDO('mysql:host=localhost;dbname=projeto_inc', $username, $password);   
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo 'ERROR: '. $e->getMessage();

}
?>
