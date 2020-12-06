<!DOCTYPE HTML>
<HTML lang="pt-br">
<head>
	<title>LEONARDO NARESSI LANES</title>
	<link rel="stylesheet" type="text/css" href="../CSS/Style.css">
		<script language="JavaScript">
		 alert("===========Logado como Administrador!!!=============");
		</script>
</head>
 <meta charset="utf-8">
	<body >
	
	 <button class="tablink2" onclick="openPage('ADCIONAR CURSOS', this, 'green')"id="defaultOpen">ADCIONAR CURSOS</button>
	 <button class="tablink2" onclick="openPage('REMOVER CURSOS', this, 'red')">REMOVER CURSOS</button>



<div id="ADCIONAR CURSOS" class="tabcontent">
  <h2>&#128064 Informe os dados do curso que deseja adcionar! &#128064</h2>
	<form action="cadastroCurso.php" method="post">
		<h1>&#128071;CADASTRO:&#128071;
			<input type="text" name="nome" placeholder="NOME DO CURSO" maxlength="30">
			<input type="submit" value="CADASTRAR">
			<input type="reset" value="CANCELAR">
		</h1>
	</form>
</div>

<div id="REMOVER CURSOS" class="tabcontent">
  <h2>&#128270 Selecione Dentre os cursos ativos qual deseja remover! &#128270</h2>
  	 <pre>
		<?php
		 $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
		 $query = $conn->prepare("SELECT * FROM curcos");
		 $query->execute();
		 
		 $results = $query->fetchall(PDO::FETCH_ASSOC);

			foreach ($results as $row){
				foreach ($row as $key => $value){//key = nome da coluna
				 			 
					if($key=='NomeCurso'){
						echo 
						 "<form action='RemoverCurso.php' method='post'>
						  <p class='sub2' ><input type='radio' name='curso' value='$value'>$value</p>";
					}
				}
						echo "<br><hr color='#312b28' width ='100%' size='16'>";
			}
						echo "<br><input type='submit' value='Confirmar' name='conf'>
						 <input type='reset' value='Limpar' name='clear'>
						 </form>";
		?>
	</pre>
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
