<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <script src="../js/jquery-3.7.1.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <link rel="icon" href="../artes/cadastre-se.png">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php 
        include 'nav.php';
    ?>
<form class="row g-3 needs-validation" action="enviar.php" method="post" novalidate>
  <div class="col-md-3 mt-4">
    <label for="validationCustom01" class="form-label">Primeiro nome</label>
    <input type="text" class="form-control" id="validationCustom01" name="primeiroNome" placeholder="Digite seu nome" required>
  </div>
  <div class="col-md-3 mt-4">
    <label for="validationCustom02" class="form-label">Ultimo nome</label>
    <input type="text" class="form-control" id="validationCustom02" name="ultimoNome" placeholder="Ultimo nome" required>
  </div>
  <div class="col-md-4 mt-4">
    <label for="validationCustom03" class="form-label">Cidade</label>
    <input type="text" class="form-control" name="cidade" id="validationCustom03" placeholder="Digite sua cidade" required>
  </div>
  <div class="col-md-3 mt-4">
    <label for="validationCustom04" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Digite seu telefone" required>
  </div>
  <div class="col-md-3 mt-4">
    <label for="validationCustom04" class="form-label">Sugestão</label>
    <input type="text" class="form-control" name="sugestao" placeholder="Deixe uma sugestão(opcional)">
  </div>
  <div class="col-md-4 mt-4">
    <label for="validationCustom04" class="form-label">Estado</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Selecionar</option>
      <option value="AC">Acre</option>
<option value="AL">Alagoas</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="DF">Distrito Federal</option>
<option value="ES">Espírito Santo</option>
<option value="GO">Goiás</option>
<option value="MA">Maranhão</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="MG">Minas Gerais</option>
<option value="PA">Pará</option>
<option value="PB">Paraíba</option>
<option value="PR">Paraná</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piauí</option>
<option value="RJ">Rio de Janeiro</option>
<option value="RN">Rio Grande do Norte</option>
<option value="RS">Rio Grande do Sul</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="SC">Santa Catarina</option>
<option value="SP">São Paulo</option>
<option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>
    </select>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input p-2" type="checkbox" value="confirmado" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Confirmo meus dados
      </label>
    </div>
  </div>
  <div class="col-12 ">
    <button class="btn btn-primary p-2" type="submit">Confirmo e envio meus dados</button>
  </div>
</form>
<div id="mensagemSucesso"
     class="mt-3"
     style="display: none; width: 250px; font-size: 13px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; padding: 6px 10px;">
  Formulário enviado com sucesso!
</div>

<div style="height: 50px;"></div>

    <?php
        include 'footer.php';
    ?>
    <script>
    (() => {
  'use strict';

  const forms = document.querySelectorAll('.needs-validation');

  Array.from(forms).forEach(form => {
    // Seleciona a div da mensagem já existente no HTML
    const mensagemSucesso = document.querySelector('#mensagemSucesso');

    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
        mensagemSucesso.style.display = 'none'; // Esconde a mensagem se o form for inválido
      } else {
        event.preventDefault(); // Impede envio real
        mensagemSucesso.style.display = 'block'; // Mostra a mensagem
        form.classList.remove('was-validated'); // Remove classes de validação para resetar estilo
        form.reset(); // Limpa o formulário
      }

      form.classList.add('was-validated');
    }, false);
  });
})();

/* Mascaras */
$(document).ready(function() {
      $('#telefone').mask('(99) 99999-9999');
    });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>