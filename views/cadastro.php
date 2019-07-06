<?php
namespace sispo\views;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        require 'includes/head.php';
        ?>
        <title>Sispo | Cadastro</title>
    </head>
    <body class="bg-cadastro">
        <?php
        require 'includes/navbar-basic.php';
        ?>

        <section>
            <div id="overlay-cadastro">
                <div class="container container-cadastro">
                    <div class="row">
                        <div class="col-10 offset-1">
                            <div class="card card-cadastro">
                                <div class="card-body">
                                    <?php
                                    $emailExists = false;
                                    if (isset($_SESSION['email_exists']) && $_SESSION['email_exists']['status'] === 1) {
                                        $emailExists = true;
                                        $nome = $_SESSION['email_exists']['nome']; $sobrenome = $_SESSION['email_exists']['sobrenome'];
                                        $dia = $_SESSION['email_exists']['dia']; $mes = $_SESSION['email_exists']['mes'];
                                        $ano = $_SESSION['email_exists']['ano']; $sexo = $_SESSION['email_exists']['sexo'];
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        O email informado já existe na base de dados!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <?php
                                    }
                                    unset($_SESSION['email_exists']);
                                    ?>
                                    <h1 class="title-cadastro">Cadastre-se no Sispo</h1>
                                    <hr/>
                                    <form action="index.php?section=usuario&action=cadastrar" method="post">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="nome">Nome</label>
                                                    <input type="text" class="form-control" id="nome" name="nome"
                                                           value="<?= $emailExists ? $nome : ''?>"
                                                           placeholder="Digite seu nome" required autocomplete="none"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="sobrenome">Sobrenome</label>
                                                    <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                                                           value="<?= $emailExists ? $sobrenome : ''?>"
                                                           placeholder="Digite seu sobrenome" required autocomplete="none"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="font-weight-bold" for="data_nascimento">Data de nascimento</label>
                                                <div class="row" id="data_nascimento">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <select class="form-control" name="dia">
                                                                <option selected><?= $emailExists ? $dia : 'Dia'?></option>
                                                                <?php
                                                                for ($i=1; $i<=31; $i++) {
                                                                    if ($i<10) {
                                                                ?>
                                                                    <option>0<?= $i?></option>
                                                                <?php
                                                                    }
                                                                    else {
                                                                ?>
                                                                    <option><?=$i?></option>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <?php
                                                            $meses = [
                                                                'Janeiro','Fevereiro','Março','Abril','Maio','Junho',
                                                                'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'
                                                            ];
                                                            ?>
                                                            <select class="form-control" name="mes">
                                                                <option value="<?= $emailExists ? $mes : ''?>" selected><?= $emailExists ? $meses[$mes-1] : 'Mês'?></option>
                                                                <?php
                                                                for ($i=0; $i<12; $i++) {
                                                                ?>
                                                                    <option value="<?=$i+1?>"><?=$meses[$i]?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <select class="form-control" name="ano">
                                                                <option selected><?= $emailExists ? $ano : 'Ano'?></option>
                                                                <?php
                                                                for ($i=1900; $i<=date('Y'); $i++) {
                                                                ?>
                                                                    <option><?=$i?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="font-weight-bold" for="sexo">Sexo</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <?php
                                                        if (!$emailExists) {
                                                        ?>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
                                                            <label class="form-check-label" for="masculino">Masculino</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino">
                                                            <label class="form-check-label" for="feminino">Feminino</label>
                                                        </div>
                                                        <?php
                                                        }
                                                        else {
                                                            if ($sexo === 'masculino') {
                                                        ?>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino" checked>
                                                                <label class="form-check-label" for="masculino">Masculino</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino">
                                                                <label class="form-check-label" for="feminino">Feminino</label>
                                                            </div>
                                                        <?php
                                                            }
                                                             else {
                                                        ?>
                                                             <div class="form-check form-check-inline">
                                                                 <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
                                                                 <label class="form-check-label" for="masculino">Masculino</label>
                                                             </div>
                                                             <div class="form-check form-check-inline">
                                                                 <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino" checked>
                                                                 <label class="form-check-label" for="feminino">Feminino</label>
                                                             </div>
                                                        <?php
                                                             }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="email">E-mail</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu melhor e-mail" required autocomplete="none">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="font-weight-bold" for="senha">Senha</label>
                                                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha de acesso" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="font-weight-bold" for="confirma_senha">Repetir senha</label>
                                                            <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" placeholder="Repita a senha" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-info btn-cadastro2">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript" src="views/bootstrap-4.3.1/js/jquery.js"></script>
        <script type="text/javascript" src="views/bootstrap-4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="views/bootstrap-4.3.1/js/validaSenha.js"></script>
    </body>
</html>