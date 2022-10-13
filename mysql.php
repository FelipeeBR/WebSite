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
           <h1>O que é o MySQL?</h1>
           <p>
            O MySQL é capaz de armazenar qualquer tipo de informação, desde um site institucional até um e-commerce. Isso inclui desde o registro de um simples dado até todo o inventário de produtos.
            Seu modelo de criação de banco de dados é baseado em tabelas. Um banco de dados pode conter muitas tabelas para organizar as informações de uma forma mais concisa.
           </p>
           <h2>Vantagens do MySQL</h2>
           <p>O SGBD MySQL é confiável no que diz respeito ao controle de acesso dos usuários. Ele disponibiliza mecanismos robustos para conferir e revogar autorizações, por diferentes níveis de acesso.
                O MySQL possui excelente desempenho, até quando tem grande carga de informações. Como já foi dito, o MySQL é gratuito. No caso das empresas, é preciso adquirir uma licença para usá-lo.</p>
            <h2>A importância dos bancos de dados</h2>
            <p>
            O banco de dados armazena e organiza todas as informações do seu site para que elas façam sentido toda vez que alguém o acessar. Basicamente, um SGBD é uma estrutura de software que permite que
             dados sejam armazenados, organizados, protegidos, atualizados, acrescentados, excluídos e acessados sempre que necessário, devendo corresponder à demanda que a aplicação que o utiliza exige. 
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