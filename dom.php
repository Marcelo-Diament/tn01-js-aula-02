<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">DOM</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/dom.png" alt="DOM" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">O que é o DOM?</h2>
                <p class="col-12">DOM é um acrônimo de Document Object Model, ou seja, refere-se ao documento (HTML ou XML)  - acessado com <i>document</i> via console).</p>
                <p class="col-12">Podemos pensar numa árvore genealógica, onde os elementos possuem pais, filhos e irmãos. O 'pai de todos' seria a <i>window</i> (que abrange o <i>document</i>, <i>location</i> e <i>history</i>). Mas focaremos no <i>document</i>, sendo a tag <code>&lt;html&gt;</code> seu elemento de maior nível. Nós navegamos através do documento para manipular os elementos.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 12 | DOM</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Visão Geral</h5>
                    <p>Vamos entender de forma macro a estrutura do DOM</p>
                    <div class="bg-white py-5 px-0">
                        <img src="./assets/img/dom.jpg" alt="DOM" class="img-fluid mx-auto">
                        <small class="col-12 d-block">Fonte: <a href="https://i.imgur.com/lu4PMfw.jpg">imgur.com</a></small>
                    </div>
                </li>
                <li class="my-5">
                    <h5>window</h5>
                    <p>Window é o objeto pai de todos. Se quisermos saber se a tela foi carregada, nos referenciamos à <i>window</i>. Como já deve imaginar, ela possui suas propriedades e métodos. Por exemplo, para saber a largura da tela, podemos acessar <code>window.screen.width</code>. Vamos ver isso na prática:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            window.screen.width<br />
                            window.screen.height<br />
                        </code>
                    </div>
                    <p class="mt-3">Ou, se quisermos ver todas as propriedades de <i>screen</i>:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            window.screen
                        </code>
                    </div>
                    <p class="mt-3">Há <i>n</i> outras propriedades da <i>window</i>, como:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Todas as propriedades do console (visto na lição 1)<br />
                            window.console<br /><br />
                            // Acessar o document (usado para fazermos as seleções)<br />
                            window.document<br /><br />
                            // Tamanho interno (apenas a tela do site) da window<br />
                            window.innerHeight<br /><br />
                            /* Tamanho externo (incluindo barra de favoritos, scroll bar...) da window<br />
                            Retorna o mesmo valor de window.screen.height */<br />
                            window.outerHeight<br /><br />
                            // Retorna o número de iframes na window<br />
                            window.length<br /><br />
                            //Podemos até mesmo rolar a página usando o método scrollBy de window (0 px para a direita, e 500 para baixo)<br />
                            window.scrollBy(0, 500)<br /><br />
                            // Retorna o localStorage (onde podemos guardar pares de chave/valor que permanecem salvos na máquina)<br />
                            window.localStorage<br /><br />
                            /* Retorna o sessionStorage (onde podemos guardar pares de chave/valor<br />
                            que permanecem salvos durante a sessão - ao fechar o browser os dados são apagados) */<br />
                            window.sessionStorage
                        </code>
                    </div>
                    <p class="mt-3">Bora testar o sessionStorage e o localStorage?</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Setando o nome do usuário no localStorage e no sessionStorage<br /><br />
                            // Capturando o nome<br />
                            nome = prompt('Digite seu nome, por favor')<br /><br />
                            // Salvando o nome no sessionStorage<br />
                            sessionStorage.setItem('nome', nome)<br /><br />
                            // Salvando o nome no localStorage<br />
                            localStorage.setItem('nome', nome)<br /><br />
                            // Vamos ver se salvou:<br />
                            sessionStorage.getItem('nome')<br />
                            localStorage.getItem('nome')<br /><br />
                            // Agora vamos fechar o browser, abrir novamente e acessar os objetos novamente.<br />
                            // Será que os dados permanecem?<br />
                            sessionStorage.getItem('nome')<br />
                            localStorage.getItem('nome')<br /><br />
                        </code>
                    </div>
                    <p class="mt-3">Acesse <a href="https://www.w3schools.com/jsref/obj_window.asp" target="_blank" rel="noopener noreferrer" title="Mais sobre o objeto window">esse link</a> para ver outras propriedades do objeto <i>window</i>.</p>
                </li>
                <li class="my-5">
                    <h5>window.location</h5>
                    <p><i>location</i> é um objeto e uma propriedade de window. Podemos acessá-lo sem declarar <i>window</i> também. Esse objeto detém as informações sobre a URL em que estamos. Vamos ver algumas de suas propriedades:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Protocolo (http ou https)<br />
                            location.protocol<br /><br />
                            // Host ou domínio<br />
                            location.host<br /><br />
                            // Nome do Host<br />
                            location.hostname<br /><br />
                            // Origin (base do endereço)<br />
                            location.origin<br /><br />
                            // href (endereço atual completo)<br />
                            location.href<br /><br />
                            // Path (caminho da página onde estamos)<br />
                            location.pathname<br /><br />
                            // Hash (o que vem depois do #, como quando clicamos numa âncora)<br />
                            location.hash<br /><br />
                            // Todas as propriedades do location<br />
                            window.location // ou apenas location
                        </code>
                    </div>
                    <p class="mt-3">Curiosidade: estamos usando o seguinte script para aplicarmos a classe <code>active</code> ao item do menu (porém a sintaxe é de jQuery, uma biblioteca de JS):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Usamos um querySelectorAll com a classe nav-link e aplicamos um forEach<br />
                            $('.nav-link').each(function (index, element) {<br /><br />
                                <span class="ml-3">/* Verificamos se o href cada um dos itens selecionados</span><br />
                                <span class="ml-3">/* é igual ao window.location (ele já considera o href do location) */</span><br />
                                <span class="ml-3">element.href == window.location</span><br /><br />
                                    <span class="ml-5">// Se true, adiciona a classe active</span><br />
                                    <span class="ml-5">? $('.nav-item')[index].classList.add('active')</span><br /><br />
                                    <span class="ml-5">// Senão, remove (caso a possua)</span><br />
                                    <span class="ml-5">: $('.nav-item')[index].classList.remove('active')</span><br /><br />
                            });
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>window.history</h5>
                    <p><i>history</i> é exatamente o histórico, como já diz o próprio nome. Acessando esse objeto, podemos voltar ou avançar a página. Caso não haja página anterior ou seguinte, recebemos <i>undefined</i> como retorno.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Voltar a página<br />
                            history.back()<br /><br />
                            // Avançar a página<br />
                            history.forward()<br /><br />
                            // Voltar 2 páginas<br />
                            history.go(-2)<br /><br />
                            // Avançar 2 páginas<br />
                            history.go(2)
                        </code>
                    </div>
                    <p class="mt-3">Curiosidade: estamos usando o seguinte script para aplicarmos a classe <code>active</code> ao item do menu (porém a sintaxe é de jQuery, uma biblioteca de JS):</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Usamos um querySelectorAll com a classe nav-link e aplicamos um forEach<br />
                            $('.nav-link').each(function (index, element) {<br /><br />
                                <span class="ml-3">/* Verificamos se o href cada um dos itens selecionados</span><br />
                                <span class="ml-3">/* é igual ao window.location (ele já considera o href do location) */</span><br />
                                <span class="ml-3">element.href == window.location</span><br /><br />
                                    <span class="ml-5">// Se true, adiciona a classe active</span><br />
                                    <span class="ml-5">? $('.nav-item')[index].classList.add('active')</span><br /><br />
                                    <span class="ml-5">// Senão, remove (caso a possua)</span><br />
                                    <span class="ml-5">: $('.nav-item')[index].classList.remove('active');</span><br /><br />
                            });
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>window.document</h5>
                    <p>Já trabalhamos com o <i>document</i> na aula passada. Ele é equivalente ao nosso <i>#documento</i>, no caso, do tipo HTML (<code>!DOCTYPE HTML</code>). A partir dele aplicamos nossos seletores (<code>document.getElementById()</code>, <code>document.querySelectorAll()</code>, <i><abbr title="vulgo etc - kkkkk">et cetera</abbr></i>).</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Só pra refrescar nossa memória...<br />
                            document.querySelector('html')
                        </code>
                    </div>
                    <p class="mt-3">Dentro do <i>document</i>, <code>&lt;html&gt;</code> é a tag de maior nível - dentro dela estão todas as nossas outras tags, incluindo <i>head</i>, <i>body</i>, <i>header</i>, <i>main</i> e <i>footer</i>.</p>
                    <p class="mt-3">Mas não para por aí! Além dos elementos e dos métodos que já usamos (como os seletores), tem muito mais!</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // A tag head pode ser acessada pela propriedade head<br />
                            document.head<br /><br />
                            // E a tag body pode ser acessada pela propriedade body<br />
                            document.body<br /><br />
                            // Podemos pegar o title do documento<br />
                            document.title<br /><br />
                            // A URL também pode ser acessada<br />
                            document.URL<br /><br />
                            // Para acessar todos os scripts usados na página<br />
                            document.scripts<br /><br />
                            /* Para descobrirmos de onde o usuário veio (o atributo rel com valor noreferrer<br />
                            evita que essa propriedade seja acessada). Acesse uma página através da busca do<br />
                            Google, abra o console e rode esse comando para ver funcionando: */<br />
                            document.referrer<br /><br />
                        </code>
                    </div>
                </li>
            </ul>
        </article>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 13 | Nodes</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>O que são os Nodes? Quais os tipos de Node?</h5>
                    <p>Nodes são nódulos, como se fossem 'elementos' além dos elementos HTML (que também são nodes). Seriam os 'pontos' dessa nossa árvore genealógica chamada DOM.</p>
                    <p class="mt-3">Ao todo, existem 12 tipos de Nodes (confira <a href="https://www.w3schools.com/jsref/prop_node_nodetype.asp" target="_blank" rel="noopener noreferrer" title="Todos os tipos de nodes">aqui a lista completa</a>), mas ficaremos com os principais (que não estão depreciados):</p>
                    <table class="table my-5">
                        <thead>
                            <tr>
                                <th scope="col">Número</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Exemplo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Element</td>
                                <td>Representação de um elemento</td>
                                <td><code>&lt;p&gt;</code>, <code>&lt;div&gt;</code>, <code>&lt;h1&gt;</code></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Text</td>
                                <td>Texto dentro de um elemento ou atributo</td>
                                <td>Esse próprio texto de exemplo do node do tipo Text</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Comment</td>
                                <td>Comentários no nosso código</td>
                                <td><code>&lt;!-- Esse comentário, por exemplo --&gt;</code></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Document</td>
                                <td>O documento em si</td>
                                <td><code>window.document</code></td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Document Type</td>
                                <td>A declaração do tipo do documento</td>
                                <td><code>&lt;!DOCTYPE html&gt;</code></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-3">Para descobrirmos o tipo de node de um elemento podemos usar a propriedade <code>nodeType</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelector('body').nodeType
                        </code>
                    </div>
                </li>
            </ul>
        </article>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 14 | Manipulação do DOM</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Criando Elementos com appendChild()</h5>
                    <p>E, finalmente, chegou a hora de manipularmos o DOM. Para começar, vamos aprender a criar elementos HTML. O método appendChild() apenda um elemento filho dentro de outro elemento.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Para acessarmos o elemento depois de criá-lo, precisamos salvá-lo numa variável:<br />
                            paragrafo = document.createElement('p')
                        </code>
                    </div>
                    <i>Basicamente acessamos o método de <i>document</i> <code>createElement</code> e passamos como parâmetro o nome da tag HTML desejada (no exemplo, p - paragraph).</i>
                    <p class="mt-3">Porém, criar apenas a tag HTML não nos ajuda muito... precisamos criar o conteúdo que será inserido dentro dela. No caso, um texto.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            texto = document.createTextNode('Meu primeiro elemento HTML criado via JavaScript! É... Vai pensando...')
                        </code>
                    </div>
                    <p class="mt-3">E agora vamos inserir esse texto dentro do parágrafo, usando o método <code>appendChild()</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            paragrafo.appendChild(texto)
                        </code>
                    </div>
                    <p class="mt-3">Agora só precisamos incluir esse parágrafo e seu texto no documento. Vamos incluir o parágrafo num elemento cujo id é blocoParaApendar:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Selecionando o bloco<br />
                            bloco = document.querySelector('#blocoParaApendar')<br /><br />
                            // Inserindo com o mesmo método appendChild()<br />
                            bloco.appendChild(paragrafo)<br /><br />
                            /* Detalhe: esse bloco não aparece pois não tem conteúdo, mas nós só criamos o parágrafo,<br />
                            nós não criamos o bloco no qual vamos incluir esse novo parágrafo agora! */
                        </code>
                    </div>
                    <div id="blocoParaApendar" class="bg-warning offset-md-3 col-12 col-md-6 mx-auto my-5"></div>
                </li>
                <li class="my-5">
                    <h5>Criando Elementos com insertBefore()</h5>
                    <p>Como visto, o <code>appendChild()</code> insere o novo elemento como um novo último elemento filho. Se quisermos inserir esse novo elemento antes dos demais filhos, podemos usar o <code>insertBefore()</code>. Primeiro vamos criar um elemento novo:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Criando um elemento HTML com a tag &lt;h5&gt;<br />
                            titulo = document.createElement('h5')<br /><br />
                            // Definindo seu texto<br />
                            textoTitulo = document.createTextNode('Título usando insertBefore()')<br /><br />
                            // Adicionando texto ao título<br />
                            titulo.appendChild(textoTitulo)<br /><br />
                        </code>
                    </div>
                    <p class="mt-3">E agora inserimos o título antes do <code>#depoisDoBefore</code> passando 2 parâmetros para o método <code>insertBefore()</code>: o primeiro, o título. E o segundo, o elemento antes do qual o título será inserido (o tal do <code>#depoisDoBefore</code>).</p>
                    <p class="mt-3">Ainda, o método deve ser chamado através do elemento pai. Já deixamos o <code>#inserindoBefore</code> no HTML, para facilitar.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            elementoPai = document.querySelector('#inserindoBefore')<br /><br />
                            elementoFilho = document.querySelector('#depoisDoBefore')<br /><br />
                            elementoPai.insertBefore(titulo, elementoFilho)
                        </code>
                    </div>
                    <div class="bg-light p-5" id="inserindoBefore">
                        <code class="font-weight-bold" id="depoisDoBefore">
                            // Aqui temos o elemento code#depoisDoBefore'.<br />
                            Ele está contido no elemento div#inserindoBefore.bg-light.
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Excluindo elementos com remove()</h5>
                    <p>Esse é fácil - basicamente selecionamos o elemento e aplicamos o método <code>remove()</code>:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Vamos excluir o elemento atrelado à variável elementoPai<br />
                            elementoPai.remove()
                        </code>
                    </div>
                    <p class="mt-3">Nem doeu né?</p>
                    <p class="mt-3">Mas... como sempre há um porém... alguns browsers não suportam o <code>remove()</code>, nesses casos precisamos remover um elemento filho.</p>
                </li>
                <li class="my-5">
                    <h5>Excluindo elementos com removeChild()</h5>
                    <p>Vamos selecionar um novo elemento Filho (e seu Pai) para então excluí-lo:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            novoPai = document.querySelector('#novoPai')<br />
                            novoFilho = document.querySelector('#novoFilho')<br /><br />
                            // Agora vamos excluir o novoFilho a partir do elemento novoPai<br />
                            novoPai.removeChild(novoFilho)
                        </code>
                    </div>
                    <div class="bg-light p-5" id="novoPai">
                        <code class="font-weight-bold" id="novoFilho">
                            // Aqui temos o elemento code#novoFilho'.<br />
                            Ele está contido no elemento div#novoPai.bg-light.
                        </code>
                    </div>
                    <p class="mt-3">E só para não deixarmos rastros, bora apagar o novoPai também!</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            novoPai.remove()
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Substituindo elementos com replaceChild()</h5>
                    <p>Vamos selecionar um novo elemento Filho (e seu Pai) e criar o <i>filhoSubstituto</i>.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            maisUmPai = document.querySelector('#maisUmPai')<br />
                            maisUmFilho = document.querySelector('#maisUmFilho')<br /><br />
                            filhoSubstituto = document.createElement('h5')<br /><br />
                            filhoSubstitutoTxt = document.createTextNode('Sou o filho substituto')<br /><br />
                            filhoSubstituto.appendChild(filhoSubstitutoTxt)<br /><br />
                        </code>
                    </div>
                    <div class="bg-light p-5" id="maisUmPai">
                        <h5 id="maisUmFilho">Esse é o #maisUmFilho</h5>
                    </div>
                    <p class="mt-3">Agora só resta fazermos o <i>replace</i></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            maisUmPai.replaceChild(filhoSubstituto, maisUmFilho)
                        </code>
                    </div>
                </li>
            </ul>
        </article>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 15 | Manipulação de Classes</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Verificando classes</h5>
                    <p>Agora que já criamos, substituímos e excluímos elementos, vamos entender como manipular as classes</p>
                    <div class="bg-light p-5 my-5" id="containerX">
                        <code class="font-weight-bold" id="codeX">
                            Aqui temos um elemento code#codeX.font-weight-bold<br />
                            Contido numa div#containerX.bg-light.p-5.my.5
                        </code>
                    </div>
                    <p class="mt-3">Será que os elementos <code>#containerX</code> e do <code>#codeX</code> contêm a classe <i>bg-light</i>?</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            containerX = document.querySelector('#containerX')<br />
                            containerX.classList.contains('bg-light')<br /><br />
                            codeX = document.querySelector('#codeX')<br />
                            codeX.classList.contains('bg-light')<br /><br />
                        </code>
                    </div>
                    <p class="mt-3">Quais as classes o <code>#containerX</code> e o <code>#codeX</code> contêm?</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            containerX.classList<br /><br />
                            codeX.classList<br /><br />
                        </code>
                    </div>
                    <p class="mt-3">Outra forma seria recebermos os nomes das classes em uma string ao invés de uma lista</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            containerX.className<br /><br />
                            codeX.className<br /><br />
                        </code>
                    </div>
                    <i>O lado ruim de receber como string é que para verificarmos se há uma classe teríamos de usar <code>containerX.className.search('p-5')</code> - e recebemos o número da posição da classe caso ela exista no elemento selecionado (9 no caso) OU -1 caso não exista.</i>
                </li>
                <li class="my-5">
                    <h5>Excluindo classes</h5>
                    <p class="mt-3">Que tal excluírmos a classe <i>bg-light</i> do <code>#containerX</code>?</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            containerX.classList.remove('bg-light')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Adicionando classes</h5>
                    <p class="mt-3">Ops! Ficou meio solto né? Vamos incluir a classe <i>bg-info</i> ao <code>#containerX</code> - e a classe <i>text-white</i> ao <code>#codeX</code> para mantermos a legibilidade</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            containerX.classList.add('bg-info')<br /><br />
                            codeX.classList.add('text-white')
                        </code>
                    </div>
                </li>
            </ul>
        </article>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 16 | Manipulação de Atributos</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Verificando Atributos</h5>
                    <p class="mt-3">Para recebermos os valores de um certo atributo de um elemento, podemos usar o método <code>getAttribute()</code>. Vamos ver as classes dos elementos <code>containerX</code> e <code>codeX</code> novamente, mas de outra forma:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            containerX.getAttribute('class')<br /><br />
                            codeX.getAttribute('class')
                        </code>
                    </div>
                    <i>Lembre-se de que a classe, apesar de ter tratamento especial, nada mais é do que um atributo.</i>
                    <p class="mt-3">Vamos um pouco além? Para incluirmos as classes recebidas em um array, podemos usar um método chamado <i>split</i>, que recebe um parâmetro obrigatório que é o <i>splitter</i> ou <i>separator</i>:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Vamos usar uma string com um espaço como separator<br /><br />
                            containerX.getAttribute('class').split(' ')
                        </code>
                    </div>
                    <p class="mt-3">Mas o <code>getAttribute()</code> não funciona apenas com classes, podemos receber qualquer atributo:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Pegando o id do containerX<br />
                            containerX.getAttribute('id')<br /><br />
                            // Pegando o href da primeira tag &lt;a&gt; encontrada<br />
                            document.querySelectorAll('a')[0].getAttribute('href')<br /><br />
                            // Pegando o href do primeiro elemento filho do terceiro filho do primeiro filho da primeira div encontrada no documento<br />
                            document.getElementsByTagName('div')[0].firstElementChild.children[2].firstElementChild.getAttribute('href')<br /><br />
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Verificando se possui atributo</h5>
                    <p class="mt-3">Para verificarmos se um elemento possui atributos, usamos <code>hasAttributes()</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            containerX.hasAttributes()<br /><br />
                            codeX.hasAttributes()<br /><br />
                            document.querySelector('br').hasAttributes()<br /><br />
                            document.body.hasAttributes()
                        </code>
                    </div>
                    <p class="mt-3">Calma que ainda tem mais! Vamos agora verificar se um determinado elemento possui um atributo específico</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            containerX.hasAttribute('href')<br /><br />
                            containerX.hasAttribute('id')<br /><br />
                            containerX.hasAttribute('title')<br /><br />
                            containerX.hasAttribute('class')<br /><br />
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Removendo atributos</h5>
                    <p class="mt-3">Esse é bem fácil - basta usarmos o método <code>removeAttribute</code></p>
                    <div class="bg-light p-5 my-5" id="containerY">
                        <code class="font-weight-bold" id="codeY">
                            Aqui temos o elemento code#codeY.font-weight-bold<br />
                            Contido numa div#containerY.bg-light.p-5.my.5
                        </code>
                    </div>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            containerY = document.querySelector('#containerY')<br /><br />
                            containerY.removeAttribute('class')
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Adicionando atributos</h5>
                    <p class="mt-3">Agora podemos adicionar um atributo (e seu valor) com <code>setAttribute</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            containerY.setAttribute('class', 'bg-warning p-5')<br /><br />
                            document.querySelector('#codeY').setAttribute('class', 'text-white')<br /><br />
                            document.querySelector('#codeY').setAttribute('class', 'text-dark')
                        </code>
                    </div>
                </li>
            </ul>
        </article>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 17 | Mais alguns métodos</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Capturando o valor de um texto</h5>
                    <p class="mt-3">Para capturarmos o texto de um elemento, usamos a propriedade <code>textContent</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelector('#codeZ').textContent
                        </code>
                    </div>
                    <i>Como espaços e quebras de linhas são nodes, eles acabam sendo capturados também.</i>
                </li>
                <li class="my-5">
                    <h5>Inserindo Texto dentro de um Elemento</h5>
                    <p class="mt-3">Podemos incluir texto diretamente num elemento (ao invés de criarmos o <i>textNode</i>). Note que como é uma propriedade, e não um método, não há parenteses com parâmetros, mas sim a atribuição de valores, com o igual</p>
                    <div class="bg-light p-5 my-5" id="containerZ">
                        <code class="font-weight-bold" id="codeZ">
                            Aqui temos o elemento code#codeZ.font-weight-bold<br />
                            Contido numa div#containerZ.bg-light.p-5.my.5
                        </code>
                    </div>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelector('#codeZ').innerText = 'Sou o novo texto inserido com innerText!'<br /><br />
                            // Vamos validara o novo texto com a propriedade textContent<br />
                            document.querySelector('#codeZ').textContent
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Inserindo HTML dentro de um Elemento</h5>
                    <p class="mt-3">De maneira bem semelhante ao <code>innerText</code>, temos a propriedade <code>innerHTML</code></p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelector('#codeZ').innerHTML = '&lt;img src="https://img.ibxk.com.br/2018/06/02/02001912259444.gif" width="245" height="auto" class="d-block mx-auto mt-3"&gt;'
                        </code>
                    </div>
                </li>
            </ul>
            <p>Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./interacao-via-browser.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./tipos-de-dados.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>