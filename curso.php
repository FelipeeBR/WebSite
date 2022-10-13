
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="stylesheet" href="_css/paginas.css">
    <link rel="stylesheet" href="_css/form01.css">
    <script src="_javascript/script.js" defer></script>
    <script src="_javascript/formulario.js" defer></script>
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
            <h1>Inscreva-se no curso de programador Web. Disponível até 02/05/2022.</h1><br>
            <form method="POST" action="formulario01.php">
                <h3>Preencha o formulário abaixo:</h3>
                <input id="nome" type="text" name="nome" placeholder="Seu nome completo..."/>
                <input id="email" type="text" name="email" placeholder="Seu email..."/>
                <input id="cidade" type="text" name="cidade" placeholder="Sua cidade..."/>
                <input id="telefone" type="text" name="telefone" placeholder="Seu telefone..."/><br>
                <input type="submit" name="acao" value="Enviar"/>
            </form>
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
        </section>

        <section id="conteudo_direito">
            <a href="linguagens.php">
                <article class="artigo_direito">
                    <figure>
                        <img src="_images/foto2.jpg" alt="foto1">
                    </figure>
                    <p>
                        Um pouco sobre as principais linguagens: HTML, CSS, PHP, JavaScript.
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