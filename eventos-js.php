<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">Eventos JS</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/eventos-js.png" alt="Eventos" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">O que são Eventos?</h2>
                <p class="col-12">Podemos definir eventos como mudança de estado. Por exemplo, quando um elemento é clicado, quando passamos o mouse sobre um elemento ou quando um input está em foco.</p>
                <p class="col-12">Há uma série de eventos (<a href="https://www.w3schools.com/jsref/dom_obj_event.asp" target="_blank" rel="noopener noreferrer" title="Lista de Tipos de Eventos">veja aqui a lista completa</a>), veremos os principais deles.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 19 | Eventos</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Visão Geral</h5>
                    <p>Classificamos os eventos por seus tipos - como <i>click</i> e <i>change</i> (de acordo com o tipo de ação que ocorre e acaba por 'disparar' o evento). A seguir, uma breve lista dos principais eventos</p>
                    <table class="table my-5">
                        <thead>
                            <tr>
                                <th scope="col">Evento</th>
                                <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left" scope="row">onchange</th>
                                <td class="text-left">Quando um elemento sobre alteração (por exemplo, é incluido um caractere num input)</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">onclick</th>
                                <td class="text-left">Ocorre quando clicamos</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">onmouseover</th>
                                <td class="text-left">Quando posicionamos o mouse sobre um elemento (como o <code>hover</code>)</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">onkeydown</th>
                                <td class="text-left">Ocorre quando estamos pressionando uma tecla (durante a ação de teclar)</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">onkeypress</th>
                                <td class="text-left">Ocorre quando pressionamos uma tecla (início da ação de teclar)</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">onkeyup</th>
                                <td class="text-left">Ocorre quando soltamos uma tecla (final da ação de teclar)</td>
                            </tr>
                            <tr>
                                <th class="text-left" scope="row">onload</th>
                                <td class="text-left">Ocorre quando a página é carregada completamente</td>
                            </tr>
                        </tbody>
                    </table>
                </li>
                <li class="my-5">
                    <h5>Sintaxe do disparo de eventos</h5>
                    <p>Para que ocorra o disparo de evento, partimos do pressuposto que temos uma ação a ser executada mediante o disparo de um evento. Vamos ver isso no código.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Selecionando o body<br />
                            body = document.querySelector('body')<br /><br />
                            // Disparando o evento quando clicarmos no body<br />
                            body.onclick = () => {<br />
                                <span class="ml-3">body.style.backgroundColor = 'yellowgreen'</span><br />
                            }
                        </code>
                    </div>
                    <p class="mt-3">Como pudemos ver, o evento do tipo clique é um método que aplicamos ao objeto <i>body</i>. Então o acessamos com <code>body.onclick</code> e definimos um valor a ele (no caso, uma função que altera a cor de fundo do body). Vamos ver, mais a fundo, o que acontece quando clicamos no body vamos incluir o parâmetro <code>el</code> na função que define o evento (e aproveitar para tirar essa cor de <span color="yellowgreen">abacate</span> do nosso body):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Disparando o evento quando clicarmos no body<br />
                            body.onclick = ( el ) => {<br />
                                <span class="ml-3">console.log(el)</span><br />
                                <span class="ml-3">body.style.backgroundColor = '#fff'</span><br />
                            }
                        </code>
                    </div>
                    <p class="mt-3">Opa! Olha só quantas propriedades temos no objeto <code>el</code>! Perceba que o elemento clicado pode ser acessado pela propriedade <code>el.target</code>. Também podemos ver onde exatamente o usuário clicou - em relação à página, usando os valores X (<code>el.pageX</code>) e Y (<code>el.pageY</code>) ou em relação à tela, usando os valores X (<code>el.screenX</code>) e Y (<code>el.screenY</code>).</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            body.onclick = ( el ) => {<br /><br />
                                <span class="ml-3">console.log(`\nel\n`)</span><br />
                                <span class="ml-3">console.log(el)</span><br /><br />
                                <span class="ml-3">console.log(`\nel.target\n`)</span><br />
                                <span class="ml-3">console.log(el.target)</span><br /><br />
                                <span class="ml-3">console.log(`\nel.pageX = ${el.pageX} \n`)</span><br />
                                <span class="ml-3">console.log(`\nel.pageY = ${el.pageY} \n`)</span><br />
                                <span class="ml-3">console.log(`\nel.screenX = ${el.screenX} \n`)</span><br />
                                <span class="ml-3">console.log(`\nel.screenY = ${el.screenY} \n`)</span><br /><br />
                            }
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Disparo de eventos usando atributos</h5>
                    <p>Também podemos utilizar atributos para dispararmos eventos, veja:</p>
                    <div class="bg-light p-5 mb-3">
                        <button class="btn btn-warning d-block mx-auto" onclick="alert('Viu só? Esse é um evento passado como atributo!')">CLICA NIMIN</button>
                    </div>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // CÓDIGO DO INPUT ACIMA<br />
                            &lt;button class="btn btn-warning d-block mx-auto" onclick="alert('Viu só? Esse é um evento passado como atributo!')"&gt;<br />
                            <span class="ml-3">CLICA NIMIN</span><br />
                            &lt;/button&gt;<br />
                        </code>
                    </div>
                    <p class="mt-3">O que fizemos foi passar o tipo de evento como atributo e, em seu valor, declaramos o que deveria ocorrer quando o evento fosse disparado.</p>
                    <p class="mt-3">O trecho referente ao evento é: <code><b>onclik="alert('texto a ser exibido')"</b></code>. Da mesma forma, poderíamos ter uma função declarada e chamá-la quando o evento fosse disparado.</p>
                </li>
            </ul>
        </article>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 20 | addEventListener()</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Como Funciona?</h5>
                    <p class="mt-3">Temos ainda outra opção para configurarmos o disparo de eventos - utilizando o método <code>addEventListener()</code>. Basicamente nós definimos o tipo de evento e atrelamos uma função (que será executada quando o evento for disparado) - e os atrelamos ao <i>target</i> do evento (elemento que o dispara):</p>
                    <div class="bg-light p-5 mb-3">
                        <button class="btn btn-info d-block mx-auto" id="btnReacao">#btnReacao</button>
                    </div>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const btnReacao = document.querySelector('#btnReacao');<br /><br />
                            btnReacao.addEventListener('click', function () {<br />
                                <span class="ml-3">alert('Reagindo!')</span><br /><br />
                            })<br /><br />
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Vantagens</h5>
                    <p class="mt-3">Mas por que usar o <code>addEventListener()</code>? Pois podemos atrelar e 'desatrelar' eventos ao <i>target</i>. Mas... para isso precisaremos definir a função a ser executada fora do corpo do <code>addEventListener()</code>. Vamos lá:</p>
                    <div class="bg-light p-5 mb-3">
                        <button class="btn btn-primary d-block mx-auto" id="btnAddEventListener">#btnAddEventListener</button>
                    </div>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const btnAddEventListener = document.querySelector('#btnAddEventListener');<br /><br />
                            function cumprimentar() {<br />
                                <span class="ml-3">alert('Muito prazer!')</span><br />
                            }<br /><br />
                            btnAddEventListener.addEventListener('click', cumprimentar)
                        </code>
                    </div>
                    <p class="mt-3">Agora vamos aplicar o <code>removeEventListener</code>:</p>
                    <div class="bg-light p-5 mb-3">
                        <button class="btn btn-danger d-block mx-auto" id="btnRemoveEventListener">#btnRemoveEventListener</button>
                    </div>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const btnRemoveEventListener = document.querySelector('#btnRemoveEventListener');<br /><br />
                            function removerCumprimento() {<br />
                                <span class="ml-3">btnAddEventListener.removeEventListener('click', cumprimentar)</span><br />
                            }<br /><br />
                            btnRemoveEventListener.addEventListener('click', removerCumprimento)
                        </code>
                    </div>
                    <p class="mt-3">Agora clique no botão <i>#btnRemoveEventListener</i> e clique novamente no botão <i>#btnAddEventListener</i> para ver o que acontece!</p>
                    <p class="mt-3">Atenção, para removermos uma função atrelada via <code>addEventListener</code> precisamos utilizar exatamente a mesma função (e podemos adicionar mais de uma função também/tipo de evento).</p>
                </li>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./js-e-css.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./timing-events.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>