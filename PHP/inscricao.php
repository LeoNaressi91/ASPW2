<!DOCTYPE HTML>
<HTML lang="pt-br">
<head>
 <title>LEONARDO NARESSI LANES</title>
	<link rel="stylesheet" type="text/css" href="../CSS/Style.css">
		<script language="JavaScript">
		 alert("==>Detalhes do curso serão enviados ao seu e-mail!<==");
		</script>
</head>
 <body >
	 
	<?php
	
/*USE dbphp7;
CREATE TABLE cursos_do_usuario(
	login VARCHAR(64) NOT NULL,
    curso VARCHAR(64) NOT NULL,
	dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);*/

	session_start();
	 $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
	 $curso = isset($conn,$_POST["curso"])?$_POST["curso"]:0;
	 $login = $_SESSION['nome'];
		$query = $conn->prepare("INSERT INTO cursos_do_usuario(login,curso)
		 VALUES(:login,:curso);");
		$query->bindParam(":login",$login);
		$query->bindParam(":curso",$curso);
			$result = $query->execute();

		echo "<h1>Parabens ".$login." se inscreveu no curso de: ".$curso."</h1>";
		echo "<a href='Cursos.php'><br><input type='submit' value='Voltar' name='conf'></a>";

	?>
 </body>
</HTML>
