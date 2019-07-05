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
                                    <h1 class="title-cadastro">Cadastre-se no Sispo</h1>
                                    <hr>
                                    <form action="index.php?section=usuario&action=cadastrar" method="post">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="name">Nome</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="last_name">Sobrenome</label>
                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Digite seu sobrenome" required>
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
                                                                <option selected>Dia</option>
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
                                                            <select class="form-control" name="mes">
                                                                <option selected>Mês</option>
                                                                <?php
                                                                $meses = [
                                                                    'Janeiro','Fevereiro','Março','Abril','Maio','Junho',
                                                                    'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'
                                                                ];
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
                                                                <option selected>Ano</option>
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
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sexo" id="masculino" value="MASCULINO">
                                                            <label class="form-check-label" for="masculino">Masculino</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sexo" id="feminino" value="FEMININO">
                                                            <label class="form-check-label" for="feminino">Feminino</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold" for="email">E-mail</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu melhor e-mail" required>
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
                                        <br>
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
    </body>
</html>