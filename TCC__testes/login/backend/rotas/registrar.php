<?php
// rotas/registrar.php
require_once '../classes/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nomeAluno'];
    $cpf = $_POST['cpfAluno'];
    $senha = $_POST['senhaAluno'];
    $email = $_POST['emailAluno'];
    $sexo = $_POST['sexo'];
    $cidade = $_POST['cidadeAluno'];
    $estado = $_POST['estadoAluno'];

    $usuario = new Usuario();
    if ($usuario->registrar($nome, $cpf, $senha, $email, $sexo, $cidade, $estado)) {
        echo "Usuário registrado com sucesso!";
    } else {
        echo "Falha ao registrar usuário.";
    }
}
?>
