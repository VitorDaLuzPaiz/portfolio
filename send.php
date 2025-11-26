<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = htmlspecialchars($_POST["nome"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    if (!$email) {
        header("Location: index.html?error=1");
        exit;
    }

    $to = "vitorpaiz007@gmail.com";
    $subject = "Contato VDEV - $nome";

    $body = "Nome: $nome\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensagem:\n$mensagem\n";

    // CORRETO: From fixo + Reply-To do usuário
    $headers = "From: VDEV <vitorpaiz007@gmail.com>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: index.html?success=1");
    } else {
        header("Location: index.html?error=1");
    }
}
?>
