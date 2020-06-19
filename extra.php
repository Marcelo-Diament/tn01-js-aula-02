<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">Validação de Formulário</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/validacao-formulario.png" alt="Eventos de Tempo" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">Como validar um form?</h2>
                <p class="col-12">Chegou a hora da gente aplicar tudo o que vimos até o momento em uma prática mais 'real'. Usando eventos, manipulação do DOM, aplicação de estilos, seletores, condicionais, etc..</p>
                <p class="col-12">Vamos incrementar e validar um formulário HTML (mas sem validações HTML5). Já há uma base pronta para a gente poder focar no que interessa. Então vamos pra cima!</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 24 | Fetch API</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>by Carlão</h5>
                    <p class="mt-3">Consulta Cidade via UF selecionada</p>
                    <div class="bg-light p-5">
                        <form id="meuForm" method="post" action="">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Fulano">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="sobrenome">Sobrenome</label>
                                    <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="da Silva">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="exemplo@email.com">
                                    <small id="emailError" class="d-none text-danger">Por favor, confira o email inserido</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="emailConfirm">Confirmação de email</label>
                                    <input type="text" class="form-control" id="emailConfirm" name="emailConfirm" placeholder="exemplo@email.com">
                                    <small id="emailConfirmError" class="d-none text-danger">Atenção, os emails inseridos não coincidem</small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="senha">Senha</label>
                                    <input type="text" class="form-control" id="senha" name="senha" placeholder="*****" aria-describedby="senhaHelp">
                                    <small id="passwordHelpInline" class="text-muted">
                                        [<span id="senha6chars">Tem mais de 5 caracteres e não tem espaço</span> |
                                        <span id="senhaAlphaNum">Tem números, maiúsculas e minúsculas</span>]
                                    </small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="senhaConfirm">Confirmação de Senha</label>
                                    <input type="text" class="form-control" id="senhaConfirm" name="senhaConfirm" placeholder="*****" aria-describedby="senhaConfirmHelp">
                                    <small id="senhaConfirmError" class="d-none text-danger">
                                        <span>Atenção: essa senha não coincide com a anterior</span>
                                    </small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" id="cep" name="cep">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">Cidade</label>
                                    <select id="city" name="city" class="form-control">
                                        <option disabled selected value="">Cidade</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="uf">UF</label>
                                    <select id="uf" name="uf" class="form-control" onblur="getCities(this.value)">
                                        <option disabled selected value="">UF</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnEnviar">Enviar</button>
                        </form>
                    </div>
                </li>
            </ul>
            <p class="mt-3">Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./prevent-default.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./index.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Início</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<script>
    console.log('carregou script')
    let ufs = ['AC', 'AL', 'AM', 'AP', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MG', 'MS', 'MT', 'PA', 'PB', 'PE', 'PI', 'PR', 'RJ', 'RN', 'RO', 'RR', 'RS', 'SC', 'SE', 'SP', 'TO']
    let estados = document.querySelector('#uf')
    const popularUfs = () => {
        console.log('teste')
        for (let uf of ufs) {
            console.log(uf)
            estados.innerHTML += `<option value="${uf}">${uf}</option>`
        }
    }
    popularUfs()

    function getCities(valor) {
        const citySelect = document.querySelector("select[name=city]");
        const url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${valor}/municipios`;
        citySelect.innerHTML = `
            <label for="city">Cidade</label>
            <select id="city" name="city" class="form-control">
                <option disabled selected value="">Cidade</option>
            </select>
        `
        fetch(url)
            .then(response => response.json())
            .then(cities => {
                for (city of cities) {
                    citySelect.innerHTML += `<option value="${city.nome}">${city.nome}</option>`;
                }
                citySelect.disabled = false

            })
    }
</script>
<?php require_once("./inc/footer.php"); ?>