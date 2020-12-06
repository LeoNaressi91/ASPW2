<!DOCTYPE HTML>
<HTML lang="pt-br">
<head>
	<title>LEONARDO NARESSI LANES</title>
	<link rel="stylesheet" type="text/css" href="../CSS/Style.css">
		<script language="JavaScript">
		 alert("===========Logado com sucesso!!!=============");
		</script>
</head>
<meta charset="utf-8">
	<body >
	
	<button class="tablink" onclick="openPage('BEM VINDO', this, 'red')"id="defaultOpen">BEM VINDO</button>
	<button class="tablink" onclick="openPage('CURSOS', this, '#d5d5d5')">CURSOS</button>
	<button class="tablink" onclick="openPage('CURSOS ATIVOS', this, 'blue')">CURSOS ATIVOS</button>

<div id="BEM VINDO" class="tabcontent">
    <h2>Paixão por ensinar!</h2> 
	<p class="sub">Estar junto é mais do que estar perto! Aproveite a quarentena para se capacitar com nossos cursos, aproveite seu o tempo e se destaque no mercado de trabalho!<br>
	Disponibilizamos os melhores cursos gratuitos online. Nossa metodologia é composta por muitas esquematizações e mapas mentais para que você consiga APRENDER de forma mais fácil, MEMORIZAR de forma mais efetiva, REVISAR de forma mais rápida.</p>
</div>

<div id="CURSOS" class="tabcontent">
  <h2>&#128064 Veja alguns dos Cursos gratuitos que estamos disponibilizando!&#128064</h2>
	<form action="inscricao.php" method="post">
	 <pre>
		<?php
		session_start();
		 $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
		 
		 $query = $conn->prepare("SELECT * FROM curcos");
		 $query->execute();
		 
		 $results = $query->fetchall(PDO::FETCH_ASSOC);

		 //print_r($results);
		 //var_dump($results);
		 $nome=$_SESSION["login"];
		echo "<h2>Bem vindo, ".$nome;
			foreach ($results as $row){
				foreach ($row as $key => $value){//key = nome da coluna
				 			 
				 if($key=='NomeCurso'){
					echo "<form action='PHP/inscricao.php' method='post'>
						  <p class='sub2' ><input type='radio' name='curso' value='$value'>$value</p>";
						  $_SESSION["nome"] = $nome;
						  
				 }
				}
					echo "<br><hr color='#312b28' width ='100%' size='16'>";
			}
					echo "<br><input type='submit' value='Confirmar' name='conf'>
						<input type='reset' value='Limpar' name='clear'>
						</form>";
		?>
</div>

<div id="CURSOS ATIVOS" class="tabcontent">
  <h2>&#128270 Estes sãos seus cursos ativos!</h2>
	<?php
	 
		$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
		$login = $_SESSION["login"];
		$query = $conn->prepare("SELECT curso FROM cursos_do_usuario WHERE login = '$login'");
		 $query->execute();
		 $results = $query->fetchall(PDO::FETCH_ASSOC);

		 //print_r($results);
		 //var_dump($results);
		echo "<h2>Bem vindo, ".$login;
			foreach ($results as $row){
				foreach ($row as $key => $value){//key = nome da coluna
				 			 
				 if($key=='curso'){
					echo "<form action='Conclusao.php' method='post'>
						  <p class='sub2' ><input type='radio' name='curso' value='$value'>$value</p>";
				 }
				}
					echo "<br><hr color='#312b28' width ='100%' size='16'>";
			}
			echo "<br><input type='submit' value='Concluir Curso' name='conf'>
						<input type='reset' value='Limpar' name='clear'>
						</form>";
		?>
</div>
  
  
</div>
 
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
   //Para volvar no menu
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  //Para volvar no menu
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}
document.getElementById("defaultOpen").click();
</script>
	
	
	 <font size="1" color="gray"><div align="right">Trabalho feito por LEONARDO N. LANES em 2020 </div></font>
	</body>
</html>
