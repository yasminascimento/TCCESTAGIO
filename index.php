<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Estágio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
<body>

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

        <div class="search-box">
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

        <div id="metricas-box">
    <h2>Métricas de Gestão de Estágio</h2>
</div>

<div class="card-container">
    <div class="card-one">
        <h3>Card 1</h3>
        <p>Conteúdo do Card 1</p>
    </div>
    <div class="card-one">
        <h3>Card 2</h3>
        <p>Conteúdo do Card 2</p>
    </div>
</div> <!-- Fechando .card-container -->

<!-- segunda coluna de card -->
<div class="card-container-two">
    <div class="card-two">
        <h3>Card 1</h3>
        <p>Conteúdo do Card 1</p>
    </div>
    <div class="card-two">
        <h3>Card 2</h3>
        <p>Conteúdo do Card 2</p>
    </div>
</div> <!-- Fechando .card-container-two -->

<div id="metricas-boxs">
    <h2>Performace de entrega dos alunos</h2>
</div>

<div class="tabela">
    <table class="tabela">
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
    <button class="ver-mais">Ver mais</button>
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
                            <div class="title">Adicionar</div>
                            <i class="fas fa-times close"></i>
                        </div>
                        <div class="add-event-body">
                            <div class="add-event-input">
                                <input type="text" placeholder="Event Name" class="event-name" />
                            </div>
                            <div class="add-event-input">
                                <input type="text" placeholder="Event Time From" class="event-time-from" />
                            </div>
                            <div class="add-event-input">
                                <input type="text" placeholder="Event Time To" class="event-time-to" />
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
<link rel="stylesheet" href="../style.css">
<script src="src/javascript/script.js"></script>
</body>

</html>
