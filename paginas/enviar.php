<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $primeiroNome = trim($_POST["primeiroNome"] ?? '');
    $ultimoNome   = trim($_POST["ultimoNome"] ?? '');
    $cidade       = trim($_POST["cidade"] ?? '');
    $telefone     = trim($_POST["telefone"] ?? '');
    $sugestao     = trim($_POST["sugestao"] ?? '');

    if (!$primeiroNome || !$ultimoNome || !$cidade || !$telefone) {
        echo json_encode([
            "status" => "erro",
            "mensagem" => "Preencha todos os campos obrigatórios."
        ]);
        exit;
    }

    $destinatario = "aitomdonatoni@gmail.com"; // Substitua pelo seu e-mail real
    $assunto = "Nova mensagem do formulário de contato";

    $mensagem = "Dados enviados pelo formulário:\n\n";
    $mensagem .= "Nome: $primeiroNome $ultimoNome\n";
    $mensagem .= "Cidade: $cidade\n";
    $mensagem .= "Telefone: $telefone\n";
    $mensagem .= "Sugestão: $sugestao\n";

    $headers = "From: formulario@seudominio.com\r\n";
    $headers .= "Reply-To: formulario@seudominio.com\r\n";

    if (mail($destinatario, $assunto, $mensagem, $headers)) {
        echo json_encode([
            "status" => "sucesso",
            "mensagem" => "Mensagem enviada com sucesso!"
        ]);
    } else {
        echo json_encode([
            "status" => "erro",
            "mensagem" => "Erro ao enviar. Tente novamente mais tarde."
        ]);
    }
} else {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Requisição inválida. Use método POST."
    ]);
}
?>
