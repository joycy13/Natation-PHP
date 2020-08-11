<!-- Joyce Elmaleh CSI-->

<?php

$repInclude = './Modele/';
$repVues = './Views/';

include($repVues."v_entete.php") ;
include($repVues."v_barre_menu.php") ;
?>

<html>
        <head>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        </head>
        <body>
        <div class="jumbotron masthead">  
        <h1 style="text-align: center">Répartitions des âges</h1>
        <br/>    
        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        <script type="text/javascript">
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: '  '
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Pourcentage'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}%'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },

                "series": [
                    {
                        "name": "Browsers",
                        "colorByPoint": true,
                        "data": [
                            {
                                "name": "10 - 20 ans",
                                "y": 62.74,
                                "drilldown": "10 - 20 ans"
                            },
                            {
                                "name": "20 - 30 ans",
                                "y": 10.57,
                                "drilldown": "20 - 30 ans"
                            },
                            {
                                "name": "30 - 40 ans",
                                "y": 7.23,
                                "drilldown": "30 - 40 ans"
                            },
                            {
                                "name": "40 - 50 ans",
                                "y": 5.58,
                                "drilldown": "40 - 50 ans"
                            }
                        ]
                    }
                ]
            });
    </script>
    <br />
    <br />
    <p style="text-align: right"><a href="Index.php">Retour à la page d'accueil</a></p>
    </div>
    </body>
</html>

<?php

$repInclude = './Modele/';
$repVues = './Views/';

include($repVues."v_pied.php") ;
?>

