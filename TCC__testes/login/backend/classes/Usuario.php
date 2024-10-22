<?php
// login/backend/classes/Usuario.php
require_once 'BancoDeDados.php';

class Usuario {
    public $bd;

    public function __construct() {
        $this->bd = new BancoDeDados();
    }

    public function registrar($nome, $cpf, $senha, $email, $sexo, $cidade, $estado) {
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);
        $stmt = $this->bd->preparar("INSERT INTO usuarios (nome, cpf, senha, email, sexo, cidade, estado) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $nome, $cpf, $senhaHash, $email, $sexo, $cidade, $estado);
        return $stmt->execute();
    }

    public function verificarCredenciais($nome, $senha) {
        $stmt = $this->bd->preparar("SELECT * FROM usuarios WHERE nome = ?");
        $stmt->bind_param("s", $nome);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $usuario = $resultado->fetch_assoc();

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            return $usuario;
        } else {
            return false;
        }
    }
}
?>
