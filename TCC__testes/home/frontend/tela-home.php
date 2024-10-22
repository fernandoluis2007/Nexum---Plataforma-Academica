<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="nexum icon" href="./img/nexum_pretp.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../backend/js/script.js" defer></script>
    <title>Página Principal</title>
</head>

<body>
    <header class="cabeçario">
        <div class="perfil-usuário">
        <img src="./img/user.png" alt="Foto de perfil usuário">
        <?php include '../../home/backend/header.php'; ?>
        </div>

            <div class="opcoes-areas">
                <h1 class="opcoes-tela camada">Bibloteca</h1>
                <h1 class="opcoes-tela camada"><a class="link" href="../../ChatAoVivo/frontend/index.html">Chat</a></h1>
                <h1 class="opcoes-tela camada"><a class="link" href="../../Agenda/views/user/index.php">Calendário</a></h1>
                <h1 class="opcoes-tela camada">Lista</h1>
                <h1 class="opcoes-tela"><a href = "../config.html"><img src="./img/config.png" alt="imagem config"></a></h1>
            </div>

        <nav>
            <input type="checkbox" id="active">
            <label for="active" class="menu-btn"><span></span></label>
            <label for="active" class="close"></label>
            <div class="wrapper">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="../../BiBloteca/TCC.php">Bibloteca</a></li>
                    <li><a href="../../ChatAoVivo/frontend/index.html">Chat</a></li>
                    <li><a href="#">Lista</a></li>
                    <li><a href="#">Config</a></li>
                    <li><a href="../../Agenda/index.php">Calendário</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="container">
        <main>
            <div class="container__slider">
                <button id="prev-button"><img src="./img/arrow.png" alt="prev-button"></button>
                <div class="container__imagens">
                    <img src="./img/enemSlide.jpg" alt="Imagem do Slider" class="slider on">
                    <img src="./img/enemSlide2.jpg" alt="Imagem do Slider" class="slider">
                </div>
                <button id="next-button"><img src="./img/arrow.png" alt="next-button"></button>
            </div>
            <div class="card-container">
                <div class="card">
                    <h3><a class="link" href="../../BiBloteca/TCC.php">Bibloteca</a></h3>
                    <img class="img-card" src="./img/book-half.svg" alt="Área Bibloteca">
                </div>
                <div class="card">
                    <h3><a class="link" href="../../ChatAoVivo/frontend/index.html">Chat</a></h3>
                    <img class="img-card" src="./img/chat-quote.svg" alt="Área Chat">
                </div>
                <div class="card">
                    <h3>Lista</h3>
                    <img class="img-card" src="./img/clipboard2-plus.svg" alt="Área Lista">
                </div>
                <div class="card">
                    <h3><a class="link" href="../../gerenciamenteNotas/notasAluno.php">Notas</a></h3>
                    <img class="img-card svgColor" src="./img/journal-plus.svg" alt="Área Chat">
                </div>
            </div>
    </section>
    </main>
</body>

</html>