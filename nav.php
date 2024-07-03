<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Incluir o Font Awesome via CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="styles.css">
        <title>Sidebar</title>
    </head>
    
<body>
    <?php include 'nav.php'; ?>

    <nav id="sidebar">
    <div id="sidebar_content">
        <div id="user">
            <img src="src/images/avatar.jpg" id="user_avatar" alt="Avatar">

            <p id="user_infos">
                <span class="item-description">
                    nome do professor
                </span>
                <span class="item-description">
                    curso responsável
                </span>
            </p>
        </div>

        <ul id="side_items">
            <li class="side-item active">
                <a href="#">
                    <i class="fa-solid fa-house"></i>
                    <span class="item-description">
                        Home
                    </span>
                </a>
            </li>

            <li class="side-item">
                <a href="#">
                    <i class="fa-solid fa-user-graduate"></i>
                    <span class="item-description">
                        Aluno
                    </span>
                </a>
            </li>

            <li class="side-item">
                <a href="#">
                    <i class="fa-regular fa-clipboard"></i>
                    <span class="item-description">
                        Relatório
                    </span>
                </a>
            </li>

            <li class="side-item">
                <a href="#">
                    <i class="fa-solid fa-file-import"></i>
                    <span class="item-description">
                       Importar Dados
                    </span>
                </a>
            </li>

            <li class="side-item">
                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span class="item-description">
                        Configurações
                    </span>
                </a>
            </li>
        </ul>

        <button id="open_btn">
            <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
        </button>
    </div>

    <div id="logout">
        <button id="logout_btn">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="item-description">
              Sair
            </span>
        </button>
    </div>
</nav>

<main>
   

    <div class="search-box">
        <div class="class"></div>
      
    </div>
</main>
<script src="src/javascript/script.js"></script>
</body>
