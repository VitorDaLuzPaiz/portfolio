<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    $to = "vitorpaiz007@gmail.com";
    $subject = "Contato do Portfólio - $nome";
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: index.php?success=1");
    } else {
        header("Location: index.php?error=1");
    }
}
?>
