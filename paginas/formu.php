<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-12 col-md-10 col-lg-8 p-4 shadow rounded bg-transparent">
        <h2 class="text-center mb-4 text-light">Cadastro de Informações</h2>

        <form class="row g-3 needs-validation" action="<?php echo BASE_URL_PREFIX; ?>/?pagina=enviar" method="post" novalidate>
            <div class="col-md-6 mt-3">
                <label for="validationCustom01" class="form-label">Primeiro nome</label>
                <input type="text" class="form-control" id="validationCustom01" name="primeiroNome" placeholder="Digite seu nome" required>
            </div>
            <div class="col-md-6 mt-3">
                <label for="validationCustom02" class="form-label">Último nome</label>
                <input type="text" class="form-control" id="validationCustom02" name="ultimoNome" placeholder="Último nome" required>
            </div>

            <div class="col-md-6 mt-3">
                <label for="validationCustom03" class="form-label">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="validationCustom03" placeholder="Digite sua cidade" required>
            </div>
            <div class="col-md-6 mt-3">
                <label for="validationCustom04" class="form-label">Estado</label>
                <select class="form-select" id="validationCustom04" name="estado" required>
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

            <div class="col-md-6 mt-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Digite seu telefone" required>
            </div>
            <div class="col-md-6 mt-3">
                <label for="sugestao" class="form-label">Sugestão (opcional)</label>
                <input type="text" class="form-control" name="sugestao" id="sugestao" placeholder="Deixe uma sugestão">
            </div>

            <div class="col-12 mt-4">
                <div class="form-check">
                    <input class="form-check-input p-2" type="checkbox" value="confirmado" id="invalidCheck" required>
                    <label class="form-check-label text-light lead" for="invalidCheck">
                        Confirmo meus dados
                    </label>
                </div>
            </div>
            <div class="col-12 mt-3">
                <button class="btn btn-primary p-2" type="submit">Confirmo e envio meus dados</button>
            </div>

            <div class="col-12">
                <div id="mensagemSucesso"
                     class="mt-3"
                     style="display: none; width: 250px; font-size: 13px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; padding: 6px 10px;">
                    Formulário enviado com sucesso!
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo BASE_URL_PREFIX; ?>/js/jquery-3.7.1.js"></script>
<script src="<?php echo BASE_URL_PREFIX; ?>/js/jquery.mask.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form.needs-validation');
    const mensagemSucesso = document.getElementById('mensagemSucesso');

    function exibirMensagem(status, mensagem) {
        mensagemSucesso.textContent = mensagem;
        mensagemSucesso.style.display = 'block';

        if (status === 'sucesso') {
            mensagemSucesso.style.backgroundColor = '#d4edda';
            mensagemSucesso.style.color = '#155724';
            mensagemSucesso.style.borderColor = '#c3e6cb';
        } else {
            mensagemSucesso.style.backgroundColor = '#f8d7da';
            mensagemSucesso.style.color = '#721c24';
            mensagemSucesso.style.borderColor = '#f5c6cb';
        }

        setTimeout(() => {
            mensagemSucesso.style.display = 'none';
        }, 5000);
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        mensagemSucesso.style.display = 'none';

        form.classList.add('was-validated');

        // valida formulario
        if (!form.checkValidity()) {
            event.stopPropagation(); 
            return; 
        }

        exibirMensagem('sucesso', 'Formulário enviado com sucesso!');

        form.reset();
        form.classList.remove('was-validated');
    });
});
/* Máscaras */
$(document).ready(function() {
  $('#telefone').mask('(99) 99999-9999');
});
</script>