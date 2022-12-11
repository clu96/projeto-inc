

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CONSULTA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<header>
<table>
<tr>
<th><button type="submit" id="submitpainel"><a href="../principal/index.php">CADASTRA PROCESSO</a></button></th>
<th><button  id="submitpainel"><a href="../formulario/login.php">SAIR</a></button></th></tr>
</table>
</header>
<br><br><br>
<body>
 

	<div>


  <center>
  <table class="table table-striped" id="table">
  <thead>
    <tr>
      <th id="th" scope="col">#ID Proc</th>
      <th id="th" scope="col">Numero Processo</th>
      <th id="th" scope="col">Requerente</th>
      <th id="th" scope="col">Requerido</th>
      <th id="th" scope="col">Tipo Processo</th>
      <th id="th" scope="col">Status Processo</th>
      <th id="th" scope="col">Data de Entrega</th>
      <th id="th" scope="col"> </th>
      <th id="th" scope="col"> </th>
      </tr>
  </thead>
  <tbody>
    <?php
    
    session_start();
    include('../controle/conexao.php');

    $sql = "SELECT * FROM processo ORDER BY id_proc DESC";
    $result = $conn->query($sql);
    $consulta = $result->fetch(PDO::FETCH_ASSOC); 
    
         foreach($conn->query( $sql ) as  $consulta ){

          print "<tr><td>".$consulta['id_proc']."</td>";
          print "<td>".$consulta['num_proc']."</td>";
          print "<td>".$consulta['requerente']."</td>";
            print "<td>".$consulta['requerido']."</td>";
            print "<td>".$consulta['tipo_proc']."</td>";
            print "<td>".$consulta['status_proc']."</td>";    
            print "<td>".$consulta['data_entrega']."</td>";
            print "<td><a class='btn btn-primary' href='../formulario/edit.php?id=$consulta[id_proc]'> 
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
      </svg></a></td>";
            print "<td><a class='btn btn-primary' href='#'> 
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
          </svg></a></td></tr>";

      }
      

  
        exit();

        ?>
  </tbody>
</table>
</center>
	</div>



</body>
</html>