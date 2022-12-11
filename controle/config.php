<?php
session_start();


include_once('../controle/conexao.php');

if(empty($_POST['txt_user']) || empty($_POST['txt_pass'])) {
	header('Location: ../formulario/login.php');
	

}

$user = $_POST['txt_user'];
$pass = md5($_POST['txt_pass']);
$sql =  "SELECT usuario,senha FROM usuario WHERE usuario ='$user'";
$result = $conn->query($sql);
$row=$result->fetch(PDO::FETCH_ASSOC);
$usuario = $row['usuario'];
$senha = $row['senha'];
$pass = substr($pass,0,255);
if($usuario == $user and $senha == $pass){
    $_SESSION['txt_user'] = $usuario;
    $_SESSION ['txt_pass'] = $senha ;
    header('location: ../formulario/con_proc.php');
}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login ou senha incorretos');
    window.location.href='../formulario/login.php';
    </script>");

}
    /*
    unset ($_SESSION['txt_user']);
	unset ($_SESSION['txt_pass']);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login ou senha incorretos');
    window.location.href='../formulario/login.php';
    </script>");
    */










/*
if(empty($_POST['txt_user']) || empty($_POST['txt_pass'])) {
	header('Location: ../formulario/login.php');
	exit();

}



$user = $_POST ['txt_user'];
$pass = md5($_POST ['txt_pass']);

$sql = " SELECT * FROM usuario WHERE usuario = '{$user}' AND senha = '{$pass}'";

$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$usuario = $row['usuario'];
$senha = $row ['senha'];

if($row == 2) {
    $_SESSION['usuario'] = $user;
    header('location:../formulario/painel.php');
    exit();
}
else{
    header('Location: ../formulario/cad_usuario.php');
    exit();
}


if($usuario == $user and $senha == md5($pass)) {		
               
	$_SESSION['usuario'] = $user;
	$_SESSION['senha'] = $pass;
   
	header('location:../principal/index.html');     
} else {
  
	unset ($_SESSION['$user']);
	unset ($_SESSION['$pass']);
 
    var_dump($user);
    var_dump($pass);	
    var_dump($usuario);
    var_dump($senha);
	echo "Usuario ou senha incorretos, <a href='../formulario/login.php'>tente novamente</a>";
}
*/

  /*
$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT id_usuario, usuario FROM usuario WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

echo $row;exit;


if($user == $usuario && $pass == $senha){
    $_SESSION['txt_user'] = $usuario;
    $_SESSION ['txt_pass'] = $senha ;

    header('Location: ../principal/index.php');
    exit();
} else{
    
    echo "<script>alert('DEU RUIM!!! senhas não conferem..')</script>
    <a href='../formulario/login.php'>VOLTAR</a>";
    exit();
}
*/
?>