<?php
	session_start();
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
	 $curso = isset($conn,$_POST["curso"])?$_POST["curso"]:0;
	 $login = $_SESSION['nome'];
	 $curso = $_SESSION['curso'];
echo
"<!DOCTYPE HTML>
<HTML lang='pt-br'>
	<head>
		<meta charset='utf-8'>
		<title>LEONARDO NARESSI LANES</title>
		<link rel='stylesheet' type='text/css' href='../CSS/Style2.css'>
	</head>
	<body>
     <h1>Parabens ".$login." por concluir o curso de ".$curso." agora pode emitir o certificado!
		
		 <a href='emicao.php'><input type='submit' value='Emitir'></a>
		 
		 <a href='Cursos.php'><input type='submit' value='Voltar'></a>
		
	 </h1>
	</body>
	<font size='1' color='gray'><div align='right'>Trabalho feito por LEONARDO N. LANES em 2020 </div></font>
</HTML>"
?>