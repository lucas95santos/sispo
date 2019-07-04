<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="assets/icones/favicon.ico">
        <title>Sispo | Sistema de Planejamento Orçamentário</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="//fonts.googleapis.com/css?family=Oswald|Nunito|Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="views/bootstrap-4.3.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="views/bootstrap-4.3.1/css/styles.css"/>
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
                            <a class="btn btn-info btn-cadastro" href="#" title="Cadastre-se no Sispo">Cadastre-se hoje</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!---->
        <section id="detalhes" class="section-detalhes">
            <div class="container">
                <div class="text-center">
                    <h2 class="title-section-1">Um endereço. <span class="span-title-section-1">Todas as suas finanças.</span></h2>
                    <p class="paragraph-section-1">Não faça parte de 62% das famílias brasileiras endividadas e controle suas finanças.</p>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center padding-section-1">
                        <img src="assets/icones/money.png" class="img-fluid img-section-1" alt="Organização"/>
                        <p class="paragraph2-section-1">Tenha controle sobre os seus gastos de forma prática e rápida</p>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center padding-section-1">
                        <img src="assets/icones/organize.png" class="img-fluid img-section-1" alt="Organização"/>
                        <p class="paragraph2-section-1">Tenha todas as informações organizadas em um só lugar</p>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-center padding-section-1">
                        <img src="assets/icones/consumer.png" class="img-fluid img-section-1" alt="Organização"/>
                        <p class="paragraph2-section-1">Saiba tudo o que acontece e não tenha surpresas no fim do mês</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção missão -->
        <section id="missao" class="section-missao">
            <div class="container">
                <div class="row">
                    <div class="col-6 text-center">
                        <img src="assets/images/sispo-500x500.png" alt="Sispo"/>
                    </div>
                    <div class="col-6">
                        <h2 class="text-right font-oswald">Nossa missão</h2>
                        <p class="paragraph-section-2">
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
        <section id="contato" class="section-contato">
            <div class="container">
                <h2 class="text-center">Mande sua dúvida</h2>
                <div class="row">
                    <div class="col-6" style="border: 1px solid">
                        <p>Email para contato:</p>
                        <p>contato@sispo.com.br</p>
                    </div>
                    <div class="col-6">
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
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="page-footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-8">
                        <p><a class="navbar-brand font-footer" href="#">Sispo | Sistema de Planejamento Orçamentário</a></p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <span class="d-block mb-3">&copy; 2019 Todos os direitos reservados</span>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="views/bootstrap-4.3.1/js/jquery.js"></script>
        <script type="text/javascript" src="views/bootstrap-4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="views/bootstrap-4.3.1/js/app.js"></script>
    </body>
</html>