<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" href="../artes/hamburguer.png">

    <!-- CSS -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="card.css">
</head>

<body>
    <?php include 'nav.php'; ?>

    <!-- Lanches Especiais -->
    <div class="cardapios container my-4">
        <h2 class="text-center">Lanches Especiais</h2>
        <div class="table-responsive">
            <table class="table table-bordered align-middle tabela-stl">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ingredientes</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Rodeio 🍔</th>
                        <td>Pão, hambúrguer de 160g, cheddar, bacon, anel de cebola, tomate, alface e barbecue.</td>
                        <td>R$35,00</td>
                    </tr>
                    <tr>
                        <th>Misturinha 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, calabresa, frango e bacon em fatias.</td>
                        <td>R$35,00</td>
                    </tr>
                    <tr>
                        <th>Romeu 🍔</th>
                        <td>Pão, hambúrguer de 160g, 3 fatias de queijo, goiabada, bacon e rúcula.</td>
                        <td>R$29,00</td>
                    </tr>
                    <tr>
                        <th>Rúcula 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, rúcula, molho de mostarda, bacon e mel.</td>
                        <td>R$35,00</td>
                    </tr>
                    <tr>
                        <th>Rúcula Cream Cheese 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, rúcula, molho de mostarda, bacon, mel e cream cheese.</td>
                        <td>R$35,00</td>
                    </tr>
                    <tr>
                        <th>Costela Cream Cheese 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, alface, tomate, cebola caramelizada, bacon e cream cheese.</td>
                        <td>R$35,00</td>
                    </tr>
                    <tr>
                        <th>Costela Barbecue 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, alface, tomate, cebola caramelizada e bacon em fatias.</td>
                        <td>R$32,00</td>
                    </tr>
                    <tr>
                        <th>Caipira 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, alface, tomate, milho, batata palha, frango em cubos e bacon em fatias.</td>
                        <td>R$35,00</td>
                    </tr>
                    <tr>
                        <th>Tropical 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, abacaxi caramelizado, alface, tomate e bacon em fatias.</td>
                        <td>R$35,00</td>
                    </tr>
                    <tr>
                        <th>Big Costa 🍔</th>
                        <td>Pão, 2 hambúrgueres de 160g, queijo cheddar, 2 ovos e bacon em fatias.</td>
                        <td>R$37,00</td>
                    </tr>
                    <tr>
                        <th>Burguer Costa 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo cheddar, ovo e bacon em fatias.</td>
                        <td>R$28,00</td>
                    </tr>
                    <tr>
                        <th>Cheese Burguer 🍔</th>
                        <td>Pão, hambúrguer, queijo, cebola roxa, picles, alface, tomate, bacon e cream cheese.</td>
                        <td>R$33,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Lanches Tradicionais -->
    <div class="cardapios container my-4">
        <h2 class="text-center">Lanches Tradicionais</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle tabela-stl">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ingredientes</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>X-Salada 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, alface, tomate, milho e batata palha.</td>
                        <td>R$22,00</td>
                    </tr>
                    <tr>
                        <th>X-Bacon 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, alface, tomate, milho, batata palha e bacon em fatias.</td>
                        <td>R$28,00</td>
                    </tr>
                    <tr>
                        <th>X-Calabresa 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, alface, tomate, milho, batata palha e calabresa.</td>
                        <td>R$28,00</td>
                    </tr>
                    <tr>
                        <th>X-Frango 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, alface, tomate, milho, batata palha e frango em cubos.</td>
                        <td>R$28,00</td>
                    </tr>
                    <tr>
                        <th>X-Tudo 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo, alface, tomate, milho, batata palha, bacon, ovo, salsicha e calabresa.</td>
                        <td>R$48,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Lanches Smash -->
    <div class="cardapios container my-4">
        <h2 class="text-center">Lanches Smash</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle tabela-stl">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ingredientes</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Smash 🍔</th>
                        <td>Pão, hambúrguer de 160g, queijo cheddar, bacon em fatias e picles.</td>
                        <td>R$26,00</td>
                    </tr>
                    <tr>
                        <th>Double Smash 🍔</th>
                        <td>Pão, 2 hambúrgueres de 160g, queijo cheddar, bacon em fatias e picles.</td>
                        <td>R$34,00</td>
                    </tr>
                    <tr>
                        <th>Triple Smash 🍔</th>
                        <td>Pão, 3 hambúrgueres de 160g, queijo cheddar, bacon em fatias e picles.</td>
                        <td>R$45,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Burguers -->
    <div class="cardapios container my-4">
        <h2 class="text-center">Burguers</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle tabela-stl">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ingredientes</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Burguer Frango 🍔</th>
                        <td>Pão, hambúrguer de 160g, cheddar e frango.</td>
                        <td>R$25,00</td>
                    </tr>
                    <tr>
                        <th>Burguer Dog 🍔</th>
                        <td>Pão, hambúrguer de 160g, cheddar e 2 salsichas.</td>
                        <td>R$25,00</td>
                    </tr>
                    <tr>
                        <th>Burguer Bacon 🍔</th>
                        <td>Pão, hambúrguer de 160g, cheddar e bacon em fatias.</td>
                        <td>R$25,00</td>
                    </tr>
                    <tr>
                        <th>Burguer Calabresa 🍔</th>
                        <td>Pão, hambúrguer de 160g, cheddar e calabresa.</td>
                        <td>R$25,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Açais e Cremes -->
    <div class="cardapios container my-4">
        <h2 class="text-center">Açais e Cremes</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle tabela-stl">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ingredientes</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Açai 300ml Tradicional</th>
                        <td>Leite ninho e leite condensado.</td>
                        <td>R$16,00</td>
                    </tr>
                    <tr>
                        <th>Açai 300ml Puro</th>
                        <td>Somente açaí.</td>
                        <td>R$13,00</td>
                    </tr>
                    <tr>
                        <th>Açai 500ml Tradicional</th>
                        <td>Leite ninho e leite condensado.</td>
                        <td>R$21,00</td>
                    </tr>
                    <tr>
                        <th>Açai 500ml Puro</th>
                        <td>Somente açaí.</td>
                        <td>R$18,00</td>
                    </tr>
                    <tr>
                        <th>Taça de Açai</th>
                        <td>400ml de açaí, leite ninho, leite condensado, morango, nutella e creme de ninho.</td>
                        <td>R$36,00</td>
                    </tr>
                    <tr>
                        <th>Tigela de Açai</th>
                        <td>750ml de açaí, leite ninho, leite condensado e dois adicionais à sua escolha.</td>
                        <td>R$40,00</td>
                    </tr>
                    <tr>
                        <th>Creme puro 300ml</th>
                        <td>Cupuaçu ou maracujá.</td>
                        <td>R$13,00</td>
                    </tr>
                    <tr>
                        <th>Creme puro 500ml</th>
                        <td>Cupuaçu ou maracujá.</td>
                        <td>R$18,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Adicionais -->
    <div class="cardapios container my-4">
        <h2 class="text-center">Adicionais</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle tabela-stl">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><th>Ouro Branco</th><td>R$5,00</td></tr>
                    <tr><th>Ovo Maltine</th><td>R$5,00</td></tr>
                    <tr><th>Kit Kat</th><td>R$5,00</td></tr>
                    <tr><th>Oreo</th><td>R$5,00</td></tr>
                    <tr><th>Bis</th><td>R$5,00</td></tr>
                    <tr><th>MM's</th><td>R$7,00</td></tr>
                    <tr><th>Banana</th><td>R$3,00</td></tr>
                    <tr><th>Morango</th><td>R$5,00</td></tr>
                    <tr><th>Manga</th><td>R$5,00</td></tr>
                    <tr><th>Kiwi</th><td>R$5,00</td></tr>
                    <tr><th>Uva</th><td>R$5,00</td></tr>
                    <tr><th>Amendoim</th><td>R$3,00</td></tr>
                    <tr><th>Granola</th><td>R$3,00</td></tr>
                    <tr><th>Paçoca</th><td>R$3,00</td></tr>
                    <tr><th>Leite Ninho</th><td>R$2,00</td></tr>
                    <tr><th>Leite Condensado</th><td>R$2,00</td></tr>
                    <tr><th>Nutella</th><td>R$7,00</td></tr>
                    <tr><th>Creme de Pistache</th><td>R$7,00</td></tr>
                    <tr><th>Creme de Ninho</th><td>R$7,00</td></tr>
                    <tr><th>Creme de Coco Branco</th><td>R$7,00</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container my-5">
  <h4 class="text-center">📝 Seu Pedido:</h4>
  <textarea id="mensagem" class="form-control mb-3" rows="5" placeholder="Clique em um item do cardápio para adicionar..."></textarea>
  <div class="d-flex gap-2">
    <button id="btn-copiar" class="btn btn-primary flex-grow-1">
      <i class="fas fa-copy"></i> Copiar mensagem
    </button>
    <a id="whatsapp-link" class="btn btn-success flex-grow-1" target="_blank" href="#">
      <i class="fab fa-whatsapp"></i> Enviar para o WhatsApp
    </a>
  </div>
