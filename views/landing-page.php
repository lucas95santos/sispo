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
        <section>
            <div class="container-fluid">
                <div class="row" style="height: 700px;">
                    <div class="col-6" style="height: 100%; background-color: #f5f5f5;">
                        <h2 class="text-left">Um endereço. <span>Todas as suas finanças.</span></h2>
                        <p>Não faça parte de 54% das famílias brasileiras endividadas e controle suas finanças.</p>
                    </div>
                    <div class="col-6" style="height: 100%; background-color: #052847;">

                    </div>
                </div>
            </div>
        </section>

        <!-- Seção sobre -->
        <section id="sobre">
            <div class="container-fluid">
                <div class="row" style="height: 700px;">
                    <div class="col-6" style="height: 100%; background-color: #052847;">

                    </div>
                    <div class="col-6" style="height: 100%; background-color: #f5f5f5;">
                        <h2 class="text-right">Sobre o Sispo</h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção missão -->
        <section id="missao">
            <div class="container-fluid">
                <div class="row" style="height: 700px;">
                    <div class="col-6" style="height: 100%; background-color: #f5f5f5;">
                        <h2 class="text-left">Nossa missão</h2>
                    </div>
                    <div class="col-6" style="height: 100%; background-color: #052847;">

                    </div>
                </div>
            </div>
        </section>

        <!-- Seção contato -->
        <section id="contato">
            <div class="container-fluid">
                <div class="row" style="height: 700px;">
                    <div class="col-12" style="height: 100%; background-color: #f5f5f5;">
                        <h2 class="text-center">Mande sua dúvida</h2>
                    </div>
                </div>
            </div>
        </section>

        <footer class="page-footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-8">
                        <p><a class="navbar-brand font-footer" href="home.php">Sispo | Sistema de Planejamento Orçamentário</a></p>
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