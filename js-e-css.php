<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">JS e CSS</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/js-e-css.png" alt="JS e CSS" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">Como aplicar estilo via JS?</h2>
                <p class="col-12">Agora que já aprendemos os conceitos básicos de JS, algumas funções, métodos, propriedades, loops e condicionais, está na hora de vermos como aplicar estilo!</p>
                <p class="col-12">Verá que o esquema não foge muito do que já vimos - seletores, métodos, propriedades e valores. Inclusive já mexemos um pouco nos estilos através das classes do Bootstrap. Mas vamos um pouco mais a fundo agora.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 18 | Estilo com JavaScript</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Na força bruta</h5>
                    <p class="mt-3">Como talvez você já imagine, podemos simplesmente aplicar o estilo inline, como um atributo.</p>
                    <div class="bg-light p-5 my-5" id="meuContainer">
                        <code class="font-weight-bold" id="meuCode">
                            Aqui temos o elemento code#meuCode.font-weight-bold<br />
                            Contido numa div#meuContainer.bg-light.p-5.my.5
                        </code>
                    </div>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            meuContainer = document.querySelector('#meuContainer')<br />
                            meuCode = document.querySelector('#meuCode')<br /><br />
                            // Vamos aplicar o estilo inline<br />
                            meuCode.setAttribute('style', 'font-size: 18px; color: yellowgreen; font-style: italic')
                        </code>
                    </div>
                    <p class="mt-3">Pode até parecer tentador no início - e por vezes necessário - mas evite essa saída ao máximo (isso compromete performance, complica a manutenção do código e é extremamente deselegante... rs...).</p>
                </li>
                <li class="my-5">
                    <h5>Na força bruta II</h5>
                    <p class="mt-3">Outra maneira errada de se fazer seria incluindo uma tag <code>&lt;style&gt;</code>. Seria assim:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Criando a tag style<br />
                            estilo = document.createElement('style')<br /><br />
                            // Atrelando a um ID para podermos manipular posteriormente<br />
                            estilo.setAttribute('id', 'estiloFeio')<br /><br />
                            // Incluindo o estilo com o innerHTML<br />
                            estilo.innerHTML = `<br />
                                <span class="ml-3">body { background-color: red }</span><br />
                                <span class="ml-3">header, footer { background-color: yellow; color: red }</span><br />
                            `<br /><br />
                            // Incluindo o estilo no head<br />
                            document.querySelector('head').appendChild(estilo)<br /><br />
                            // E agora, vamos apagar esse estilo antes que alguém veja!<br />
                            document.querySelector('#estiloFeio').remove()
                        </code>
                    </div>
                </li>
                <li class="my-5">
                    <h5>Agora, do jeito certo!</h5>
                    <p class="mt-3">Agora que já vimos duas formas erradas de se aplicar o estilo, vamos ver do jeito correto. Vamos definir valores para as propriedades de estilo - que se encontram dentro da propriedade <code>style</code> dos elementos HTML.</p>
                    <div class="bg-light p-5 my-5" id="meuNovoContainer">
                        <code class="font-weight-bold" id="meuNovoCode">
                            Aqui temos o elemento code#meuNovoCode.font-weight-bold<br />
                            Contido numa div#meuNovoContainer.bg-light.p-5.my.5
                        </code>
                    </div>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            meuNovoContainer = document.querySelector('#meuNovoContainer')<br />
                            meuNovoCode = document.querySelector('#meuNovoCode')<br /><br />
                            // Vamos aplicar o estilo da forma certa<br />
                            meuNovoCode.style.color = 'green'<br />
                            meuNovoCode.style.fontSize = '20px'<br />
                        </code>
                    </div>
                    <p class="mt-3">Reparou que a propriedade <code>font-size</code> foi declarada como <i>camelCase</i>? Quando acessamos as propriedades de estilo que normalmente são separadas por hífen, devemos declará-las sem o hífen e com <i>camelCase</i>.</p>
                    <p class="mt-3">Vamos deixar a brincadeira um pouco mais interessante: vamos alterar algumas propriedades de todas as tags <code>&lt;code&gt;</code>! Para isso teremos de combinar alguns conhecimento já adquiridos:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            // Selecionando todas as tags &lt;code&gt; que tenham o fundo escuro<br />
                            tagsCode = document.querySelectorAll('.bg-dark code')<br /><br />
                            // E para acessar cada uma delas, vamos de <i>for ... of</i><br />
                            for (let tagCode of tagsCode) {<br /><br />
                                <span class="ml-3">tagCode.style.backgroundColor = 'aquamarine'</span><br />
                                <span class="ml-3">tagCode.style.color = 'black'</span><br />
                                <span class="ml-3">tagCode.style.lineHeight = '30px'</span><br />
                                <span class="ml-3">tagCode.style.fontSize = '20px'</span><br />
                                <span class="ml-3">tagCode.style.display = 'block'</span><br />
                                <span class="ml-3">tagCode.style.margin = 'auto'</span><br />
                                <span class="ml-3">tagCode.style.textAlign = 'center'</span><br />
                                <span class="ml-3">tagCode.style.textDecoration = 'underline'</span><br />
                            }
                        </code>
                    </div>
                    <p class="mt-3">Bonito assim, não ficou... é verdade. Mas... funcionou! Porém, há um jeito melhor ainda de aplicarmos o estilo quando vamos mexer em várias propriedades.</p>
                </li>
                <li class="my-5">
                    <h5>Aplicando várias propriedades de estilo</h5>
                    <p class="mt-3">Podemos aplicar todas as propriedades de estilo de uma só vez à propriedade <code>style</code>:</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            for (let tagCode of tagsCode) {<br /><br />
                                <span class="ml-3">tagCode.style = `</span><br />
                                <span class="ml-5">color: #e83e8c;</span><br />
                                <span class="ml-5">line-height: 18px;</span><br />
                                <span class="ml-5">font-size: 14px;</span><br />
                                <span class="ml-5">text-align: left;</span><br />
                                <span class="ml-3">`</span><br /><br />
                            }
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