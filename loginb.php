<?php 
$modo = "";
include 'conexao.php';

  if(isset($_POST['modo'])) {
  $modo = $_POST['modo'];
  }
  
  $login = $senha = "";
  
  if(isset($_POST['login'])&&isset($_POST['senha'])) {
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  }

  if($modo == 'inserir') {
  $sql = "SELECT * FROM valores WHERE login='".$login."' AND senha='".$senha."';";
     $result = $conn->query($sql);
     $row = $result->fetch_assoc();


  if($row) {
  echo "<script> alert('login correto');
        window.location = 'dado.php';</script>";

}
 else 
  {echo "<script> alert('login incorreto');
        window.location = 'loginb.php'; </script>";
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Modelo - Login</title>
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
    font-size:20px;  
    text-align:left;
    margin-left: 1%;
    padding:20px;
  }

 #words{
    float: left;
    margin-left: 3%;
  }

#foto{
    
    width: 25%;
    height: 100px;
    margin-top:10px;  
    padding-left: 40px;
    margin-left: 32%;
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

  #reg{
    text-align: center;
   
    margin-left: 175%;
  }

</style>


</head>
<body class="body">
<div class='caixadecadastro'>
  <img id="foto"src="modelo.png">
  <h1 id="title">Enter your login and password to get in!</h1>
 <form method="post" action="loginb.php">
 <div id="words">
   <label>Login:</label>
   <input type="text" name="login" id="login" placeholder="          Enter your login" required>
   <br><br>
   </form>
   <label>Password:</label>
   <input type="password" name="senha" id="senha" placeholder="       Enter your password" required>
   <br><br>
   <div id="reg">
   <input type="hidden" name="modo" id="modo" value="inserir">
   <button class="but">Enter</button>
  </form>
</div>


</body>
</html>