<?php

$subfolder = '';
// Rodar com xamp
if (isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] === 'localhost' || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false)) {
    $script_filename = $_SERVER['SCRIPT_FILENAME'];
    $document_root = $_SERVER['DOCUMENT_ROOT'];

    // Procura pelo subdiretório do projeto
    $relative_path = str_replace($document_root, '', dirname($script_filename));
    $relative_path = trim($relative_path, '/\\'); // Remove barras no início/fim

    if (!empty($relative_path)) {
        $subfolder = '/' . $relative_path;
    }
}
define('BASE_URL_PREFIX', $subfolder);

// home é pagina padrao
$page = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

// caminhos
$pages_dir = 'paginas/'; // Diretorio para as paginas de conteudo, nav e footer

// Array de paginas válidas
$valid_pages = [
    'home'     => 'home.php',
    'cardapio' => 'cardapio.php',
    'formu'    => 'formu.php',
    'sobre'    => 'sobre.php',
    'enviar'   => 'enviar.php', 
    '404'      => '404.php'
];



if ($page === 'enviar') {
    if (file_exists($pages_dir . $valid_pages['enviar'])) {
        require_once $pages_dir . $valid_pages['enviar'];
        exit; // *** MUITO IMPORTANTE: Encerra o script aqui! ***
    } else {
        // Se, por algum motivo, enviar.php não existir, retorna um erro JSON
        header('Content-Type: application/json');
        echo json_encode([
            "status" => "erro",
            "mensagem" => "Erro interno: Script de envio não encontrado."
        ]);
        exit;
    }
}


// Se não for a página 'enviar'
header('Content-Type: text/html; charset=utf-8'); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roxito - <?php echo ucfirst($page); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=d9fextlI"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@3.3.0/tsparticles.bundle.min.js"></script>

    <link rel="icon" href="<?php echo BASE_URL_PREFIX; ?>/Artes/house.png">
    
    <link rel="stylesheet" href="<?php echo BASE_URL_PREFIX; ?>/css/index.css">
    <link rel="stylesheet" href="<?php echo BASE_URL_PREFIX; ?>/css/card.css">
</head>
<body>

<?php
// nav.php está em paginas/
if (file_exists($pages_dir . 'nav.php')) {
    include $pages_dir . 'nav.php';
} else {
    echo '<p style="color: red;">Erro: Arquivo de navegação (nav.php) não encontrado.</p>';
}
?>

<div class="main-content">
    <?php
    // Puxa a página e a inclui
    $file_to_include = '';
    if (array_key_exists($page, $valid_pages) && file_exists($pages_dir . $valid_pages[$page])) {
        $file_to_include = $pages_dir . $valid_pages[$page];
    } else {
        // tenta carregar o 404
        if (array_key_exists('404', $valid_pages) && file_exists($pages_dir . $valid_pages['404'])) {
            $file_to_include = $pages_dir . $valid_pages['404'];
            http_response_code(404); // status HTTP 404
        } else {
            echo "<div style='text-align: center; padding: 50px;'>";
            echo "<h1>Erro 404: Página não encontrada.</h1>";
            echo "<p>A página <strong>'" . htmlspecialchars($page) . "'</strong> não existe ou não pode ser carregada.</p>";
            echo "<p>Por favor, verifique a URL ou tente novamente.</p>";
            echo "</div>";
        }
    }

    if (!empty($file_to_include)) {
        include $file_to_include;
    }
    ?>
</div>

<?php
// footer
if (file_exists($pages_dir . 'footer.php')) {
    include $pages_dir . 'footer.php';
} else {
    echo '<p style="color: red;">Erro: Arquivo de rodapé (footer.php) não encontrado.</p>';
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>