</div>

    <?php include 'footer.php'; ?>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  const campoMensagem = document.getElementById("mensagem");
  const whatsappLink = document.getElementById("whatsapp-link");
  const btnCopiar = document.getElementById("btn-copiar");

  const pedidos = {};

  document.querySelectorAll("tbody th").forEach(item => {
    const nomeOriginal = item.innerText.trim();
    item.dataset.nome = nomeOriginal;
    item.classList.add("item-pedido");
    item.style.cursor = "pointer";
    item.title = "Clique para adicionar ao pedido";

    item.addEventListener("click", () => {
      const nome = item.dataset.nome;
      const preco = item.parentElement.querySelector("td:last-child")?.innerText.trim() || "";

      if (pedidos[nome]) {
        const confirmar = confirm(`Deseja remover "${nome}" do pedido?`);
        if (confirmar) {
          delete pedidos[nome];
          item.innerHTML = nome;
          item.classList.remove("selecionado");
          atualizarMensagem();
          atualizarWhatsAppLink();
        }
        return;
      }

      const quantidade = prompt(`Quantos "${nome}" você deseja?`, "1");

      if (quantidade !== null && !isNaN(quantidade) && Number(quantidade) > 0) {
        const pedidoTexto = `• ${quantidade}x ${nome}${preco ? ` (${preco})` : ""}`;
        pedidos[nome] = { texto: pedidoTexto };

        item.innerHTML = `${nome} <span class="badge bg-success" title="Clique para remover">✔️</span>`;
        item.classList.add("selecionado");
        atualizarMensagem();
        atualizarWhatsAppLink();
      } else if (quantidade !== null) {
        alert("Quantidade inválida.");
      }
    });
  });

  function atualizarMensagem() {
    const texto = Object.values(pedidos).map(p => p.texto).join("\n");
    campoMensagem.value = texto;
  }

  function atualizarWhatsAppLink() {
    const numero = "554498819798";
    const texto = encodeURIComponent(campoMensagem.value.trim());
    whatsappLink.href = `https://wa.me/${numero}?text=${texto}`;
  }

  btnCopiar.addEventListener("click", () => {
    if (!campoMensagem.value.trim()) {
      alert("O pedido está vazio, nada para copiar.");
      return;
    }
    campoMensagem.select();
    campoMensagem.setSelectionRange(0, 99999); // Para dispositivos móveis
    navigator.clipboard.writeText(campoMensagem.value)
      .then(() => alert("Mensagem copiada para a área de transferência!"))
      .catch(() => alert("Falha ao copiar a mensagem."));
  });
</script>



</body>
</html>
