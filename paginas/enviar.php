<?php
// diz pro navegador que é JSON
header("Content-Type: application/json");
// verifica como o formulario foi postado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //coleta os dados do formulario
    $primeiroNome = trim($_POST["primeiroNome"] ?? '');
    $ultimoNome   = trim($_POST["ultimoNome"] ?? '');
    $cidade       = trim($_POST["cidade"] ?? '');
    $telefone     = trim($_POST["telefone"] ?? '');
    $sugestao     = trim($_POST["sugestao"] ?? '');

    // valida se os campos estao preenchidos
    if (!$primeiroNome || !$ultimoNome || !$cidade || !$telefone) {
        echo json_encode([
            "status" => "erro",
            "mensagem" => "Preencha todos os campos obrigatórios."
        ]);
        exit;
    }
    // email e assunto
    $destinatario = "aitomdonatoni@gmail.com"; // Substitua pelo seu e-mail real
    $assunto = "Nova mensagem do formulário de contato";

    //corpo do JSON
    $mensagem = "Dados enviados pelo formulário:\n\n";
    $mensagem .= "Nome: $primeiroNome $ultimoNome\n";
    $mensagem .= "Cidade: $cidade\n";
    $mensagem .= "Telefone: $telefone\n";
    $mensagem .= "Sugestão: $sugestao\n";

    $headers = "From: formulario@seudominio.com\r\n";
    $headers .= "Reply-To: formulario@seudominio.com\r\n";

    //envia de fato o email ou não
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
