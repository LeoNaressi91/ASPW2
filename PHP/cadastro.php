<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

echo "<link rel='stylesheet' type='text/css' href='Imagens/Style2.css'>";

	$login = isset($conn,$_POST["login"])?$_POST["login"]:0;
	$senha = isset($conn,$_POST["senha"])?$_POST["senha"]:0;
	$confirmarSenha = isset($conn,$_POST["confirmarSenha"])?$_POST["confirmarSenha"]:0;
	//verificar preenchimento dos campos
	if(!empty($login) && !empty($senha) && !empty($confirmarSenha) && ($senha)==($confirmarSenha))
	{	
		$query = $conn->prepare("INSERT INTO usuarios_curcos (login,senha) VALUES (:login,:senha)");
		echo "<h1>Usuario: $login<br></h1>";
		
		$query->bindParam(":login",$login);
		$query->bindParam(":senha",$senha);

		$result = $query->execute();
		

			echo "<h2>Cadastrado com sucesso!</h2>";	
			echo "<br><br><a href='../Login.html'><input type='submit' value='LOGAR'></a>";
			echo "<br><br><a href='../cadastrar.html'><input type='submit' value='CADASTRAR'></a>";
	}else{
		echo "<h2>Preencha todos os campos corretamente!</h2>";
		echo "<br><br><a href='Login.html'><input type='submit' value='VOLTAR'></a>";
		}
?>	