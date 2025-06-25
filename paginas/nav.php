<?php
// nav.php
// Este arquivo será incluído no index.php, que já define BASE_URL_PREFIX.
// Ele não precisa de tags <html>, <head>, <body>.
?>

<nav class="navbar navbar-expand-lg bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand fs-2 p-2" href="<?php echo BASE_URL_PREFIX; ?>/">Roxito</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo BASE_URL_PREFIX; ?>/?pagina=cardapio">
            Cardápio
            <i class="fa-solid fa-book me-1"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL_PREFIX; ?>/?pagina=home">
            Página Inicial
            <i class="fa-solid fa-house me-1"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL_PREFIX; ?>/?pagina=formu">
            Contato
            <i class="fa-solid fa-envelope me-1"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL_PREFIX; ?>/?pagina=sobre">
            Sobre nós
            <i class="fa-solid fa-user me-1"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>