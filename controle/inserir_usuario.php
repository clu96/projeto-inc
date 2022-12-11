<?php
include("conexao.php");


$usuario  = $_POST["txt_user"];
$email  = $_POST["txt_mail"];
$senha = md5($_POST["txt_pass"]);
$confirm = md5($_POST["txt_confirm"]);


        if($senha<>$confirm){
            echo "<script>alert('DEU RUIM!!! senhas não conferem..')</script>";
        }
        else{
            $conn->query("INSERT INTO usuario(usuario, email, senha) VALUES('$usuario', '$email', '$senha')");
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Usuário cadastrado com sucesso!!!!');
    window.location.href='../formulario/login.php';
    </script>");
        }
        

?>