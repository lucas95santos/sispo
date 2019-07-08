<?php
namespace sispo\views\authenticated;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        require 'includes/head.php';
        ?>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
        <title>Sispo | Painel de Controle</title>
    </head>
    <body>
        <?php
        require 'includes/navbar-authenticated.php';
        require 'includes/sidebar.php';
        ?>

        <div class="content-wrap">
            <section class="section-dashboard-movimentacao">
                <div class="container container-movimentacao">
                    <h1 class="dashboard-title">Movimentação <span class="dashboard-subtitle">Veja as suas atividades</span></h1>
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-6">
                            <canvas id="bar-chart" width="100%" height="100%"></canvas>
                        </div>
                        <div class="col-6">
                            <canvas id="line-chart" width="100%" height="100%"></canvas>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script type="text/javascript" src="views/bootstrap-4.3.1/js/jquery.js"></script>
        <script type="text/javascript" src="views/bootstrap-4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="views/bootstrap-4.3.1/js/pace.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
        <script>
            // Gráfico de barra
            var ctxBar = document.getElementById('bar-chart').getContext('2d');
            var barChart = new Chart(ctxBar, {
                type: 'bar',
                data: {
                    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
                    datasets: [
                        {
                            label: 'Quantidade total de Entradas',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Quantidade total de Saídas',
                            data: [18, 6, 7, 3, 10, 6],
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }
                    ],
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            // Gráfico de linha
            var ctxLine = document.getElementById('line-chart').getContext('2d');
            var lineChart = new Chart(ctxLine, {
                type: 'line',
                data: {
                    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
                    datasets: [
                        {
                            label: 'Valor total de entradas em R$',
                            data: [1200, 1900, 300, 1500, 2000, 3000],
                            backgroundColor: 'transparent',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 3
                        },
                        {
                            label: 'Valor total de saídas em R$',
                            data: [1800, 600, 70, 300, 1000, 786],
                            backgroundColor: 'transparent',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 3
                        }
                    ],
                }
            });
        </script>
    </body>
</html>
