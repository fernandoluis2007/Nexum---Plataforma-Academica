<?php
    $pdo = new PDO('mysql:host=localhost;dbname=plataforma_nexum', 'root', '');

    if (isset($_POST['excluir_aluno'])) {
        $id = $_POST['id'];  // Recebe o ID da nota do aluno
        $sql = $pdo->prepare("DELETE FROM notaalunos WHERE id = ?");
        $sql->execute([$id]);

        // Redireciona de volta para a página principal após a exclusão
        header("Location: ../lancarNotas.php");  // Ou a página onde você lista as notas
        exit();
    }
?>
