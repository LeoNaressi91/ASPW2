<?php
session_start();

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

echo "<link rel='stylesheet' type='text/css' href='Imagens/Style2.css'>";

		$login = isset($conn,$_POST["login"])?$_POST["login"]:0;
		$senha = isset($conn,$_POST["senha"])?$_POST["senha"]:0;
		//$login = "foi@teste";
		//$senha =123;

			/*MODO DESATUALIZADO*/
	/*No SELECT tive que colocar o que vem post entre '' e com $ em vez de :
$query = $conn->prepare("SELECT * FROM usuarios_curcos WHERE login = '$login' AND senha = '$senha'");
$query->execute();
$results = $query->fetchall(PDO::FETCH_ASSOC);*/

			/*SEGUNDO MODO PARA VERIFICAR NO BANCO*/
	$query = $conn->prepare("SELECT * FROM adm_curcos WHERE login = :login AND senha = :senha");
	$query->bindParam(':login',$login);
	$query->bindParam(':senha',$senha);
	$query->execute();
	$results = $query->fetchall(PDO::FETCH_ASSOC);

	//Neste IF tive coloca TRUE pois 0 ou 1 nã realizava a verificação
	if($results==TRUE){ 
		header('Location: CursosADM.php');
		exit();
	}
	else{
		echo "<h2>Usuario ou senha invalidos!</h2>";
		echo "<br><br><a href='../LoginAdm.html'><input type='submit' value='TENTAR LOGAR'></a>";
		echo "<br><br><a href='../cadastrarADM.html'><input type='submit' value='FAZER CADASTRO'></a>";
		exit();
	}
?>