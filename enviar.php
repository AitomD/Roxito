<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $primeiroNome = trim($_POST["primeiroNome"]);
    $ultimoNome   = trim($_POST["ultimoNome"]);
    $cidade       = trim($_POST["cidade"]);
    $estado       = trim($_POST["estado"]);
    $telefone     = trim($_POST["telefone"]);
    $sugestao     = trim($_POST["sugestao"]);

    $destinatario = "aitomdonatoni@gmail.com";
    $assunto = "Nova mensagem do formulário de contato";

    $mensagem = "Dados enviados pelo formulário:\n\n";
    $mensagem .= "Nome: $primeiroNome $ultimoNome\n";
    $mensagem .= "Cidade: $cidade\n";
    $mensagem .= "Estado: $estado\n";
    $mensagem .= "Telefone: $telefone\n";
    $mensagem .= "Sugestão: $sugestao\n";

    $headers = "From: Roxito Açaí <aitomdonatoni@gmail.com>\r\n";
    $headers .= "Reply-To: aitomdonatoni@gmail.com\r\n";

    if (mail($destinatario, $assunto, $mensagem, $headers)) {
        echo "<div style='background:#d4edda; color:#155724; padding:10px; border:1px solid #c3e6cb; border-radius:4px;'>
        Mensagem enviada com sucesso!
        </div>";
    } else {
        echo "<div style='background:#f8d7da; color:#721c24; padding:10px; border:1px solid #f5c6cb; border-radius:4px;'>
        Erro ao enviar a mensagem. Tente novamente.
        </div>";
    }
} else {
    echo "Acesso inválido.";
}
?>

