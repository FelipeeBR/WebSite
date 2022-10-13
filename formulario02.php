<?php

session_start();

include_once("conexao02.php");
if(isset($_POST['tEnvia'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $radio = $_POST['tLing'];
    $mensage = $_POST['cMsg'];


    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $radio = filter_input(INPUT_POST, 'tLing', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensage = filter_input(INPUT_POST, 'cMsg', FILTER_SANITIZE_SPECIAL_CHARS);

    $resultado_matricula = "INSERT INTO contatos (nome, email, opcao, mensagem) VALUES ('$nome', '$email', '$radio', '$mensage')";
    $resultado = mysqli_query($conn, $resultado_matricula);




    if(mysqli_insert_id($conn)){
            $_SESSION['msg'] = "<h3 style='color:green; text-align: center;'>Enviado !</h3>";
            header("Location: contato.php");
    }else{
            header("Location: index.php");
    }

}
?>
