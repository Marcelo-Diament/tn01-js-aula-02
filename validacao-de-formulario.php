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
            <h2 class="col-12">Prática 24 | Validação de Formulário</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Instruções</h5>
                    <p class="mt-3">A seguir temos um formulário montado com a ajuda do Bootstrap. Precisaremos realizar as seguintes tarefas:</p>
                    <ol class="col-12 font-weight-bold">
                        <li class="mb-3">Verificar se o campo de email foi preenchido corretamente</li>
                        <li class="mb-3">Verificar se o campo de confirmação de email foi preenchido corretamente</li>
                        <li class="mb-3">Ocultarmos o valor do campo senha e guarar seu valor original em sessionStorage</li>
                        <li class="mb-3">Verificar se a confirmação da senha casa com a senha inserida inicialmente</li>
                        <li class="mb-3">Criar o campo CPF ou CNPJ de acordo com a opção 'Tipo de Cadastro' (PF ou PJ)</li>
                        <li class="mb-3">Formatar o campo de CEP (formato 00000-000)</li>
                        <li class="mb-3">Evitar que o disparo do formulário seja efetuado sem que todos os campos estejam preenchidos</li>
                        <li class="mb-3">Confirmar todos os campos preenchidos (exceto a senha) numa caixa de diálogo do browser</li>
                        <li class="mb-3">Caso o usuário confirme todos os dados, abrir uma nova guia com um texto de confirmação de envio de mensagem</li>
                    </ol>
                    <div class="bg-light p-5">
                        <form>
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
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="emailConfirm">Confirmação de email</label>
                                    <input type="text" class="form-control" id="emailConfirm" name="emailConfirm" placeholder="exemplo@email.com">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" id="cep" name="cep">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="uf">UF</label>
                                    <select id="uf" class="form-control">
                                        <option selected value="">UF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" placeholder="Avenida Brasil">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control" id="numero" name="numero" placeholder="234">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apto. 32">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Centro">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="senha">Senha</label>
                                    <input type="text" class="form-control" id="senha" name="senha" placeholder="*****" aria-describedby="senhaHelp">
                                    <small id="passwordHelpInline" class="text-muted">
                                        [<span id="senha6chars">Tem mais de 6 caracteres</span> |
                                        <span id="senhaAlphaNum">Tem números e letras</span> |
                                        <span id="senhaSpecialChars">Tem caracteres especiais</span>]
                                    </small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="senhaConfirm">Confirmação de Senha</label>
                                    <input type="text" class="form-control" id="senhaConfirm" name="senhaConfirm" placeholder="*****" aria-describedby="senhaConfirmHelp">
                                    <small id="passwordHelpInline" class="text-muted">
                                        [<span id="senhaConfirm6chars">Tem mais de 6 caracteres</span> |
                                        <span id="senhaConfirmAlphaNum">Tem números e letras</span> |
                                        <span id="senhaConfirmSpecialChars">Tem caracteres especiais</span>]
                                    </small>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnEnviar">Enviar</button>
                        </form>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Criando os seletores</h5>
                    <p class="mt-3">Vamos deixar todos os seletores criados para depois focarmos em cada validação.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const nome = document.querySelector('#nome')<br />
                            const sobrenome = document.querySelector('#sobrenome')<br />
                            const email = document.querySelector('#email')<br />
                            const emailConfirm = document.querySelector('#emailConfirm')<br />
                            const cep = document.querySelector('#cep')<br />
                            const cidade = document.querySelector('#cidade')<br />
                            const estado = document.querySelector('#estado')<br />
                            const endereco = document.querySelector('#endereco')<br />
                            const numero = document.querySelector('#numero')<br />
                            const complemento = document.querySelector('#complemento')<br />
                            const senha = document.querySelector('#senha')<br />
                            const senha6chars = document.querySelector('#senha6chars')<br />
                            const senhaAlphaNum = document.querySelector('#senhaAlphaNum')<br />
                            const senhaSpecialChars = document.querySelector('#senhaSpecialChars')<br />
                            const senhaConfirm = document.querySelector('#senhaConfirm')<br />
                            const senhaConfirm6chars = document.querySelector('#senhaConfirm6chars')<br />
                            const senhaConfirmAlphaNum = document.querySelector('#senhaConfirmAlphaNum')<br />
                            const senhaConfirmSpecialChars = document.querySelector('#senhaConfirmSpecialChars')<br />
                            const btnEnviar = document.querySelector('#btnEnviar')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Verificando email</h5>
                    <p class="mt-3">Vamos validar o email (se há <i>@</i>).</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            email.onblur = e => {<br />
                                <span class="ml-3">if ( e.target.value.includes('@') === false ) {</span><br />
                                    <span class="ml-5">e.target.focus()</span><br />
                                    <span class="ml-5">e.target.classList.add('text-danger')</span><br />
                                <span class="ml-3">} else {</span><br />
                                    <span class="ml-3">e.target.classList.remove('text-danger')</span><br />
                                <span class="ml-3">}</span><br />
                            }
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Verificando confirmação de email</h5>
                    <p class="mt-3">Vamos validar o email confirmado (se é igual ao primeiro email).</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            emailConfirm.onblur = e => {<br />
                                <span class="ml-3">if ( e.target.value !== email.value ) {</span><br />
                                    <span class="ml-5">e.target.focus()</span><br />
                                    <span class="ml-5">e.target.classList.add('text-danger')</span><br />
                                <span class="ml-3">} else {</span><br />
                                    <span class="ml-3">e.target.classList.remove('text-danger')</span><br />
                                <span class="ml-3">}</span><br />
                            }
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Verificando senha</h5>
                    <p class="mt-3">Vamos validar a senha (as 3 condições).</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            senha.onblur = e => {<br /><br />
                                <span class="ml-3">checkChars = /[+a-z|A-Z]/</span><br />
                                <span class="ml-3">checkNums = /[+\d]/</span><br />
                                <span class="ml-3">if ( e.target.value.length <= 5 ) {</span><br />
                                    <span class="ml-5">e.target.focus()</span><br />
                                    <span class="ml-5">e.target.classList.add('text-danger')</span><br />
                                <span class="ml-3">} else {</span><br />
                                    <span class="ml-3">e.target.classList.remove('text-danger')</span><br />
                                <span class="ml-3">}</span><br /><br />
                                <span class="ml-3">} else if ( checkChars.test(e.target.value) !== true && checkNums.test(e.target.value) !== true ) {</span><br />
                                    <span class="ml-5">e.target.focus()</span><br />
                                    <span class="ml-5">e.target.classList.add('text-danger')</span><br />
                                    <span class="ml-5">senhaAlphaNum.classList.add('text-danger')</span><br />
                                <span class="ml-3">} else {</span><br />
                                    <span class="ml-3">e.target.classList.remove('text-danger')</span><br />
                                    <span class="ml-5">senhaAlphaNum.classList.remove('text-danger')</span><br />
                                <span class="ml-3">}</span><br />
                            }
                        </code>
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
<?php require_once("./inc/footer.php"); ?>