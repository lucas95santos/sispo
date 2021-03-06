<?php
namespace sispo\views;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        require 'includes/head.php';
        ?>
        <title>Sispo | Sistema de Planejamento Orçamentário</title>
    </head>
    <body>
        <?php
        require 'includes/navbar-standard.php';
        ?>

        <header class="bg-header" id="topo">
            <div class="container-fluid" id="overlay">
                <div class="row header-container">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-8 offset-lg-2 text-center">
                        <h1 class="header-title">Rápido e Simples</h1>
                        <h1 class="header-text">Sispo é um site feito com o intuito de lhe ajudar com todas as suas finanças e gastos. Em apenas alguns cliques suas finanças estarão todas organizadas.</h1>
                        <div class="text-center margin-btn-cadastro">
                            <a class="btn btn-info btn-cadastro" href="index.php?section=usuario&action=cadastro" title="Cadastre-se no Sispo">Cadastre-se hoje</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Seção detalhes -->
        <section id="detalhes" class="section-detalhes anime">
            <div class="container">
                <div class="text-center">
                    <h2 class="title-section-detalhes">Um endereço. <span class="span-title-section-detalhes">Todas as suas finanças.</span></h2>
                    <p class="paragraph-section-detalhes">Não faça parte de 62% das famílias brasileiras endividadas e controle suas finanças.</p>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center padding-section-detalhes">
                        <img src="assets/icones/money.png" class="img-fluid img-section-detalhes" alt="Organização"/>
                        <p class="paragraph2-section-detalhes">Tenha controle sobre os seus gastos de forma prática e rápida</p>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center padding-section-detalhes">
                        <img src="assets/icones/organize.png" class="img-fluid img-section-detalhes" alt="Organização"/>
                        <p class="paragraph2-section-detalhes">Tenha todas as informações organizadas em um só lugar</p>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center padding-section-detalhes">
                        <img src="assets/icones/consumer.png" class="img-fluid img-section-detalhes" alt="Organização"/>
                        <p class="paragraph2-section-detalhes">Saiba tudo o que acontece e não tenha surpresas no fim do mês</p>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- Seção funcionalidades -->
        <section id="funcionalidades" class="section-funcionalidades anime">
            <div class="container">
                <div class="text-center">
                    <h2 class="title-section-funcionalidades">O que o Sispo tem a oferecer?</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center">
                        <img src="assets/icones/receitas.png" class="img-fluid img-section-funcionalidades" alt="Receitas"/>
                        <p class="paragraph-section-funcionalidades">Registre e altere as suas receitas</p>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center">
                        <img src="assets/icones/despesas.png" class="img-fluid img-section-funcionalidades" alt="Despesas"/>
                        <p class="paragraph-section-funcionalidades">Cadastre todas as suas despesas</p>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center">
                        <img src="assets/icones/contas.png" class="img-fluid img-section-funcionalidades" alt="Contas"/>
                        <p class="paragraph-section-funcionalidades">Gerencie e fique no controle das suas contas</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center">
                        <img src="assets/icones/graficos.png" class="img-fluid img-section-funcionalidades" alt="Organização"/>
                        <p class="paragraph-section-funcionalidades">Veja gráficos atualizados das suas transações</p>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center">
                        <img src="assets/icones/relatorio.png" class="img-fluid img-section-funcionalidades" alt="Organização"/>
                        <p class="paragraph-section-funcionalidades">Visualize e imprima relatórios</p>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center">
                        <img src="assets/icones/aviso.png" class="img-fluid img-section-funcionalidades" alt="Organização"/>
                        <p class="paragraph-section-funcionalidades">Receba avisos para ficar sempre informado</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção missão -->
        <section id="missao" class="section-missao anime">
            <div class="container">
                <div class="row">
                    <div class="col-6 text-center">
                        <img src="assets/images/sispo-500x500.png" alt="Sispo"/>
                    </div>
                    <div class="col-6">
                        <h2 class="text-right font-oswald">Nossa missão</h2>
                        <p class="paragraph-section-missao">
                            O sistema <strong>Sispo</strong> visa ajudar o usuário a ter um maior controle de suas finanças.
                            Verificando se as receitas e despesas geradas pelo seu patrimônio e seus dependentes são compatíveis com suas necessidades atuais e futuras.
                            Por este motivo o sistema pretende trazer uma interface limpa e agradável ao usuário onde ele possa ter uma visão ampla de seus gastos diários,
                            semanais, mensais e anuais.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção contato -->
        <section id="contato" class="section-contato anime">
            <div class="container">
                <h2 class="text-center">Mande sua dúvida</h2>
                <div class="row">
                    <div class="col-4">
                        <p class="paragraph-section-contato">Email</p>
                        <div class="row paragraph2-section-contato">
                            <div class="col-auto">
                                <span class="far fa-envelope"></span>
                            </div>
                            <div class="col-auto">
                                <p>contato@sispo.com.br</p>
                            </div>
                        </div>

                        <p class="paragraph-section-contato">Telefone</p>
                        <div class="row paragraph2-section-contato">
                            <div class="col-auto">
                                <span class="fas fa-phone"></span>
                            </div>
                            <div class="col-auto">
                                <p>11 4140-8992</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <form class="form-contato" action="#" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="name">Nome</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="last_name">Sobrenome</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Digite seu sobrenome">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu melhor e-mail">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="subject">Assunto</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Informe o assunto da mensagem">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="message">Digite sua mensagem aqui</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info btn-contato">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-cadastro">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="cadastro-title">Não perca mais tempo!</p>
                        <p class="cadastro-text">Faça agora mesmo o seu cadastro e fique no controle de suas finanças.</p>
                        <div class="text-center margin-btn-cadastro">
                            <a class="btn btn-info btn-cadastro" href="index.php?section=usuario&action=cadastro" title="Cadastre-se no Sispo">Cadastre-se hoje</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        require 'includes/footer.php';
        ?>

        <script type="text/javascript" src="views/bootstrap-4.3.1/js/jquery.js"></script>
        <script type="text/javascript" src="views/bootstrap-4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="views/bootstrap-4.3.1/js/app.js"></script>
    </body>
</html>