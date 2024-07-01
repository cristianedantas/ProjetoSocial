<?php
if(isset($_POST['cadastrar'])){
    include_once('conexao.php');
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $telefone1= $_POST['telefone1'];
    $telefone2= $_POST['telefone2'];
    $senha= $_POST['senha'];
    
    $sql= "INSERT INTO cadastro(nome,email,telefone1,telefone2,senha) VALUES ('$nome','$email','$telefone1','$telefone2','$senha')";
    $query= mysqli_query($conexao, $sql);
    
   if($query){
    echo "<script>alert('Dados registrados com sucesso')</script>";

   }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!--<link rel="stylesheet" href="estilo.css"> !-->
</head>
<body>
<fieldset> 
<h2>Cadastra-se</h2> 
<form action="" method="post">
<label>Nome</label><br>
<input type="text" name="nome" required > <br>

<label>E-mail</label><br>
<input type="email" name="email" required > <br>

<label>Telefone 1</label><br>
<input type="number" name="telefone1" required > <br>

<label>Telefone 2</label><br>
<input type="number" name="telefone2" required > <br>

<label>Senha</label><br>
<input type="password" name="senha" required > <br><br>

<input type="submit" name= "cadastrar" value= "Cadastrar"><br><br>
</form>
<button> <a href= "login.php"> Faça Login </a></button> <br><br>
</fieldset>
    
</body>
</html>