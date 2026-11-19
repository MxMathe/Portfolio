<?php

    //Filtragem de dados
    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $texto= addcslashes($_POST['mensagem'])

    //E-mail de destino
    $destino = "teusdias2002@gmail.com";
    $assunto = "Dados para contato";

    //Corpo do email
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Mensagem: $texto\n";

    //Cabeçalhos do e-mail
    $cabeca = "From: teudias2002@gmail.com"."\n"."Reply-To: ".$email."\n"."X=Mailer:PHP/".phpversion();
    
    //Enviar e verificar
    if(mail($destino, $assunto, $corpo, $cabeca)){
        echo("Dados enviado com sucesso");       
    }else{
        echo("Houve um erro ao enviar");
    }else {
        echo "Método de requisição inválido.";
    }
 

?>