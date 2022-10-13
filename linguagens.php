<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link rel="stylesheet" href="_css/estilo-linguagens.css">
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
        <h1>As Principais Linguagens</h1>
        <h2>HTML</h2>
           <p>HTML não é uma linguagem de programação, é uma linguagem de marcação. Bem resumidamente, linguagem de marcação é um conjunto de regras e códigos que define como os elementos da página são exibidos.
                Conhecimento em HTML é o básico para qualquer Web Designer. Apesar de existir muitas ferramentas que fazem praticamente todo o trabalho de estruturação das páginas, é importante que o profissional 
                entenda como isso acontece no nível de código para que possa fazer melhorias e correções quando necessário.
            </p>
        <h2>CSS</h2>
            <p>
            O CSS é utilizado em conjunto com o HTML. É uma linguagem utilizada para definição de estilos,  
            para definir o layout de documentos HTML. Enquanto o HTML é usado para estruturar conteúdos, o CSS é usado para formatar conteúdos estruturados.
            </p>
        <h2>JAVASCRIPT</h2>
            <p>
            O JavaScript é uma linguagem utilizada para programação de scripts que são executados no navegador do usuário de um website ou como se diz, do lado do cliente. É uma linguagem dinâmica, 
            orientada a objetos e criada com sintaxe similar à linguagem C, apesar de conter Java no nome. Ela tem como principal função tornar alguns processos das páginas mais dinâmicos, tornando seu uso 
            mais agradável. O JavaScript fornece às páginas web a possibilidade de programação, transformação e processamento de dados enviados e recebidos, interagindo com a marcação e exibição dos conteúdos da linhagem HTML e com a estilização feita com o o uso do CSS.
            </p>
        <h2>PHP</h2>
            <p>
            O PHP é uma linguagem de script em que o código é normalmente embutido no próprio HTML. No caso do PHP, o código é executado do lado do servidor e é enviado para o cliente 
            apenas o resultando em HTML puro. Com isso é possível a interação com banco de dados, outras aplicações e o código não fica exposto.
            PHP é a linguagem de programação web mais utilizada para implementação de funções mais dinâmicas e complexas dentro de websites e aplicações Web.
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