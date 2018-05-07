<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Funcionário</title>
	<meta charset="utf-8">
			<!-- Importando o BootStrap -->
			<link rel="stylesheet" href="js/bootstrap.min.css">
			<!-- Relacionando com o CSS de Estilo -->
			<link rel="stylesheet" href="style.css">
			<!-- Importando o JQuery -->
		 	<script src="js/jquery.min.js"></script>
	      	<!-- Importando o Java Script do BootStrap -->
		  	<script src="js/bootstrap.min.js"></script>	
		  	<!-- Ícone da Aba do Navegador -->
			<link rel="icon" type="image/png" href="Images/sonico.png">
	      	<!--Importando Material Icons-->
	      	<link href="js/Materialize/Materialize/icons/material_icons.css" rel="stylesheet">
	      	<!--Optimizando o site pra mobile -->
	      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	      	<!-- Fontes Show -->
			<link rel="stylesheet" type="text/css" href="fonts/Abel/Abel.css">
			<link rel="stylesheet" type="text/css" href="fonts/Barlow/Barlow.css">
			<!-- Cor da Barra de Endereço MOBILE -->
			<meta name="theme-color" content="#E59F04">
</head>
<body>

	<!-- Formulário de Inserção de Dados -->
	<form method="post">
			<center>
					<b>CADASTRE-SE O FUNCIONÁRIO!</b>
					<p>Insira as informações necessárias do Funcionário:</p>
					<hr>
					<input type="text" name="nome_first" placeholder="Insira o Nome do Funcionário"><br>
					<input type="text" name="nome_last" placeholder="Insira o Sobrenome do Funcionário"><br>
					<input type="password" name="senha" placeholder="Digite a Senha"><br>
					<input type="password" name="confirm_senha" placeholder="Confirme a Senha"><br>
					<input type="email" name="email" placeholder="Digite o Email do Funcionário"><br>
					<input type="number" name="telefone" placeholder="Insira o telefone do Funcionário"><br>

					<input type="submit" value="CADASTRAR">
					<input type="reset" value="LIMPAR">
			</center>
	</form>

 <?php

 	// Conexão com o Banco de Dados
 	$mysqli = new mysqli('localhost','root','usbw','db_atividade');

		if(mysqli_connect_errno()){ 
			trigger_error(
			mysqli_connect_error());
		}

	// Verificação de Preenchimento de Campos do Formulário
	if( isset($_POST['nome_first']) && isset($_POST['nome_last']) && isset($_POST['senha']) && isset($_POST['confirm_senha']) && isset($_POST['email']) && isset($_POST['telefone']) ){

		// Colocando os valores dos campos nas variáveis
		$nome_first = $_POST['nome_first'];

		$nome_last = $_POST['nome_last'];
		
		$senha = $_POST['senha'];

		$confirm_senha = $_POST['confirm_senha'];

		$email = $_POST['email'];
		
		$telefone = $_POST['telefone'];

		// Confirmação de Compatibilidade de Senha
		if ($senha == $confirm_senha) {
			$sql = "insert into tb_funcionario (cd_funcionario, nm_first, nm_last, nm_senha, nm_email, nm_telefone) VALUES (null,'$nome_first','$nome_last','$senha','$email','$telefone')";
		}
		else{
			echo "<script>alert('Confirmação de Senha Incorreta. Teste Novamente!');</script>";
		}
			
		// Efetuando a Query e Cadastrando no Banco de Dados
		if($mysqli->query($sql)){
				echo "<script>alert('Cadastro Efetuado com Sucesso');window.location = 'index.php';</script>";
		}
		else 
		{
			$result = $mysqli->query($sql);
			echo "why???";
		}
		
	} 

	

	
?>

</body>
</html>