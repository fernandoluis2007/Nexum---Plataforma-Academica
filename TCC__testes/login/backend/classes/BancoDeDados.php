<?php
// classes/BancoDeDados.php
require_once '../config/configuracao.php';

class BancoDeDados {
    private $conexao;

    public function __construct() {
        $this->conexao = conectar();
    }

    public function consulta($sql) {
        return $this->conexao->query($sql);
    }

    public function preparar($sql) {
        return $this->conexao->prepare($sql);
    }
}
?>
