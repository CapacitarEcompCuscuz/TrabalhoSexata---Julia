<?php
include 'conexao.php';
  
	$sql = "SELECT * FROM valores;";
	$result = $conn->query($sql) or die ($conn->error);
	


?>

<!DOCTYPE html>
<html>
<head>
	<title>Modelo - Dados</title>
<style>
	.caixadecadastro
  {
   margin-left: 2%;
   margin-top: 2%;

   text-align: left;
   float: left;
   width: 90%;
   background-color: rgba(255,255,255,0.5);
   font-family:Times New Roman;
   font-size: 20px;
   border: 2px solid rgba(255,255,255,0.7);
   padding: 2%;
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
  	width: 20%;
  	margin-left: 20%;
  	margin-top: 40%;

}
	.but:hover {opacity: 0.5}
  	.butt {
  	background-color:rgb(60, 60, 60);
  	border: none;
  	color: white;
  	padding: 20px;
  	text-align: center;
  	font-size: 16px;
  	opacity: 0.8;
  	transition: 0.3s;
  	cursor: pointer;
  	width: 20%;
  	margin-left: 20%;
  	margin-top: 30%;

}
	.butt:hover {opacity: 0.5}

	a{
		color: white;
		font-family:Times New Roman;
		font-size: 12px;
		text-decoration: none;
		padding-bottom: 20px;
	}

  .body {
   margin: 0px;
   padding: 0px;
   background-image: url("n.jpg");
   background-position: center;
 }

 	#dis{
 		padding: 5%;
 	}
</style>

</head>
<body class="body">
	<div class="caixadecadastro">
	<table border="3">
	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>E-mail</td>
		<td>CPF</td>
		<td>RG</td>
		<td>Age</td>
		<td>Father's Name</td>
		<td>Mother's Name</td>
		<td>Date of Birth</td>
		<td>Login</td>
		<td>Password</td>
	</tr>
		<?php while($row = $result->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $row ['id']; ?></td>
		<td><?php echo $row ['nome']; ?></td>
		<td><?php echo $row ['email']; ?></td>
		<td><?php echo $row ['cpf']; ?></td>
		<td><?php echo $row ['rg']; ?></td>
		<td><?php echo $row ['idade']; ?></td>
		<td><?php echo $row ['nomep']; ?></td>
		<td><?php echo $row ['nomem']; ?></td>
		<td><?php echo $row ['nasc']; ?></td>
		<td><?php echo $row ['login']; ?></td>
		<td><?php echo $row ['senha']; ?></td>
		<td><div class="butt">
		<a href="editar.php?id<?php echo $row["id"]; ?>">Edit</a>
		</div></td>
	</tr>
		<?php  } ?>


	</table>

	


</div>
</body>
</html>