<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <title>Sidebar</title>

</head>
<body class="relatorioaluno">

    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <img src="https://st.depositphotos.com/1049680/59300/i/600/depositphotos_593003402-stock-photo-hispanic-man-beard-wearing-business.jpg" id="user_avatar" alt="Avatar">

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

        <div class="search-box5">
            <div class="icon-search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div><!--icon-search-->

            <div class="input-search">
                <input type="text" name="" id="" placeholder="Buscar">
            </div><!--input-search-->

            <div class="btn-close">
                <i class="fa-regular fa-circle-xmark"></i>
            </div><!--btn-close-->
        </div><!--search-box-->

        <div id="data-box"> </div> <!-- date-box-->


        <div id="metricas-box " class="metricas-box">
            <h2>Relatório</h2>
        </div>

        <div class="containeraluno2">
            <div class="filter-header">
                <h3 class='filtroaluno'>Filtro</h3>
                <h3 class='limparfiltroaluno'>Limpar filtro</h3>
            </div>

            <div class="filter-section desempenhoaluno">
                <h3 class="desempenho2">Desempenho</h3>
                <div class="filter-buttons">
                    <button class="botaodesempenho1">Baixo</button>
                    <button class="botaodesempenho2">Alto</button>
                </div>
            </div>

            <div class="filter-section semestrealuno">
                <h3 class="semestre2">Semestre</h3>
                <div class="filter-buttons">
                    <button class="botaosemestre1">4°</button>
                    <button class="botaosemestre2">5°</button>
                    <button class="botaosemestre3">6°</button>
                </div>
            </div>

            <div class="filter-section nomealuno">
                <h3 class="nome2">Nome</h3>
                <div class="filter-buttons">
                    <button class="botaonome1">Ascendente</button>
                    <button class="botaonome2">Descendente</button>
                </div>
            </div>

            <div class="filter-section periodoaluno">
                <h3 class="periodo2">Período</h3>
                <div class="filter-buttons period-buttons">
                    <select class="botaoperiodo1">
                        <option value="20/04/2024">20/04/2024</option>
                    </select>
                    <select class="botaoperiodo2">
                        <option value="25/04/2024">25/04/2024</option>
                    </select>
                </div>
            </div>

            <div class="filter-section entregaaluno">
                <h3 class="entrega2">Entrega Documento</h3>
                <div class="filter-buttons">
                    <button class="botaoentrega1">Completa</button>
                    <button class="botaoentrega2">Incompleta</button>
                </div>
            </div>
        </div>

        <div class="report-card">
            <div class="report-header">
                <div class="report-title">RELATÓRIO 001</div>
                <div class="report-date">20/04/2024 - 20:30</div>
            </div>
            <div class="report-subtitle">Relatório de desempenho</div>
            <div class="report-footer">
                <div class="report-buttons">
                    <button class="btn delete">Excluir</button>
                    <button class="btn download">Download</button>
                </div>
            </div>
        </div>
        <div class="report-card2">
            <div class="report-header">
                <div class="report-title">RELATÓRIO 002</div>
                <div class="report-date">20/04/2024 - 20:30</div>
            </div>
            <div class="report-subtitle">Relatório de desempenho</div>
            <div class="report-footer">
                <div class="report-buttons">
                    <button class="btn delete">Excluir</button>
                    <button class="btn download">Download</button>
                </div>
            </div>
        </div>





        <main class="relatorioaluno2">
            <div class="container">
                <div class="left">
                    <div class="calendar">
                        <div class="month">
                            <i class="fa fa-angle-left prev"></i>
                            <div class="date">novembro 2022</div>
                            <i class="fa fa-angle-right next"></i>

                        </div>
                        <div class="weekdays">
                            <div>dom</div>
                            <div>seg</div>
                            <div>ter</div>
                            <div>qua</div>
                            <div>qui</div>
                            <div>sex</div>
                            <div>sab</div>

                        </div>

                        <div class="days"></div>
                        <div class="goto-today">
                            <div class="goto">
                                <input type="text" placeholder="mm/yyyy" class="date-input" />
                                <button class="goto-btn">Go</button>
                            </div>
                            <button class="today-btn">Today</button>
                        </div>
                    </div>
                </div>


                <div class="right">
                    <div class="today-date">
                        <div class="event-day">wed</div>
                        <div class="event-date">12th december 2022</div>
                    </div>
                    <div class="events"></div>
                    <div class="add-event-wrapper">
                        <div class="add-event-header">
                            <div class="title">Novo Evento</div>
                            <i class="fas fa-times close"></i>
                        </div>
                        <div class="add-event-body">
                            <div class="add-event-input">
                                <input type="text" placeholder="Nome:" class="event-name" />
                            </div>
                            <div class="add-event-input">
                                <input type="text" placeholder="Horario de:" class="event-time-from" />
                            </div>
                            <div class="add-event-input">
                                <input type="text" placeholder="Horario até:" class="event-time-to" />
                            </div>
                        </div>
                        <div class="add-event-footer">
                            <button class="add-event-btn">Adicionar Evento</button>
                        </div>
                    </div>
                </div>
                <button class="add-event">
                    <i class="fas fa-plus"></i>
                </button>
            </div>

        </main>

        <script src="../script.js"></script>
</body>

</html>


</main>
