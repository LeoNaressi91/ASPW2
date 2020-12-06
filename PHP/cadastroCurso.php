<!DOCTYPE HTML>
<HTML lang="pt-br">
<link rel="stylesheet" type="text/css" href="../CSS/Style.css">
<?php

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
	echo "<link rel='stylesheet' type='text/css' href='Imagens/Style2.css'>";
	$nome = isset($conn,$_POST["nome"])?$_POST["nome"]:0;
	
		$query = $conn->prepare("INSERT INTO curcos (NomeCurso) VALUES (:NomeCurso)");
		$query->bindParam(":NomeCurso",$nome);
		$result = $query->execute();
		
		if (!$result){
			echo "<h2>Preencha todos os campos corretamente!</h2>";
			echo "<br><br><a href='CursosADM.php'><input type='submit' value='VOLTAR'></a>";
				
			
		}else{
				echo
					"<script language='JavaScript'>
					 alert('===========Curso Cadastrado com sucesso!!!=============');
					</script>
				<center><h1>Curso:<p class='sub'> $nome </p> esta ativo!<h1>
				<center><a href='CursosADM.php'><input type='submit' value='VOLTAR'></a>";
		}
?>	
</HTML>