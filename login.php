<?php
//http://localhost/projeto/login.php
if(isset($_POST['email']) && isset($_POST['senha'])){
  include_once('conexao.php');
  $usuario= $_POST['email'];
  $senha= $_POST['senha'];
  $sql= "SELECT * FROM cadastro WHERE email= '$email' and senha= '$senha' ";
  $query= mysqli_query($conexao, $sql);
  $user= $query->fetch_assoc();
  if(mysqli_num_rows($query) == 0){
      echo "<script> window.alert('Usuário ou senha INCORRETA!!!')</script>";
  }else{
      if(!isset($_SESSION)){
      session_start();
      $_SESSION['email']= $user['nome'];
      header('location:home.html');
  }

}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="estilo.css">  -->
</head>
<body>
<fieldset> 
<h2>Faça Login</h2> 
<form action="" method="post">
<label>E-mail</label><br>
<input type="email" name="email" required > <br>
<label>Senha</label><br>
<input type="password" name="senha" required > <br><br>
<input type="submit" value= "Acessar"><br><br><br><br>
</form>
<button><a href= "cadastro.html"> Faça o Cadastro </a> </button><br><br> 
</fieldset>

    
</body>
</html>