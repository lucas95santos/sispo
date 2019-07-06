<nav id="navbar-standard" class="navbar fixed-top navbar-expand-lg navbar-dark navbar-color">
    <div class="container-fluid">
        <a class="navbar-brand anchor" href="index.php?section=dashboard" title="Painel de Controle">
            <img src="assets/images/sispo-50x50.png" alt="Logo Sispo"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a id="link" class="nav-link nav-text-link" href="#" title="Adicionar novo movimento">
                        <div class="row">
                            <div class="col-auto">
                                <img src="assets/icones/add.png" alt="Novo movimento">
                            </div>
                            <div class="col-auto margin-item-sidebar">
                                Novo
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-text-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Nova conta</a>
                        <a class="dropdown-item" href="#">Altarar conta</a>
                    </div>
                </li>
                <li class="nav-item dropdown" style="margin-right: 60px;">
                    <a class="nav-link dropdown-toggle nav-text-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['usuario_autenticado']['nome'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Configurações</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?section=dashboard&action=logout">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="side-bar-content">
                <ul class="navbar-nav">
                    <li class="nav-item side-bar-item-nav">
                        <a id="link" class="nav-link side-bar-text-link" href="#" title="Ir para o Painel de Controle">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="assets/icones/dashboard.png" alt="Dashboard">
                                </div>
                                <div class="col-auto margin-item-sidebar">
                                    Painel de Controle
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item side-bar-item-nav">
                        <a id="link" class="nav-link side-bar-text-link" href="#" title="Ir para as suas contas">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="assets/icones/contas-sm.png" alt="Contas">
                                </div>
                                <div class="col-auto margin-item-sidebar">
                                    Contas
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item side-bar-item-nav">
                        <a id="link" class="nav-link side-bar-text-link" href="#" title="Ir para as suas movimentações de entrada">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="assets/icones/receitas-sm.png" alt="Entradas">
                                </div>
                                <div class="col-auto margin-item-sidebar">
                                    Entradas
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item side-bar-item-nav">
                        <a id="link" class="nav-link side-bar-text-link" href="#" title="Ir para as suas movimentações de saída">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="assets/icones/despesas-sm.png" alt="Saídas">
                                </div>
                                <div class="col-auto margin-item-sidebar">
                                    Saídas
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>