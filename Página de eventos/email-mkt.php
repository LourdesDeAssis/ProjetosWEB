<?php
    //Variáveis

    $emailenviar = $_POST['email'];


    $to = $emailenviar;
    $subject = "Cadastro para notificação por email";
    $txt = "Seu email foi cadastrado para receber notificações de novidades sobre a campanha de vacinaçaõ na cidade de Fortaleza, agora você ficará sabendo de tudo sobre a campanha.";
    $headers = "From: agendsus.saude@gmail.com" . "\r\n";
    
    mail($to,$subject,$txt,$headers);
?>




    // formatando nossa mensagem (que será envaida ao e-mail)
    $mensagem= 'Seu email foi cadastrado para receber notificações de novidades sobre a campanha de vacinaçaõ na cidade de Fortaleza, agora você ficará sabendo de tudo sobre a campanha.';

    // abaixo as requisições do arquivo phpmailer
    require("phpmailer/src/PHPMailer.php");
    require("phpmailer/src/SMTP.php");
    require ("phpmailer/src/Exception.php");

    // chamando a função do phpmailer

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP(); // Não modifique
$mail->Host       = 'smtp.gmail.com';  // SEU HOST (HOSPEDAGEM)
$mail->SMTPAuth   = true;                        // Manter em true
$mail->Username   = 'agendsus.saude@gmail.com';   //SEU USUÁRIO DE EMAIL
$mail->Password   = 'agendsus2022';                   //SUA SENHA DO EMAIL SMTP password
$mail->SMTPSecure = 'ssl';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
$mail->Port       = 587;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
$mail->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO

//Recipients
$mail->setFrom('agendsus.saude@gmail.com', 'Site');  //DEVE SER O MESMO EMAIL DO USERNAME
$mail->addAddress($emailenviar);     // QUAL EMAIL RECEBERÁ A MENSAGEM!
// $mail->addAddress('ellen@example.com');    // VOCÊ pode incluir quantos receptores quiser

// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Cadastro para notificação por email'; //ASSUNTO
$mail->Body    = $mensagem;  //CORPO DA MENSAGEM


// $mail->send();
if(!$mail->Send()) {
    echo "<script>alert('Erro ao enviar o E-Mail');window.location.assign('index.php');</script>";
 }else{
    echo "<script>alert('E-Mail enviado com sucesso!');window.location.assign('index.php');</script>";
 }
 die
?>













  // emails para quem será enviado o formulário
    $email = "agendsus.saude@gmail.com";
    $destino = $emailenviar;
    $assunto = "Cadastro para notificação por email";

  // É necessário indicar que o formato do e-mail é html
    $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: AgendSUS <$emailenviar>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

    $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
    } else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "";
    }
?>