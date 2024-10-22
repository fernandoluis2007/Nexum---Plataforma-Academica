<?php
    $pdo = new PDO('mysql:host=localhost;dbname=plataforma_nexum', 'root', '');

    // Consulta para buscar todas as notas da tabela
    $sql = $pdo->prepare("SELECT * FROM notaalunos");
    $sql->execute();

    $fetchAlunos = $sql->fetchAll();

    if (!empty($fetchAlunos)) {
        echo "<table border='1'>
                <tr>
                    <th>Nome do Aluno</th>
                    <th>Primeira Avaliação</th>
                    <th>Segunda Avaliação</th>
                    <th>Terceira Avaliação</th>
                    <th>Prova Final</th>
                    <th>Média (%)</th>
                </tr>";

        foreach ($fetchAlunos as $value) {
            // Calcular a média
            $media = ($value['Primeira_Avaliação'] + $value['Segunda_Avaliação'] + $value['Terceira_Avaliação'] + $value['Prova_Final']) / 4;
            $mediaPercentual = ($media / 10) * 100;

            echo "<tr>";
            echo "<td>".$value['Nome_Aluno']."</td>";
            echo "<td>".$value['Primeira_Avaliação']."</td>";
            echo "<td>".$value['Segunda_Avaliação']."</td>";
            echo "<td>".$value['Terceira_Avaliação']."</td>";
            echo "<td>".$value['Prova_Final']."</td>";
            echo "<td>".round($mediaPercentual, 2)." %</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhuma nota encontrada.";
    }
?>
