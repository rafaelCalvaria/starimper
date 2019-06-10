<?php
  //Email para envio do form
  $for = "rafaelcalvaria@gmail.com";

  //2 - Resgate de dados do form
  $name = $_POST['inputName'];
  $mail = $_POST['inputEmail'];
  $phone = $_POST['inputPhone'];
  $address = $_POST['inputAddress'];
  $subject = $_POST['selectSubject'];
  $message = $_POST['inputMessage'];

   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mailBody = "<strong>Nome:  </strong>".$nome;
  $mailBody .= "<br>  <strong>Email: </strong>".$mail;
  $mailBody .= "<br>  <strong>Telefone: </strong>".$phone;
  $mailBody .= "<br>  <strong>Endereço: </strong>".$address;
  $mailBody .= "<br>  <strong>Assunto: </strong>".$subject;
  $mailBody .= "<br>  <strong>Mensagem: </strong>".$message;
 
    //5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  starimper.com.br<contato@starimper.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <contato@starimper.com.br>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <contato@starimper.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";
 
    mail($for, $subject, $mailBody, $headers);  //função que faz o envio do email.
?>
