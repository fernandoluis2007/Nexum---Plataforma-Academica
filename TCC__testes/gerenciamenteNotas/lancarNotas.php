<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="nexum icon" href="../home/frontend/img/nexum_pretp.png">
    <link rel="stylesheet" href="./pagina-notas.css">
    <link rel="stylesheet" href="./search.css">
    <link rel="stylesheet" href="./menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Atribuir Notas</title>
</head>

<body>
    <header class="cabeçario">
        <div class="perfil-usuário">
            <img src="../home/frontend/img/user.png" alt="Foto de perfil usuário">
            <?php include '../home/backend/headerProf.php'; ?>
        </div>

        <nav>
            <input type="checkbox" id="active">
            <label for="active" class="menu-btn"><span></span></label>
            <label for="active" class="close"></label>
            <div class="wrapper">
                <ul>
                    <li><a href="../home/frontend/tela-home-professor.php">Home</a></li>
                    <li><a href="../../BiBloteca/TCC.php">Bibloteca</a></li>
                    <li><a href="../../ChatAoVivo/frontend/index.html">Chat</a></li>
                    <li><a href="#">Lista</a></li>
                    <li><a href="#">Config</a></li>
                    <li><a href="../../Agenda/index.php">Calendário</a></li>
                </ul>
            </div>
        </nav>

        <div class="opcoes-areas">
            <h1 class="opcoes-tela camada"><a href="../home/frontend/tela-home-professor.php"><img src="./img/house.svg" alt="icone para voltar inicio"></a></h1>
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
        <section class="off section-notas" id="sectionNotas">
            <form method="post" id="tabelaNotas" class="tabelaNotas" action="./backend/crud.php">
                <tbody>
                    <tr>
                        <td>Atividade 1</td>
                        <td><input class="inputNotas" type="number" name="primeira_Avaliação" min="0" max="10" placeholder="Nota"></td>
                    </tr>
                    <tr>
                        <td>Atividade 2</td>
                        <td><input class="inputNotas" type="number" name="segunda_Avaliação" min="0" max="10" placeholder="Nota"></td>
                    </tr>
                    <tr>
                        <td>Atividade 4</td>
                        <td><input class="inputNotas" type="number" name="terceira_Avaliação" min="0" max="10" placeholder="Nota"></td>
                    </tr>
                    <tr>
                        <td>Nota Prova</td>
                        <td><input class="inputNotas" type="number" name="prova_Final" min="0" max="10" placeholder="Nota"></td>
                    </tr>
                    <tr>
                        <td>Nome Aluno</td>
                        <td><input class="inputNotas" type="text" name="nome_Aluno" placeholder="Nome Usuário"></td>
                    </tr>
                </tbody>
                <input type="submit" value="Envia">
            </form>
            <div id="mensagem"></div>
        </section>

        <div class="card-acoes active um " id="card">
            <h1 class="text-card">Lançar Notas</h1>
            <i class="bi bi-capslock"></i>
        </div>

        <section class="off section-lista-notas" id="sectionListaNotas">
            <form method="post" id="tabelaEditNotas" class="tabelaEditNotas" action="./backend/listarNotasAlunos.php">

            </form>
            <div id="mensagem"></div>
        </section>

        <div class="card-acoes dois" id="card2">
            <h1 class="text-card">Atualizar Notas</h1>
            <i class="bi bi-clipboard2-data"></i>
        </div>

    </section>



    <script src="./acionarCard.js"></script>
    <script src="./mensageLista.js"></script>
</body>

</html>