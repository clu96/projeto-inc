<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CADASTRO USUÁRIO</title>
    <link rel="stylesheet" type="text/css" href="../estilo/geral.css">
</head>
<body>
<center>
    <div class="box">
                <form method="POST" action="../controle/inserir_usuario.php">
                 
                <h1>CADASTRO USUÁRIO</h1>
                <table>
                    
                <tr><td><label> Usuario:</label></td><td><input type="text" name="txt_user"></td></tr>
                        <tr><td><label> E-mail:</label></td><td><input type="email" name="txt_mail" required></td></tr>
                        <tr><td><label> Senha:</label></td><td><input type="password" name="txt_pass" required></td></tr>
                        <tr><td><label> Confirmação:</label></td><td><input type="password" name="txt_confirm" ></td></tr>
                        </table>
                        <br><br>    
                        <button type="submit">Enviar</button>
                        <br><br>
                        <a href="../formulario/login.php"><h2>Voltar</h2></a>
                <!--
                        <label id="label1">Usuario: </label><input id="box1" type="text" name="txt_user">
                        <br><br>
                        <label id="label1"> E-mail: </label><input id="box1" type="mail" name="txt_mail">
                        <br><br>
                        <label id="label1"> Senha: </label><input id="box1" type="password" name="txt_pass">
                        <br><br>
                        <label id="label1"> Confirmação: </label><input id="box1" type="password" name="txt_confirm">
                        <br><br>
                        <button type="submit">Enviar</button>
                        <br><br>
                        <a href="../formulario/login.php"><h2>Voltar</h2></a>
                        <tr><td colspan="2"><nav class="button"><input type="submit" name="ENTRAR" placeholder="ENTRAR"></nav></td>
-->    
                    
                    </form>
            </div>
    
    </center>      
   
</body>

</html>