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
        <h1 style="text-align: center">Répartition H/F dans chacun des clubs</h1>
        <br/>
        <div id="container" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
        <script type="text/javascript">
        Highcharts.chart('container', {
            chart: {
                type: 'pie'
            },
            title: {
                text: '  '
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span><br/>'
            },

            "series": [
                {
                    "name": "Browsers",
                    "colorByPoint": true,
                    "data": [
                        {
                            "name": "Aas Sarcelles Natation",
                            "y": 14.3,
                            "drilldown": "Aas Sarcelles Natation"
                        },
                        {
                            "name": "Cergy Pontoise Natation",
                            "y": 14.3,
                            "drilldown": "Cergy Pontoise Natation"
                        },
                        {
                            "name": "Es Massy Natation",
                            "y": 14.3,
                            "drilldown": "Es Massy Natation"
                        },
                        {
                            "name": "Mouette de Paris",
                            "y": 14.3,
                            "drilldown": "Mouette de Paris"
                        },
                        {
                            "name": "Romainville Aquatique Club 93",
                            "y": 14.3,
                            "drilldown": "Romainville Aquatique Club 93"
                        },
                        {
                            "name": "RSC Montreuil",
                            "y": 14.3,
                            "drilldown": "RSC Montreuil"
                        },
                        {
                            "name": "US Créteil Natation",
                            "y": 14.3,
                            "drilldown": "US Créteil Natation"
                        }
                    ]
                }
            ],
            "drilldown": {
                "series": [
                    {
                        "name": "Aas Sarcelles Natation",
                        "id": "Aas Sarcelles Natation",
                        "data": [
                            [
                                "Hommes",
                                0.1
                            ],
                            [
                                "Femmes",
                                1.3
                            ]
                        ]
                    },
                    {
                        "name": "Cergy Pontoise Natation",
                        "id": "Cergy Pontoise Natation",
                        "data": [
                            [
                                "Hommes",
                                1.02
                            ],
                            [
                                "Femmes",
                                7.36
                            ]
                        ]
                    },
                    {
                        "name": "Es Massy Natation",
                        "id": "Es Massy Natation",
                        "data": [
                            [
                                "Hommes",
                                6.2
                            ],
                            [
                                "Femmes",
                                0.29
                            ]
                        ]
                    },
                    {
                        "name": "Mouette de Paris",
                        "id": "Mouette de Paris",
                        "data": [
                            [
                                "Hommes",
                                3.39
                            ],
                            [
                                "Femmes",
                                0.96
                            ]
                        ]
                    },
                    {
                        "name": "Romainville Aquatique Club 93",
                        "id": "Romainville Aquatique Club 93",
                        "data": [
                            [
                                "Hommes",
                                2.6
                            ],
                            [
                                "Femmes",
                                0.92
                            ]
                        ]
                    },
                    {
                        "name": "RSC Montreuil",
                        "id": "RSC Montreuil",
                        "data": [
                            [
                                "Hommes",
                                0.96
                            ],
                            [
                                "Femmes",
                                0.82
                            ]
                        ]
                    },
                    {
                        "name": "US Créteil Natation",
                        "id": "US Créteil Natation",
                        "data": [
                            [
                                "Hommes",
                                0.96
                            ],
                            [
                                "Femmes",
                                0.82
                            ]
                        ]
                    }
                ]
            }
        });
    </script>
    <br />
    <br />
    <p style="text-align: right"><a href="Index.php">Retour à la page d'accueil</a></p>
    </div>
        
    <!--include('./Modele/Sport.php') ;

        $dbh = Sport::getInstance();

        $requete = "SELECT COUNT(*) FROM adherents WHERE genre = 'F'";
        $jeuResultat=$connexion->query($requete); 
        $women = $jeuResultat->fetch();

        $requete = "SELECT COUNT(*) FROM adherents WHERE genre = 'M'";
        $jeuResultat=$connexion->query($requete); 
        $men = $jeuResultat->fetch();-->

    </body>
</html>

<?php

$repInclude = './Modele/';
$repVues = './Views/';

include($repVues."v_pied.php") ;
?>