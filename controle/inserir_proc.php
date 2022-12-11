<?php
session_start();

try{
    if(isset($_POST['submit']))
{
   include('../controle/conexao.php');

	
    $requerente = $_POST['requerente'];
    $requerido = $_POST['requerido'];
    $processo = $_POST['num_proc'];
    $tipo_proc = $_POST['tipo_proc'];
    $status_proc = $_POST['status_proc'];
    $data_entrega = $_POST['data_entrega'];
    $comentario = $_POST['comentario'];
    

    $conn->query("INSERT INTO processo(requerente,requerido,num_proc,tipo_proc,status_proc,data_entrega,comentario) VALUES ('$requerente','$requerido','$processo','$tipo_proc','$status_proc','$data_entrega','$comentario')");
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Processo cadastrado com sucesso!!!!');
    window.location.href='../formulario/con_proc.php';
    </script>");
}

}catch(PDOException $e){
            echo 'ERROR: '. $e->getMessage();
            echo ("<script LANGUAGE='JavaScript'>
    window.location.href='../formulario/con_proc.php';
    </script>");
}


?>