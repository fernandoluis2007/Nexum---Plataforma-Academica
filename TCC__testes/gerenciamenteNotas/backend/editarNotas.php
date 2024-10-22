<?php
    $pdo = new PDO('mysql:host=localhost;dbname=plataforma_nexum', 'root', '');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ids = $_POST['id'];
        $nomes = $_POST['Nome_Aluno'];
        $primeiras = $_POST['Primeira_Avaliação'];
        $segundas = $_POST['Segunda_Avaliação'];
        $terceiras = $_POST['Terceira_Avaliação'];
        $provas = $_POST['Prova_Final'];

        for ($i = 0; $i < count($ids); $i++) {
            // Atualiza cada registro com base no id
            $sql = $pdo->prepare("UPDATE notaalunos SET 
                                  Nome_Aluno = ?, 
                                  Primeira_Avaliação = ?, 
                                  Segunda_Avaliação = ?, 
                                  Terceira_Avaliação = ?, 
                                  Prova_Final = ? 
                                  WHERE id = ?");
            $sql->execute([
                $nomes[$i], 
                $primeiras[$i], 
                $segundas[$i], 
                $terceiras[$i], 
                $provas[$i], 
                $ids[$i]
            ]);
        }

        echo "Notas atualizadas com sucesso!";
    }
?>
