<?php
namespace sispo\views;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        require 'includes/head.php';
        ?>
        <title>Sispo | Login</title>
    </head>
    <body class="bg-login">
        <?php
        require 'includes/navbar-basic.php';
        ?>

        <section>
            <div id="overlay-login">
                <div class="container container-login">
                    <div class="row">
                        <div class="col-4 offset-4">
                            <div class="card card-cadastro">
                                <div class="card-body">
                                    <!-- Mostra alerta se o email ou a senha estão incorretos ou usuário não existe no BD -->
                                    <?php
                                    if (isset($_SESSION['login_failed']) && $_SESSION['login_failed'] === 1) {
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        Email ou senha incorretos!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                                    }
                                    unset($_SESSION['login_failed']);
                                    ?>
                                    <h1 class="title-login">Entrar</h1>
                                    <hr/>
                                    <form action="index.php?section=usuario&action=entrar" method="post">
                                        <div class="form-group">
                                            <label class="font-weight-bold" for="email">E-mail</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold" for="senha">Senha</label>
                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha de acesso" required>
                                        </div>
                                        <br/>
                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-info btn-login">Entrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <!-- Mostra alerta se o cadastro foi realizado com sucesso -->
                            <?php
                            if (isset($_SESSION['cadastro_ok']) && $_SESSION['cadastro_ok']['status'] === 1) {
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Cadastro realizado com sucesso!<br/>Entre com suas credenciais, <strong><?= $_SESSION['cadastro_ok']['nome'] ?></strong>.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                            }
                            unset($_SESSION['cadastro_ok']);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript" src="views/bootstrap-4.3.1/js/jquery.js"></script>
        <script type="text/javascript" src="views/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>