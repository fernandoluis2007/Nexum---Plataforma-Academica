<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['professor_id'])) {
    header("Location: ../../frontend/tela-login-professor.html");
    exit();
}else{
    
}

$nomeProfessor = $_SESSION['professor_nome'];
?>
<span class="nome-usuario"><?php echo htmlspecialchars($nomeProfessor); ?></span>
<style>
    :root {
        --fonte-principal: "Poppins", sans-serif;
        --fonte-segundaria: "Mukta", sans-serif;
        --federal-blue: #03045eff;
        --marian-blue: #023e8aff;
        --honolulu-blue: #0077b6ff;
        --blue-green: #0096c7ff;
        --pacific-cyan: #00b4d8ff;
        --vivid-sky-blue: #48cae4ff;
        --non-photo-blue: #90e0efff;
        --non-photo-blue-2: #ade8f4ff;
        --light-cyan: #caf0f8ff;
    }

    .nome-usuario {
        font-family: var(--fonte-principal);
        font-size: 18px;
        font-weight: 600;
        color: var(--marian-blue);
        border: solid 1px rgba(255, 255, 255, 0);
        transition: .5s;
        border-radius: 20px 10px;
        padding: 7px; 
        text-transform: uppercase;
    }

    .nome-usuario:hover{
        transition: 0.5s;
        cursor: pointer;
    }

    
</style>