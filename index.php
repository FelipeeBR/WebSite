<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <script src="_javascript/script.js" defer></script>
</head>
<body>
    <main>
        <div class="partecima">
            <section id="menu">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="curso.php">Curso Gratuito</a></li>
                        <li><a href="contato.php">Contato</a></li> 
                    </ul>
                </nav>
            </section>
        </div>
        <section id="banner">
            <div class="carrossel">
                <div class="container" id="imag">
                    <img src="_images/image_css.png" alt="">
                    <img src="_images/image_javascript.png" alt="">
                    <img src="_images/image_php.png" alt="">
                    <img src="_images/img_html.png" alt="">
                    <img src="_images/image_t.png" alt="">
                </div>
            </div>
        </section>
        <section id="conteudo_esquerdo">
            <a href="webdesigner.php">
                <article class="artigo_esquerdo">
                    <figure>
                        <img src="_images/foto1.png" alt="foto1">
                    </figure>
                    <p>
                        O que o Web Designer deve aprender?
                        A área de Web Design é bem ampla e isso acaba refletindo nas definições que se encontra por aí sobre o que  é Web Designer.
                    </p>
                </article>
            </a>
            
            <a href="linguagens.php">
                <article class="artigo_esquerdo">
                    <figure>
                        <img src="_images/foto2.jpg" alt="foto2">
                    </figure>
                    <p>
                        As Principais Linguagens.
                        Existe uma grande variedade de linguagens de programação requisitadas pelo mercado de trabalho e muitas podem ser 
                        utilizadas para o desenvolvimento de aplicações web. Veja aqui.
                    </p>
                </article>
            </a>

            <a href="mysql.php">
                <article class="artigo_esquerdo">
                    <figure>
                        <img src="_images/foto3.png" alt="foto3">
                    </figure>
                    <p>
                        MySQL: O que é, para que serve e suas vantagens. Qual é a importância dos bancos de dados?  
                    </p>
                </article>
            </a>

            <a href="react.php">
                <article class="artigo_esquerdo">
                    <figure>
                        <img src="_images/foto4.png" alt="foto4">
                    </figure>
                    <p>
                        React: O que é, como funciona e porque usar?
                    </p>
                </article>
            </a>
        </section>

        <section id="conteudo_direito">
            <a href="curso.php">
                <article class="artigo_direito">
                    <figure>
                        <img src="_images/image-ins.jpg" alt="foto1">
                    </figure>
                    <p>
                        Inscreva-se no curso GRATUITO de programação web.
                    </p>
                </article>
            </a>
        </section>
    </main>
    <footer>
        <p>
            &copy; Todos os direitos reservados 2022.
        </p>
    </footer>
</body>
</html>