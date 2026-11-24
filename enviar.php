<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $telefone = htmlspecialchars(trim($_POST['telefone'] ?? ''));
    $texto = htmlspecialchars(trim($_POST['mensagem'] ?? ''));

    // Validar email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "E-mail inválido.";
        exit;
    }

    $destino = "teusdias2002@gmail.com";
    $assunto = "Dados para contato - $nome";

    $corpo  = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Mensagem: $texto\n";

    $cabeca  = "From: teusdias2002@gmail.com\r\n";
    $cabeca .= "Reply-To: $email\r\n";
    $cabeca .= "X-Mailer: PHP/" . phpversion();

    if (mail($destino, $assunto, $corpo, $cabeca)) {
        echo "Dados enviados com sucesso!";
    } else {
        echo "Houve um erro ao enviar.";
    }

} else {
    echo "Método de requisição inválido.";
}
?>