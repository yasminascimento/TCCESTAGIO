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

<body class="containerperformaceentrega">

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



    <main class="performaceentrega">

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

        <div id="metricasbox5">
            <h2>Performace de entrega dos alunos</h2>
        </div>


        <div class="entrega2">

            <div class="filter-header">
                <h3 class='filtroaluno'>Filtro</h3>
                <h3 class='limparfiltroaluno'>Limpar filtro</h3>
            </div>

            <div class="filter-section desempenhoaluno">
                <h3 class="desempenho2">Desempenho</h3>
                <div class="filter-buttons2">
                    <button class="botaodesempenho1">Baixo</button>
                    <button class="botaodesempenho2">Alto</button>
                </div>
            </div>

            <div class="filter-section semestrealuno">
                <h3 class="semestre2">Semestre</h3>
                <div class="filter-buttons2">
                    <button class="botaosemestre1">4°</button>
                    <button class="botaosemestre2">5°</button>
                    <button class="botaosemestre3">6°</button>
                </div>
            </div>

            <div class="filter-section nomealuno">
                <h3 class="nome2">Nome</h3>
                <div class="filter-buttons2">
                    <button class="botaonome1">Asc</button>
                    <button class="botaonome2">Desc</button>
                </div>
            </div>
        </div>

        <div class="tabelaaluno1">
            <table class="tabelaaluno1">
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>PERÍODO</th>
                        <th>DOCUMENTO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://st5.depositphotos.com/4678277/65847/i/600/depositphotos_658476394-stock-photo-photo-toothy-beaming-lovely-girl.jpg" alt="Daniela Lima"> Daniela Lima</td>
                        <td><a href="mailto:daniela.lima@fatec.sp.gov.br">daniela.lima@fatec.sp.gov.br</a></td>
                        <td>6°</td>
                        <td><span class="status pendente">Pendente</span></td>
                    </tr>
                    <tr>
                        <td><img src="https://st3.depositphotos.com/12985790/15794/i/600/depositphotos_157947226-stock-photo-man-looking-at-camera.jpg" alt="Daniel Lima"> Daniel Lima</td>
                        <td><a href="mailto:daniel.lima@fatec.sp.gov.br">daniel.lima@fatec.sp.gov.br</a></td>
                        <td>6°</td>
                        <td><span class="status completo">Completo</span></td>
                    </tr>
                    <tr>
                        <td><img src="https://st4.depositphotos.com/1036367/31538/i/600/depositphotos_315389664-stock-photo-half-length-shot-pleasant-looking.jpg" alt="Maisa Santos"> Maisa Santos</td>
                        <td><a href="mailto:maisa.santos@fatec.sp.gov.br">maisa.santos@fatec.sp.gov.br</a></td>
                        <td>6°</td>
                        <td><span class="status completo">Completo</span></td>
                    </tr>
                </tbody>
            </table>
            <button class="ver-maisaluno">Ver mais</button>
        </div> <!-- Fechando .table -->


        <main>
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
