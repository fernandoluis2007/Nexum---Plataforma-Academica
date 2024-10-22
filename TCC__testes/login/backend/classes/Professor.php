<?php
// login/backend/classes/Professor.php
require_once 'BancoDeDados.php';

class Professor {
    public $bd;

    public function __construct() {
        $this->bd = new BancoDeDados();
    }

    public function registrar($nomeProfessor, $cpfProfessor, $senhaProfessor, $emailProfessor, $sexoProfessor, $cidadeProfessor, $estadoProfessor, $disciplinaProfessor) {
        // Hash da senha
        $senhaHash = password_hash($senhaProfessor, PASSWORD_BCRYPT);

        // Preparar a instrução SQL
        $stmt = $this->bd->preparar("INSERT INTO professor (nomeProfessor, cpfProfessor, senhaProfessor, emailProfessor, sexoProfessor, cidadeProfessor, estadoProfessor, disciplinaProfessor) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        // Bind dos parâmetros
        $stmt->bind_param("ssssssss", $nomeProfessor, $cpfProfessor, $senhaHash, $emailProfessor, $sexoProfessor, $cidadeProfessor, $estadoProfessor, $disciplinaProfessor);

        // Executar a instrução
        return $stmt->execute();
    }

    public function verificarCredenciais($nomeProfessor, $senhaProfessor) {
        // Preparar a instrução SQL
        $stmt = $this->bd->preparar("SELECT * FROM professor WHERE nomeProfessor = ?");
        $stmt->bind_param("s", $nomeProfessor);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $professor = $resultado->fetch_assoc();

        // Verificar se a senha corresponde
        if ($professor && password_verify($senhaProfessor, $professor['senhaProfessor'])) {
            return $professor;
        } else {
            return false;
        }
    }
}
?>
