<?php
// se a caixa do e-mail não tiver vazia
    if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['message']);

    $to = "ad.gt@hotmail.com"; // e-mail que será enviado os dados do formulário
    $subject = "Contato - Portifólio";

    // dados dos formulário
    $corpo = "Nome: ". $nome. "\n".
            "E-mail: ". $email. "\n".
            "Assunto: ". $assunto. "\n".
            "Mensagem: ". $mensagem;

    // IMPORTANTE! aqui tem que ser o e-mail que o script tá rodando
    $header = "From: adenilson.dev@hostigator.com". "\r\n".
    "Replay-To:".$email. "\r\n". "X-Mailer:PHP/".phpversion();
    // replay-to: vai responder para o e-mail enviado
    // X-Mailer:PHP/".phpversion(): precisa estar concatenado com isso, a última versão do PHP

    // função para mostrar se o e-mail foi enviado ou não
    if(mail($to,$subject,$corpo,$header)){
        echo "E-mail enviado com sucesso.";
    } else{
        echo "ATENÇÃO! E-mail não enviado. Favor tentar novamente.";
    }
    

}
?>