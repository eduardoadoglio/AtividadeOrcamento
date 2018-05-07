<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<?php
	include("conexao.php");
?>
<body>
<form method="post" action="validacaoCadastro.php">
<input type="text" name="nmfuncionario" placeholder="Nome de usuário"><br>
<input type="password" name="senhafuncionario" placeholder="Senha"> <br>
<input type="submit" value="Enviar">
</form>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" href="js/bootstrap.min.js"></script>

</html>