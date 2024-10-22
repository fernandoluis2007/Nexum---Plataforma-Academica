<?php
    $pdo = new PDO('mysql:host=localhost;dbname=plataforma_nexum', 'root', '');

    //verifica se o formulario foi enviado
    if(isset($_POST['primeira_Avaliação'])) {
        
        $sql = $pdo->prepare("INSERT INTO notaalunos (id, Primeira_Avaliação, Segunda_Avaliação, Terceira_Avaliação, Prova_Final, Nome_Aluno) VALUES (null, ?, ?, ?, ?, ?)");

        
        $sql->execute(array($_POST['primeira_Avaliação'], $_POST['segunda_Avaliação'], $_POST['terceira_Avaliação'], $_POST['prova_Final'], $_POST['nome_Aluno']));

        
        header('Location: ../lancarNotas.php');
        exit();
    }
?>
