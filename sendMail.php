<?php
//Email para envio do form
$for = "contato@starimper.com.br";

//2 - Resgate de dados do form
$name = $_POST['inputName'];
$mail = $_POST['inputEmail'];
$phone = $_POST['inputPhone'];
$address = $_POST['inputAddress'];
$subject = $_POST['selectSubject'];
$message = $_POST['inputMessage'];

//4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mailBody = "<strong>Nome:  </strong>" . $nome;
$mailBody .= "<br>  <strong>Email: </strong>" . $mail;
$mailBody .= "<br>  <strong>Telefone: </strong>" . $phone;
$mailBody .= "<br>  <strong>Endereço: </strong>" . $address;
$mailBody .= "<br>  <strong>Assunto: </strong>" . $subject;
$mailBody .= "<br>  <strong>Mensagem: </strong>" . $message;

//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  starimper.com.br<contato@starimper.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <contato@starimper.com.br>\n"; //email do servidor //que enviou
$headers .= "X-Mailer: PHP  v" . phpversion() . "\n";
$headers .= "X-IP:  " . $_SERVER['REMOTE_ADDR'] . "\n";
$headers .= "Return-Path:  <contato@starimper.com.br>\n"; //caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";

mail($for, $subject, $mailBody, $headers);  //função que faz o envio do email.
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Google Analytics Acompanhamento -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140491285-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-140491285-1');
    </script>

    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.4.3.1.min.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="styles/css/main.css" type="text/css" charset="utf-8">
    <title>Starimper - Contato</title>
</head>

<body style="height=100vh">
    <nav class="navbar position-absolute navbar-expand-lg navbar-dark d-none d-lg-block d-xl-block">
        <div class="container">
            <a class="navbar-brand" href="/">
                <span class="logostarimper"></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-0 font-weight-normal">
                    <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="servicos.php">SERVIÇOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="empresa.php">EMPRESA</a></li>
                    <li class="nav-item"><a class="nav-link" href="fale-conosco.php">FALE CONOSCO</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar position-absolute navbar-expand-lg bg-black navbar-dark d-sm-block d-md-block d-lg-none d-xl-none">
        <div class="container">
            <a class="navbar-brand" href="/">
                <span class="logostarimper"></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-0 font-weight-normal">
                    <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="servicos.php">SERVIÇOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="empresa.php">EMPRESA</a></li>
                    <li class="nav-item"><a class="nav-link" href="fale-conosco.php">FALE CONOSCO</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container bg-white">
        <div class="row text-center py-4 pt-5 blu-text">
            <div class="col">
                <h1 class="title">Obrigado!</h1>
                <p>Recebemos o seu contato e retornaremos assim que possível!</p>
            </div>
        </div>
    </div>

    <?php require_once "common_layout/scripts.php"; ?>
    <?php require_once "common_layout/footer.php"; ?>
</body>

</html>