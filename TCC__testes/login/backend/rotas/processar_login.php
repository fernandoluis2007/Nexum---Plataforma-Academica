<?php
// login/backend/rotas/processar_login.php
session_start();
require_once '../classes/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? null;
    $senha = $_POST['senha'] ?? null;

    if ($nome && $senha) {
        $usuario = new Usuario();
        $stmt = $usuario->bd->preparar("SELECT * FROM usuarios WHERE nome = ?");
        $stmt->bind_param("s", $nome);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $usuarioDados = $resultado->fetch_assoc();

        if ($usuarioDados && password_verify($senha, $usuarioDados['senha'])) {
            $_SESSION['usuario_id'] = $usuarioDados['id'];
            $_SESSION['usuario_nome'] = $usuarioDados['nome'];
            header("Location: ../../../home/frontend/tela-home.php"); // Ajuste o caminho aqui
            exit();
        } else {
            echo "Nome de usuário ou senha incorretos.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    header("Location: ../../frontend/tela-de-login.html"); // Certifique-se de que o caminho esteja correto
    exit();
}
