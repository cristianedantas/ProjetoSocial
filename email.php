<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);

ini_set('smtp_port', 587);
$to = "dantas.cristiane@gruposervices.com.br";
$subject = "Contato Formulário Sonoridade em Ação";
$body = "Nome: ".$nome. "\r\n".
        "E-mail: ".$email. "\r\n".
         "Mensagem: " .$message;
$header = "From:dantas.cristiane@gruposervices.com.br"."\r\n".
          "Reply-To:".$email."\e\n".
          "X=Mailer:PHP/".phpversion();
        
if(mail($to, $subject, $body, $header)){

    echo "Formulário enviado com sucesso!";

}else{
    echo "Formulário não foi enviado";
}

}
?>