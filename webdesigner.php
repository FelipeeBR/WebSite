<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="stylesheet" href="_css/paginas.css">
    <script src="_javascript/script.js" defer></script>
</head>
<body>
    <main>
        <section id="menu">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="curso.php">Curso Gratuito</a></li>
                    <li><a href="contato.php">Contato</a></li> 
                </ul>
            </nav>
        </section>
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
           <h1>O que o Web Designer deve aprender?</h1>
           <p>Para se tornar um Web Designer o profissional deverá conhecer os principais fundamentos sobre Design, isso envolve por exemplo tipografia, teoria das cores, usabilidade, performance e etc.
                Sobre as tecnologias a ser aprendidas, as mais básicas e essenciais para todo profissional são as referentes à camada de apresentação dos WebSites: HTML, CSS  e JavaScript.
                Além disso, para a área relacionada à programação de funções mais avançadas, o webdesigner deverá conhecer ao menos algumas das seguintes tecnologias: PHP, ASP, Ruby on Rails, CGI, JSP, Cold Fusion, SQL, entre outros. Sem dúvidas as principais e mais usadas são PHP e ASP.
                Para facilitar seu trabalho, o Webdesigner conta com diversas ferramentas disponíveis no mercado, principalmente para auxiliar no desenvolvimento dos códigos e das imagens. Podemos citar o Dreamweaver, Photoshop, Fireworks, Eclipse, entre vários outros.
            </p>
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