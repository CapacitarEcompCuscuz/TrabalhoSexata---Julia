<?php 
$modo = "";
include 'conexao.php';
$modo = "";


  if(isset($_POST['modo'])) {
  $modo = $_POST['modo'];
  }
  
  
  $nome = "";
  
  if (isset($_POST['nome'])){
  	$nome = $_POST['nome'];
  }

  $email = "";
  if (isset($_POST['email'])){
  	$email = $_POST['email'];
  }

  $cpf = "";
  if (isset($_POST['cpf'])){
  	$cpf = $_POST['cpf'];
  }

  $rg = "";
  if (isset($_POST['rg'])){
  	$rg = $_POST['rg'];
  }

  $idade = "";
  if (isset($_POST['idade'])){
  	$idade = $_POST['idade'];
  }

  $nomep = "";
  if (isset($_POST['nomep'])){
  	$nomep = $_POST['nomep'];
  }

  $nomem = "";
  if (isset($_POST['nomem'])){
  	$nomem = $_POST['nomem'];
  }

  $nasc = "";
  if (isset($_POST['nasc'])){
  	$nasc = $_POST['nasc'];
  }


  $login = "";
  if (isset($_POST['login'])){
  	$login = $_POST['login'];
  }


  $senha = "";
  if (isset($_POST['senha'])){
  	$senha = $_POST['senha'];
  }

  if($modo == 'inserir') {
  $sql = "INSERT INTO valores(nome, email, cpf, rg, idade, nomep, nomem, nasc, login, senha) VALUES ('".$nome."', '".$email."', '".$cpf."','".$rg."', '".$idade."', '".$nomep."', '".$nomem."', '".$nasc."', '".$login."', '".$senha."')";
    if($conn->query($sql)){
     echo "<script> alert ('You are register!');
     window.location = 'loginb.php';</script>";
  }
}

?>
<!DOCTYPE html>
<html>
<head>
 <title>Modelo - Cadastro</title>
 <meta charset="utf-8">  
 <style>
  .caixadecadastro
  {
   margin-left: 8%;
   margin-top: 2%;

   text-align: left;
   float: left;
   width: 80%;
   background-color: rgba(255,255,255,0.5);
   font-family:Times New Roman;
   font-size: 20px;
   border: 2px solid rgba(255,255,255,0.7);
   padding: 2%;
  }

  .button
  {
   padding: 15px 30px;
   text-align: center;
   font-size: 8px;
   width: 45%;
  }
  
  .body {
   margin: 0px;
   padding: 0px;
   background-image: url("n.jpg");
   background-position: center;
 }
  #title{
  	font-size:25px;  
  }
  .words{
  	float: left;
  	margin-left: 3%;
  }

  .mf{
  	margin-left: 3%
  }
 
  #db{
  	float:left;
  	margin-left: 3%;
  	margin-right: 3%;
  }

  #reg{
  	text-align: center;
  	float: center;
  }

  #let{
  	font-size:20px;
  }
#foto{
		
		width: 25%;
		height: 100px;
		margin-top:10px;	
	}
	.but {
  	background-color:rgb(60, 60, 60);
  	border: none;
  	color: white;
  	padding: 20px;
  	text-align: center;
  	font-size: 16px;
  	opacity: 0.8;
  	transition: 0.3s;
  	cursor: pointer;
}
	.but:hover {opacity: 0.5}



 </style>
</head>

<body class ='body'>
 <div class='caixadecadastro'>
  <img id="foto"src="modelo.png">
  <h1 id="title">Register yourself to recive more info about us!</h1>
  <br>
  <form method="post" action="projetob.php">
   <div class="words">
   <label><b>Name:<b></label>
   <input type="text" name="nome" id="nome" placeholder="           Enter your name" required>
   <br><br>
   </div>
   <div class="words">
   <label><b>E-mail:</b></label>
   <input type="text" name="email" id="email" placeholder="         Enter your e-mail" required>
   <br><br>
   </div>
   <div class="words">
   <label><b>CPF:</b></label>
   <input type="text" name="cpf" id="cpf" placeholder="           Enter your CPF" required>
   <br><br>
   </div>
   <div class="words">
   <label><b>RG:</b></label>
   <input type="text" name="rg" id="rg" placeholder="           Enter your RG" required>
   <br><br>
   </div>
   <div class="words">
   <label><b>Age:</b></label>
   <input type="text" name="idade" id="age" placeholder="           Enter your age" required>
   <br><br>
   </div>
   <div id="db">
   <label><b>Date of Birth:</b></label>
   <input type="text" name="nasc" id="nasc" placeholder="     Enter your date of birth" required>
   <br><br>
   </div>
   <div class="mf">
   <label><b>Father's name:</b></label>
   <input type="text" name="nomep" id="nomep" placeholder="    Enter your Father's name" required>
   <br><br>
   </div>
   <div class="mf">
   <label><b>Mother's name:</b></label>
   <input type="text" name="nomem" id="nomem" placeholder="    Enter your Mother's name" required>
   <br><br>
   </div>
   <h1 id="let">Now create your own login and password:</h1>
   <div >
   <label>Login:</label>
   <input type="text" name="login" id="login" placeholder="          Enter your login" required>
   <br><br>
   </form>
   <div>
   <label>Password:</label>
   <input type="password" name="senha" id="senha" placeholder="       Enter your password" required>
   </div>
   <br><br>
   <div id="reg">
   <input type="hidden" name="modo" id="modo" value="inserir">
   <button class="but">Register</button>
  </form>
</div>
 </div>



</body>

</html>