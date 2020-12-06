<?php
	session_start();
	 $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
	 $curso = isset($conn,$_POST["curso"])?$_POST["curso"]:0;
	 $login = $_SESSION['nome'];
	 $_SESSION["curso"] = $curso;
echo
"<!DOCTYPE HTML>
<HTML lang='pt-br'>
	<head>
		<meta charset='utf-8'>
		<title>LEONARDO NARESSI LANES</title>
		<link rel='stylesheet' type='text/css' href='../CSS/Style2.css'>
	</head>
	<body>
     <h2>$login para concluir o curso do ".$_SESSION['curso']." deve enviar a grade de         respostas!
	 </h2>
	 
		 <center><input type='file' name='arquivo'><BR>
		 <a href='Certificado.php'><input type='submit' NAME='Enviar' value='Enviar respostas!'></a>
		 <a href='Cursos.php'><input type='submit' value='Voltar'></a>
	
	</body>
	<font size='1' color='gray'><div align='right'>Trabalho feito por LEONARDO N. LANES em 2020 </div></font>
</HTML>";
?>