<body class="consultaaluno">

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

    <div class="metricaaluno3">
        <h2>Aluno</h2>
    </div>

    <div class="filtro-retangulo">
        <div class="filtro">
            <h2>Filtro</h2>
        </div>
    </div>


    <main class="consultaalunomain">

        <div class="consultaaluno3">
            <h4>Consulta</h4>
        </div>
        <div class="linha">
        </div>

        <div class="search-box1">
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

        <div class="voltar">
            <img src='https://static.vecteezy.com/ti/vetor-gratis/p1/5951810-back-button-interface-icon-ilustracao-vetor.jpg' width="50px" height="50px">
        </div>

        <div class="tabela3">
            <table class="table3">
                <thead  class="tabela4">
                    <tr class="tabela4">
                        <th>NOME</th>
                        <th>RA</th>
                        <th>E-MAIL</th>
                        <th>PERÍODO</th>
                        <th>CONTATO</th>
                        <th>SITUAÇÃO</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr  class="tabela4">
                        <td><img src="https://via.placeholder.com/40" alt="Daniela Lima"> Daniela Lima</td>
                        <td>0102030405</td>
                        <td><a href="mailto:daniela.lima@fatec.sp.gov.br">daniela.lima@fatec.sp.gov.br</a></td>
                        <td>6° período</td>
                        <td>(15) 9995-123452</td>
                        <td><span class="status ativo">Ativo</span></td>
                        <td class="add"><img src='https://cdn-icons-png.flaticon.com/512/18/18659.png'></td>
                    </tr>
                    <tr  class="tabela4">
                        <td><img src="https://via.placeholder.com/40" alt="Maria Silva"> Maria Silva</td>
                        <td>0102030409</td>
                        <td><a href="mailto:maria.silva@fatec.sp.gov.br">maria.silva@fatec.sp.gov.br</a></td>
                        <td>5° período</td>
                        <td>(15) 9995-234567</td>
                        <td><span class="status ativo">Ativo</span></td>
                        <td class="add"><img src='https://cdn-icons-png.flaticon.com/512/18/18659.png'></td>
                    </tr>
                    <tr  class="tabela4">
                        <td><img src="https://via.placeholder.com/40" alt="Julia Pereira"> Julia Pereira</td>
                        <td>0102030488</td>
                        <td><a href="mailto:julia.pereira@fatec.sp.gov.br">julia.pereira@fatec.sp.gov.br</a></td>
                        <td>5° período</td>
                        <td>(15) 9995-116738</td>
                        <td><span class="status desativado">Desativado</span></td>
                        <td class="add"><img src='https://cdn-icons-png.flaticon.com/512/18/18659.png'></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </main>
