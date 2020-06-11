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
            <h2 class="col-12">Prática 18 | Eventos</h2>
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
                </li>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./tipos-de-dados.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./timing-events.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>