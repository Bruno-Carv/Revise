<!-- Para o correto funcionamento e necessario colocar a tag CANVAS onde será inserido o grafico com o ID nomeado AnunciosHorizontal -->

<div>
        <script>
            var anuncio = "{{route('an')}}"; //Rota de coleta de dados do banco
            var AnunciosHorizontal = new Array();
            var AcessosHorizontal = new Array();
            $(document).ready(function () {
                $.get(anuncio, function (response) {
                    response.forEach(function (data) {
                        AnunciosHorizontal.push(data.Anuncio);
                        AcessosHorizontal.push(data.Visualizacao);
                    });
                    var ctx = document.getElementById("AnunciosHorizontal").getContext('2d'); // Nome do ID onde será implantodo o grafico
                    var myChart = new Chart(ctx, {
                        type: 'horizontalBar',
                        data: {
                            labels: AnunciosHorizontal,
                            datasets: [{
                                label: 'Popularidade do Anuncio',
                                data: AcessosHorizontal,
                                borderWidth: 1,
                                backgroundColor: 'rgba(255, 193, 7, 0.9)'//Amarelo
                            }]
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
                });
            });
        </script>
    </div>
