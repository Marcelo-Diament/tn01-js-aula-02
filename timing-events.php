<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">Timing Events</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/eventos-de-tempo-js.png" alt="Eventos de Tempo" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">O que são Timing Events?</h2>
                <p class="col-12">Como diz o próprio nome, são eventos relacionados ao tempo - com esses eventos podemos, por exemplo, construir <i>timers</i>, definir um <i>delay</i> para determinada ação (ou seja, um intervalo de tempo entre a ação e a reação), definir atividades que devem ser repetidas de tanto em tanto tempo, etc..</p>
                <p class="col-12">Algumas vezes usamos esses recursos até mesmo para deixar uma resposta, um retorno 'mais lento', melhorando a experiência do usuário, permitindo-o assimilar mudanças.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 21 | setTimeout</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Visão Geral</h5>
                    <p class="mt-3">Usamos o <code>setTimeout()</code> para dispararmos a execução de uma função após determinado tempo. Vamos ver um exemplo bem simples, para aquecermos. Vamos disparar um <code>alert()</code> depois de 5 segundos que 'rodarmos' o <i>timeOut</i> no console.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            setTimeout( () => { alert('Hey! Passaram-se 5 segundos!') }, 5000)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Entendendo a sintaxe</h5>
                    <p class="mt-3">Perceba que podemos simplesmente declarar o método <code>setTimeout()</code> e passar seus parâmetros. No caso, seus parâmetros (obrigatórios) são: <b>a função a ser executada</b> e <b>quanto tempo passará antes da função ser executada</b> (em milisegundos).</p>
                    <div class="bg-light p-5 mb-3">
                        <code><h3>setTimeout( função, tempo (ms) )</h3></code>
                    </div>
                    <p class="mt-3">Tranquilo, né? Então vamos deixar essa brincadeira mais interessante!</p>
                </li>
                <li class="my-5">
                    <h5>Disparando o setTimeout com outros eventos</h5>
                    <p class="mt-3">Vamos disparar um alerta depois de 2 segundo que clicarmos no botão mais abaixo. Para isso, vamos usar alguns outros conceitos já vistos nas lições anteriores.</p>
                    <div class="bg-light p-5 mb-3">
                        <button class="btn btn-info d-block mx-auto" id="btn2s">#btn2s</button>
                    </div>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const btn2s = document.querySelector('#btn2s')<br /><br />
                            const alerta2s = () => {<br />
                                <span class="ml-3">setTimeout( () => {</span><br />
                                    <span class="ml-5">alert('Reagindo!')</span><br />
                                <span class="ml-3">}, 2000)</span><br />
                            }<br /><br />
                            btn2s.addEventListener('click', alerta2s)
                        </code>
                    </div>
                    <p class="mt-3">Podemos ainda atribuir uma função nomeada ao <code>setTimeout</code>. Mas antes, vamos remover o <i>eventListener</i> do botão.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            btn2s.removeEventListener('click', alerta2s)<br /><br />
                            const trocaBodyBg = () => {<br />
                                <span class="ml-3">document.querySelector('body').style.backgroundColor = 'lightblue'</span><br />
                            }<br /><br />
                            setTimeout( trocaBodyBg, 3000)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>setTimeout dentro de setTimeout</h5>
                    <p class="mt-3">Vamos trocar a cor novamente, mas de modo que depois de +3 segundos, a cor do body volte a ficar branca.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const trocaBodyBg2 = () => {<br />
                                <span class="ml-3">document.querySelector('body').style.backgroundColor = 'aqua'</span><br />
                                <span class="ml-3">setTimeout( () => {</span><br />
                                    <span class="ml-5">document.querySelector('body').style.backgroundColor = 'white'</span><br />
                                <span class="ml-3">}, 3000)</span><br />
                            }<br /><br />
                            setTimeout( trocaBodyBg2, 3000)
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Abrindo (e fechando) uma nova janela</h5>
                    <p class="mt-3">Só pra brincarmos mais um pouquinho, vamos abrir uma nova janela e fechar após 1 segundo.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const abrirJanela = () => {<br /><br />
                                <span class="ml-2">/* window.open recebe 4 params:</span><br />
                                <span class="ml-2">URL (vamos deixar vazia),</span><br />
                                <span class="ml-2">name (equivalente ao atributo target)</span><br />
                                <span class="ml-2">spec [opcional] (definições da janela, como width e height)</span><br />
                                <span class="ml-2">replace [opcional] (se substitui a janela atual ou não) */</span><br />
                                <span class="ml-2">let novaJanela = window.open('', '', 'width = 350px, height = 350px, top = 200px, left = 200px')</span><br /><br />
                                <span class="ml-2">// Vamos incluir um estilinho básico e um conteúdo qualquer à nossa nova janela</span><br />
                                <span class="ml-2">novaJanela.document.write(`</span><br />
                                    <span class="ml-3">&lt;style&gt;</span><br />
                                        <span class="ml-5">body { background-color: black; color: white }</span><br />
                                    <span class="ml-3">&lt;/style&gt;</span><br />
                                    <span class="ml-3">&lt;h1&gt;</span><br />
                                        <span class="ml-5">OLHA RÁPIDO POIS JÁ VOU FECHAR!</span><br />
                                    <span class="ml-3">&lt;/h1&gt;</span><br />
                                <span class="ml-2">`)</span><br /><br />
                                <span class="ml-2">setTimeout( () => { novaJanela.close() }, 1000)</span><br /><br />
                            }<br /><br />
                            document.querySelector('#abrirJanela').onclick = () => { abrirJanela() }
                        </code>
                    </div>
                    <div class="bg-light p-5 my-3">
                        <button class="btn btn-info d-block mx-auto" id="abrirJanela">Abrir Nova Janela</button>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Criando um relógio com setTimeout</h5>
                    <p class="mt-3">Podemos usar o <code>setTimeout()</code> para modificarmos valores no HTML. Bora montar um relógio!</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            let mostrarHoras = () => {<br /><br />
                                <span class="ml-3">let hoje = new Date()</span><br />
                                <span class="ml-3">let hora = hoje.getHours()</span><br />
                                <span class="ml-3">let minutos = hoje.getMinutes()</span><br />
                                <span class="ml-3">let segundos = hoje.getSeconds()</span><br /><br />
                                <span class="ml-3">// Incluindo Zero aos minutos menores que 10</span><br />
                                <span class="ml-3">minutos = formatarTempo(minutos)</span><br />
                                <span class="ml-3">// Incluindo Zero aos segundos menores que 10</span><br />
                                <span class="ml-3">segundos = formatarTempo(segundos)</span><br /><br /><br />
                                <span class="ml-3">// Inserindo o horário no #relogio</span><br />
                                <span class="ml-3">const relogio = document.querySelector('#relogio')</span><br />
                                <span class="ml-3">relogio.innerHTML = hora + ":" + minutos + ":" + segundos</span><br /><br />
                                <span class="ml-3">// E agora, o pulo do gato! Vamos chamar a própria função dentro dela mesma</span><br /><br />
                                <span class="ml-3">setTimeout( () => { mostrarHoras() }, 100 )</span><br />
                            }<br /><br />
                            // Não podemos esquecer da função formatarTempo()!<br />
                            const formatarTempo = tempo => {<br />
                                <span class="ml-3">if (tempo < 10) {</span><br />
                                    <span class="ml-5">tempo = '0' + tempo</span><br />
                                <span class="ml-3">}</span><br />
                                <span class="ml-3">return tempo</span><br />
                            }<br /><br />
                            // Agora resta chamarmos a função mostrarTempo()<br />
                            mostrarHoras()
                        </code>
                    </div>
                    <div class="bg-info p-5 my-3 rounded">
                        <h1 class="d-block text-center text-white" id="relogio">Que horas são?</h1>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Impedindo o setTimeout</h5>
                    <p class="mt-3">Podemos usar o <code>clearTimeout()</code> para <b>cancelar</b> o <code>setTimout()</code> (antes que ele seja executado). Vamos ver:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            let ativar<br /><br />
                            document.querySelector('#ativar').onclick = () => {<br />
                                <span class="ml-3">ativar = setTimeout( () => alert('Ativado!'), 2000 )</span><br />
                            }<br /><br />
                            document.querySelector('#desativar').onclick = () => {<br />
                                <span class="ml-3">clearTimeout( ativar )</span><br />
                                <span class="ml-3">alert('Desativou!')</span><br />
                            }
                        </code>
                    </div>
                    <div class="bg-light p-5 my-3 mx-0 row">
                        <p class="col-12 text-center font-weight-bold">Clique em <span class="text-primary">Ativar</span> e - em menos de 2 segundos - clique em <span class="text-danger">Desativar</span> para anular o Ativar.</p>
                        <div class="d-block col-auto mx-auto my-3">
                            <button class="btn btn-primary mx-3" id="ativar">Ativar</button>
                            <button class="btn btn-danger mx-3" id="desativar">Desativar</button>
                        </div>
                    </div>
                </li>
            </ul>
        </article>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 22 | setInterval()</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Como Funciona?</h5>
                    <p class="mt-3">É um evento bem semelhante ao <code>setTimeout()</code>. A grande diferença é que o <code>setTimeout()</code> acontece uma única vez (a ação declarada como parâmetro 1 é executada após o tempo definido no parâmetro 2) - a não ser que a gente chame a própria função dentro dela mesma, como fizemos com o relógio. Já o <code>setInterval()</code> já é executado 'de tempo em tempo'.</p>
                    <p class="mt-3">Dito isso, bora refazer nosso relógio - perceba como acaba sendo muito mais simples!</p>
                    <p class="mt-3">E, pra simplificar ainda mais, vamos aprender o método <code>toLocaleTimeString()</code>, que basicamente formata a hora em string.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const relogio2 = document.querySelector('#relogio2');<br /><br />
                            function mostrarHoras2() {<br />
                                <span class="ml-3">let hoje = new Date()</span><br /><br />
                                <span class="ml-3">relogio2.innerHTML = hoje.toLocaleTimeString()</span><br /><br />
                            }<br /><br />
                            setInterval(mostrarHoras2, 1000)
                        </code>
                    </div>
                    <div class="bg-info p-5 my-3 rounded">
                        <h1 class="d-block text-center text-white" id="relogio2">Que horas são mesmo?</h1>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Timer</h5>
                    <p class="mt-3">Bom, agora vamos ver o <code>clearInterval()</code> - segue a mesma lógica do <code>clearTimeout()</code>.</p>
                    <p class="mt-3">Então vamos "matar 2 coelhos com uma <i>caixa d'água</i> só" (kkkkkk). Falando sério, numa cajadada só veremos o <code>clearInterval()</code> e treinaremos mais um pouco o <code>setInterval()</code>. Mão à obra!</p>
                    <p class="mt-3">Primeiro vamos definir quantos segundos durará nosso Timer.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            const timer = document.querySelector('#timer');<br /><br />
                            tempoTimer = prompt('Quantos segundos contará o seu timer?\n\nInsira um valor maior que 5, por favor.')<br /><br />
                            timer.innerHTML = `${tempoTimer}`
                        </code>
                    </div>
                    <p class="mt-3">Vamos também criar um botão para pausar o nosso timer:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            let pausarTimer = document.createElement('button')<br />
                            let pausarTimerTxt = document.createTextNode('PAUSAR')<br />
                            pausarTimer.appendChild(pausarTimerTxt)<br />
                            pausarTimer.setAttribute('class', 'btn btn-danger mx-auto')<br />
                            pausarTimer.setAttribute('id', 'pausarTimerBtn')<br />
                            // Já vamos atrelar a função que pausará o time num atributo<br />
                            pausarTimer.setAttribute('onclick', 'pausarTimerAgora()')<br />
                            document.querySelector('#btnPauseContainer').appendChild(pausarTimer)
                        </code>
                    </div>
                    <div class="bg-info p-5 mx-0 my-3 rounded row" id="timerContainer">
                        <h1 class="d-block text-center text-white col-12" id="timer">Nosso Timer</h1>
                        <div class="d-block col-auto mx-auto my-3 col-auto" id="btnPauseContainer">
                        </div>
                    </div>
                    <p class="mt-3">E agora sim vamos botar esse timer pra funcionar!</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            tempo = tempoTimer<br />
                            rodar = setInterval(() => {<br />
                                <span class="ml-3">timer.innerHTML = tempo--</span><br />
                                <span class="ml-3">if ( tempo < 0 ) {</span><br />
                                    <span class="ml-5">clearInterval(rodar)</span><br />
                                    <span class="ml-5">timer.classList.add('text-white')</span><br />
                                    <span class="ml-5">timer.classList.remove('text-danger')</span><br />
                                    <span class="ml-5">timer.innerText = 'TEMPO ESGOTADO!'</span><br />
                                    <span class="ml-5">btnPauseContainer.remove()</span><br />
                                    <span class="ml-5">document.querySelector('#timerContainer').classList.add('bg-danger')</span><br />
                                    <span class="ml-5">document.querySelector('#timerContainer').classList.remove('bg-warning')</span><br />
                                <span class="ml-3">} else if ( tempo < 5 ) {</span><br />
                                    <span class="ml-5">timer.classList.add('text-danger')</span><br />
                                    <span class="ml-5">timer.classList.remove('text-white')</span><br />
                                    <span class="ml-5">document.querySelector('#timerContainer').classList.add('bg-warning')</span><br />
                                    <span class="ml-5">document.querySelector('#timerContainer').classList.remove('bg-info')</span><br />
                                <span class="ml-3">}</span><br />
                            }, 1000)<br />
                        </code>
                    </div>
                    <p class="mt-3">E pra fecharmos essa prática, vamos definir a função <code>pausarTimer()</code>.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            function pausarTimerAgora() { clearInterval(rodar) }
                        </code>
                    </div>
                    <p class="mt-3">Desafio: que tal aplicar tudo o que aprendemos para fazer aparecer um botão 'Continuar' quando clicarmos em 'Pausar' e, quando esse botão novo for clicado, continuar a rodar o timer de onde parou? Está lançado o desafio!</p>
                </li>
            </ul>
            <p class="mt-3">Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./eventos-js.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./prevent-default.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>