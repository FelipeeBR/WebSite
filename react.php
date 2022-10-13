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
           <h1>React: O que é, como funciona e porque usar?</h1>
           <p>
            React JS é uma biblioteca JavaScript para a criação de interfaces de usuário — ou UI (user interface).
            Criado em 2011 pelo time do Facebook, o React surgiu com o objetivo de otimizar a atualização e a sincronização de atividades simultâneas no feed de notícias da rede social, 
            entre eles chat, status, listagem de contatos e outros.
           </p>
           <h2>Como funciona o React?</h2>
           <p>
            O React é uma biblioteca front-end e tem como um de seus objetivos facilitar a conexão entre diferentes partes de uma página, portanto seu funcionamento acontece através do que chamamos de componentes.
            Em outras palavras, podemos imaginar que o React divide uma tela em diversos componentes para, então, trabalhar sobre eles de maneira individual.
           </p>
           <h2>Como o React usa JavaScript?</h2>
           <p>
            O React é uma biblioteca que utiliza a linguagem de programação JavaScript.
            O JS é uma das mais versáteis e populares linguagens de programação do mundo e conta com um grande número de bibliotecas e outras tecnologias que a utilizam. 
            Entre elas, Node.js, Angular, VueJS, jQuery, Ember.js e, é claro, o React.
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
            &copy;Todos os direitos reservados 2022.
        </p>
    </footer>
</body>
</html>