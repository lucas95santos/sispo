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
                                Novo movimento
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="link" class="nav-link nav-text-link" href="#" title="Adicionar nova conta">
                        <div class="row">
                            <div class="col-auto">
                                <img src="assets/icones/plus.png" alt="Nova conta">
                            </div>
                            <div class="col-auto margin-item-sidebar">
                                Nova conta
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown" style="margin-right: 60px;">
                    <a class="nav-link dropdown-toggle nav-text-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['usuario_autenticado']['nome'] ?>
                    </a>
                    <div class="dropdown-menu bg-dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item nav-text-link" href="#" title="Perfil de usuário">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="assets/icones/user.png" alt="Perfil de usuário">
                                </div>
                                <div class="col-auto margin-item-sidebar">
                                    Perfil
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item nav-text-link" href="#" title="Configurações do sistema">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="assets/icones/settings.png" alt="Configurações do sistema">
                                </div>
                                <div class="col-auto margin-item-sidebar">
                                    Configurações
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider" style="color: #fff;"></div>
                        <a class="dropdown-item nav-text-link" href="index.php?section=dashboard&action=logout" title="Sair do sistema">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="assets/icones/sair.png" alt="Sair do sistema">
                                </div>
                                <div class="col-auto margin-item-sidebar">
                                    Sair
                                </div>
                            </div>
                        </a>
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