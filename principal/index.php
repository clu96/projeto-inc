
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INC PROCESSOS</title>
    <link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<header>
    
</header>

<body>
<br>
<button id="submitpainel01"><a href="../formulario/con_proc.php">VOLTAR</a></button>
<br>
<div class="box">
		<form action="../controle/inserir_proc.php" method="post">
			<fieldset>
				<legend><b>Cadastro Processos</b></legend>
				<br>
				<div class="inputbox">
					<input type="text" name="requerente" id="requerente" class="inputUser" required>
					<label for="requerente" class="labelInput">Requerente</label>
				</div>
				<br><br>
				<div class="inputbox">
					<input type="text" name="requerido" id="requerido" class="inputUser" required>
					<label for="requerido" class="labelInput">Requerido</label>
				</div>
				<br><br>
				<div class="inputbox">
					<input type="text" name="num_proc" id="num_proc" class="inputUser" required>
					<label for="num_proc" class="labelInput">Nº Processo</label>
				</div>
				<br><br>
				<nav id="menu">
				<p>Tipo Processo:</p>
				
					<select name="tipo_proc" id="tipo_proc">
					<option value="liquidacao">Liquídação</option>
					<option value="pericia">Perícia</option>
					<option value="quesitos">Quesitos</option>
					<option value="parecer">Parecer</option>
					<option value="manifestacao">Manifestação</option>
					
				</select>
				
				<br>
				
				
					<p>Status Processo:</p>
				
					<select name="status_proc" id="status_proc">
					<option value="solicitado">Solicitado</option>
					<option value="pendencia">Pendência</option>
					<option value="concluido">Concluido</option>
					<option value="aguardando">Aguardando</option>
					<option value="cancelado">Cancelado</option>
					
				</select>
				
				<br><br>
								
				<label for="date" id="date"><b>Data Entrega:</b></label>
				<br><br>
					<input type="date" name="data_entrega" id="data_entrega" required>
					
			</nav>			
				<br><br><br>
				<div class="inputbox">
					<label for="comentario" class="labelInput">Comentário:</label>
					<br><br>
					<textarea type="text" name="comentario" id="comentario" rows="10" cols="65" required></textarea>	
				</div>
				
				<br><br>
				<input type="submit" name="submit" id="submit">
				
			</fieldset>
		</form>
	</div>
  <?php include_once("../controle/inserir_proc.php"); ?>
</body>
</html>