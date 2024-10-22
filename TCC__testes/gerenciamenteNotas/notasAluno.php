<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="nexum icon" href="../home/frontend/img/nexum_pretp.png">
    <link rel="stylesheet" href="./pagina-notas-aluno.css">
    <link rel="stylesheet" href="./search.css">
    <link rel="stylesheet" href="./menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Atribuir Notas</title>
</head>

<body>
    <header class="cabeçario">
        <div class="perfil-usuário">
            <img src="../home/frontend/img/user.png" alt="Foto de perfil usuário">
            <?php include '../home/backend/header.php'; ?>
        </div>

        <nav>
            <input type="checkbox" id="active">
            <label for="active" class="menu-btn"><span></span></label>
            <label for="active" class="close"></label>
            <div class="wrapper">
                <ul>
                    <li><a href="../home/frontend/tela-home.php">Home</a></li>
                    <li><a href="../../BiBloteca/TCC.php">Bibloteca</a></li>
                    <li><a href="../../ChatAoVivo/frontend/index.html">Chat</a></li>
                    <li><a href="#">Lista</a></li>
                    <li><a href="#">Config</a></li>
                    <li><a href="../../Agenda/index.php">Calendário</a></li>
                </ul>
            </div>
        </nav>

        <div class="opcoes-areas">
            <h1 class="opcoes-tela camada"><a href="../home/frontend/tela-home.php"><img src="./img/house.svg" alt="icone para voltar inicio"></a></h1>
            <p class="textoEfeito">></p>
            <h1 class="opcoes-tela camada"><a href="../ChatAoVivo/frontend/index.html">Chat</a></h1>
            <p class="textoEfeito">></p>
            <h1 class="opcoes-tela camada"><a href="../Agenda/index.php">Agenda</a></h1>
            <p class="textoEfeito">></p>
            <h1 class="opcoes-tela camada"><a href="#">Lista</a></h1>
            <p class="textoEfeito">></p>
            <h1 class="opcoes-tela"><a href="../config.html"><img src="./img/config.svg" alt="imagem config"></a></h1>
        </div>
    </header>

    <section class="container-sala">

        <div class="card-acoes active um " id="card">
            <h1 class="text-card">Ver Notas</h1>
            <i class="bi bi-capslock"></i>
        </div>

        <section class="off section-lista-notas" id="sectionListaNotas">
            <form method="post" id="tabelaEditNotas" class="tabelaEditNotas" action="./backend/puxarLista.php">

            </form>
        </section>


    </section>



    <script src="./aluno-card.js"></script>
</body>

</html>