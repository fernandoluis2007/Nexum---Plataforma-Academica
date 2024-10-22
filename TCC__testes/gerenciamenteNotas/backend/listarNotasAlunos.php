<?php
    $pdo = new PDO('mysql:host=localhost;dbname=plataforma_nexum', 'root', '');

    // Verifica se o formulário de edição foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['salvar_edicao'])) {
        foreach ($_POST['id'] as $index => $id) {
            $sql = $pdo->prepare("UPDATE notaalunos SET Nome_Aluno = ?, Primeira_Avaliação = ?, Segunda_Avaliação = ?, Terceira_Avaliação = ?, Prova_Final = ? WHERE id = ?");
            $sql->execute(array(
                $_POST['Nome_Aluno'][$index],
                $_POST['Primeira_Avaliação'][$index],
                $_POST['Segunda_Avaliação'][$index],
                $_POST['Terceira_Avaliação'][$index],
                $_POST['Prova_Final'][$index],
                $id
            ));
        }
        echo "Notas atualizadas com sucesso!";
        header('Location: ../lancarNotas.php');
        exit();
    }

    // Verifica se o formulário de exclusão foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluir_aluno'])) {
        $id = $_POST['id']; // Recebe o ID do aluno para excluir
        $sql = $pdo->prepare("DELETE FROM notaalunos WHERE id = ?");
        if ($sql->execute([$id])) {
            echo "Nota excluída com sucesso!";
        } else {
            echo "Erro ao excluir nota.";
        }
        // Redireciona de volta para a lista de notas
        header('Location: ../lancarNotas.php');  
        exit();
    }

    // Seleciona os dados da tabela
    $sql = $pdo->prepare("SELECT * FROM notaalunos");
    $sql->execute();
    $fetchAlunos = $sql->fetchAll();

    // Exibe os dados em um formulário para edição e exclusão
    echo "<form method='post' action=''>";
    echo "<table border='1'>
            <tr>
                <th>Nome do Aluno</th>
                <th>Primeira Avaliação</th>
                <th>Segunda Avaliação</th>
                <th>Terceira Avaliação</th>
                <th>Prova Final</th>
                <th>Média (%)</th>
                <th>Ação</th>
            </tr>";

    foreach ($fetchAlunos as $key => $value) {
        $media = ($value['Primeira_Avaliação'] + $value['Segunda_Avaliação'] + $value['Terceira_Avaliação'] + $value['Prova_Final']) / 4;
        $mediaPercentual = ($media / 10) * 100;

        echo "<tr>";
        echo "<td><input type='text' name='Nome_Aluno[]' value='".$value['Nome_Aluno']."'></td>";
        echo "<td><input type='number' step='0.01' name='Primeira_Avaliação[]' value='".$value['Primeira_Avaliação']."'></td>";
        echo "<td><input type='number' step='0.01' name='Segunda_Avaliação[]' value='".$value['Segunda_Avaliação']."'></td>";
        echo "<td><input type='number' step='0.01' name='Terceira_Avaliação[]' value='".$value['Terceira_Avaliação']."'></td>";
        echo "<td><input type='number' step='0.01' name='Prova_Final[]' value='".$value['Prova_Final']."'></td>";
        echo "<td>".round($mediaPercentual, 2)." %</td>";

        // Formulário de exclusão para cada linha
        echo "<td>
                <form method='post' action='./backend/excluirNota.php' style='display:inline;'>
                    <input type='hidden' name='id' value='".$value['id']."'>
                    <button type='submit' name='excluir_aluno'>x</button>
                </form>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<button type='submit' name='salvar_edicao'>Salvar Edições</button>";
    echo "</form>";
?>
