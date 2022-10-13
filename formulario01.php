<?php

session_start();

include_once("conexao.php");
if(isset($_POST['acao'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];


    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);

    $resultado_matricula = "INSERT INTO matriculados (nome, email, cidade, telefone) VALUES ('$nome', '$email', '$cidade', '$telefone')";
    $resultado = mysqli_query($conn, $resultado_matricula);




    if(mysqli_insert_id($conn)){
            $_SESSION['msg'] = "<h3 style='color:green; text-align: center;'>Cadastrado com sucesso !</h3>";
            header("Location: curso.php");
    }else{
            header("Location: index.php");
    }

}
?>
