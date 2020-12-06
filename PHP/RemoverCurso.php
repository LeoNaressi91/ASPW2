<!DOCTYPE HTML>
<HTML lang="pt-br">
<head>
 <title>LEONARDO NARESSI LANES</title>
	<link rel="stylesheet" type="text/css" href="../CSS/Style.css">
		<script language="JavaScript">
		 alert("==>Curso Removido com sucesso!!!<==");
		</script>
</head>
	<body >
		<?php
			$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
			$curso = isset($conn,$_POST["curso"])?$_POST["curso"]:0;
		
			$query = $conn->prepare("DELETE FROM curcos WHERE NomeCurso = :curso");
			$query->bindParam(':curso',$curso);
			$result = $query->execute();

				if (!$result){
					var_dump($query->errorInfo());
					exit;
				 }
				else{
					echo "<center><h2>Curso:<p class='sub'> $curso </p>foi 		  removido!</h2>
							<a href='CursosADM.php'><input type='submit' value='VOLTAR'></a>";
				}
?>