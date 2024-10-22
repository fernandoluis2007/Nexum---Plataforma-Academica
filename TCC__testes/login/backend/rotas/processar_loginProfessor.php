<?php
// login/backend/rotas/processar_login.php
session_start();
require_once '../classes/Professor.php'; // Incluindo a classe Professor

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nomeProfessor'] ?? null;
    $senha = $_POST['senhaProfessor'] ?? null;

    if ($nome && $senha) {
        $professor = new Professor();
        $stmt = $professor->bd->preparar("SELECT * FROM professor WHERE nomeProfessor = ?");
        $stmt->bind_param("s", $nome);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $professorDados = $resultado->fetch_assoc();

        if($nome && $senha){
            $_SESSION['professor_id'] = $professorDados['id'];
            $_SESSION['professor_nome'] = $professorDados['nomeProfessor'];
            header("Location: ../../../home/frontend/tela-home-professor.php"); // Ajuste o caminho aqui
            exit();
        }else{
            echo 'deu errado';
            var_dump($nome);

        }
    } 
} else {
    header("Location: ../../frontend/tela-de-login.html"); // Certifique-se de que o caminho esteja correto
    exit();
}
?>
