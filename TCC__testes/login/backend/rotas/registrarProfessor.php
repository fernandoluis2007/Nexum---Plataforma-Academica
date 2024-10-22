<?php
// backend/rotas/registrarProfessor.php
require_once '../classes/Professor.php'; // Ajuste o caminho conforme necessário

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifique se todos os campos estão presentes
    if (isset($_POST['nomeProfessor'], $_POST['cpfProfessor'], $_POST['senhaProfessor'], $_POST['emailProfessor'], $_POST['sexo'], $_POST['cidadeProfessor'], $_POST['estadoProfessor'], $_POST['diciplinaProfessor'])) {
        $nomeProfessor = $_POST['nomeProfessor'];
        $cpfProfessor = $_POST['cpfProfessor'];
        $senhaProfessor = $_POST['senhaProfessor'];
        $emailProfessor = $_POST['emailProfessor'];
        $sexoProfessor = $_POST['sexo'];
        $cidadeProfessor = $_POST['cidadeProfessor'];
        $estadoProfessor = $_POST['estadoProfessor'];
        $diciplinaProfessor = $_POST['diciplinaProfessor']; // Corrigido

        // Hash da senha
        $senhaHash = password_hash($senhaProfessor, PASSWORD_BCRYPT);

        // Crie uma instância da classe Professor
        $professor = new Professor();

        // Tente registrar o professor
        if ($professor->registrar($nomeProfessor, $cpfProfessor, $senhaHash, $emailProfessor, $sexoProfessor, $cidadeProfessor, $estadoProfessor, $diciplinaProfessor)) {
            echo "Professor registrado com sucesso!";
        } else {
            echo "Falha ao registrar professor.";
        }
    } else {
        echo "Dados incompletos. Verifique se todos os campos foram preenchidos.";
        // Para depuração: listar todos os campos recebidos
        print_r($_POST);
    }
} else {
    echo "Método não permitido.";
}
?>
