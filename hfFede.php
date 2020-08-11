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
        <h1 style="text-align: center">Répartition H/F sur l'ensemble de la fédération</h1>
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
                        format: '{point.name}: {point.y:.1f}%'
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
                            "name": "Homme",
                            "y": 67,
                            "drilldown": "Homme"
                        },
                        {
                            "name": "Femme",
                            "y": 33,
                            "drilldown": "Femme"
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