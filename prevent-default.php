<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container">
    <section class="row py-5">
        <header class="col-12 p-3 mx-auto mb-4 row">
            <h1 class="col-12 text-center mb-5">preventDefault()</h1>
            <img class="col-12 col-lg-6 mx-auto rounded" src="./assets/img/prevent-default.png" alt="preventDefault()" width="100%" height="auto">
            <article class="col-12 col-lg-6 mx-auto">
                <h2 class="col-12 mb-3">O que é o preventDefault()?</h2>
                <p class="col-12">Se traduzirmos ao pé da letra, <i>Prevent Default</i> significa 'evitar o padrão'.</p>
                <p class="col-12">Então o que ele faz é justamente, evitar um comportamento que seria esperado. Por exemplo, evitar que um formulário seja enviado quando clicarmos em Enviar (<i>submit</i>). Ele pode ser usado para bloquear alguns recursos ou validar certas condições.</p>
            </article>
        </header>
        <article class="col-12 mx-auto my-4">
            <h2 class="col-12">Prática 23 | preventDefault</h2>
            <ul class="col-12 py-3">
                <li class="my-5">
                    <h5>Simples e direto</h5>
                    <p class="mt-3">O <code>preventDefault()</code>, como já mencionamos, irá travar a ação esperada. Então, como aplicaremos ele no próxima prática, podemos nos dar o direito de deixar esse módulo bem (bem mesmo) breve. Bora lá!</p>
                    <p class="mt-3">Abaixo temos um botão que abrirá uma nova guia (no site do Google). Clique para ver o comportamento padrão/esperado.</p>
                    <div class="bg-light p-5 mb-3">
                        <a href="https://google.com" target="_blank" rel="noopener noreferrer" class="btn btn-info d-block mx-auto" id="btn">Ir para o Google</a>
                    </div>
                    <p class="mt-3">E aí, clicou? O que ocorreu? Simplesmente o clique no link abriu uma nova aba com o site do Google, certo?</p>
                    <p class="mt-3">Bom, agora vamos aplicar o <code>preventDefault()</code> e depois clicar novamente nesse mesmo link - nossa função impedirá que essa nova aba seja aberta.</p>
                    <div class="bg-dark p-5">
                        <code class="font-weight-bold">
                            document.querySelector('#btn').addEventListener('click', event => {<br />
                                <span class="ml-3">event.preventDefault()</span><br />
                            })
                        </code>
                    </div>
                    <p class="mt-3">Apenas uma observação: repare que o <code>preventDefault()</code> evita comportamentos esperados de <b>eventos</b> (por isso mesmo utilizamos o <code>addEventListener()</code>. E tem mais - ele só consegue cancelar eventos que sejam <i>cancelable</i> (canceláveis) - no caso, eventos pertencentes à categoria <i>Event</i>.</p>
                    <p class="mt-3">Com essa lição concluída, já podemos por em prática nossos conhecimento em JavaScript! É claro que ainda há um universo de conceitos para vermos (como Map, Filter, Reduce, consumo de APIs, Design Patterns, bibliotecas e frameworks), mas com esses conceitos básicos vistos até o momento, você já tem condições de continuar estudando e mergulhar nesse mundo de possibilidades que o JS nos abre.</p>
                </li>
            </ul>
            <p class="mt-3">Confiram o arquivo <a href="https://github.com/Marcelo-Diament/tn01-js-aula-02/blob/master/README.md" target="_blank" rel="noopener noreferrer" title="Veja o arquivo readme.md">README.md</a> do repositório para verem maiores informações.</p>
        </article>
    </section>
    <footer class="col-12 row mb-3">
        <a href="./timing-events.php" class="w-25 btn btn-dark d-inline-block mr-auto mt-4 mb-3" id="voltarBtn"><i class="fas fa-chevron-left"></i> <b class="ml-4">Voltar</b></a>
        <a href="./validacao-de-formulario.php" class="w-25 btn btn-dark d-inline-block ml-auto mt-4 mb-3" id="avancarBtn"><b>Próximo</b> <i class="fas fa-chevron-right"></i></a>
    </footer>
</main>
<?php require_once("./inc/footer.php"); ?>