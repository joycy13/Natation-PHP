<!-- Joyce Elmaleh CSI-->

<html lang="FR">
  <head>
  </head>
  <body>
    <div class="jumbotron masthead"> 
    <h1 style="text-align: center">Adhérents à mettre à jour par ordre alphabétique</h1>
        <br/>     
        <div class="container mt-5">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Nom de l'adhérent</th>
                    <th>Prenom</th>
                    <th>Nom du club</th>
                    <th>Date d'inscription</th>
                    <th>Année de licence</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                while($i < count($adherentNAJA))
                {
                    ?>
                    <tr>
                        <th scope="row" style="background-color: #FFFFFF"><?php echo $adherentNAJA[$i]['nomA']?></th>
                        <td style="background-color: #FFFFFF"><?php echo $adherentNAJA[$i]['prenom'] ?></td>
                        <td style="background-color: #FFFFFF"><?php echo $adherentNAJA[$i]['nomC'] ?></td>
                        <td style="background-color: #FFFFFF"><?php echo $adherentNAJA[$i]['dateI'] ?></td>
                        <td style="background-color: #FFFFFF"><?php echo $adherentNAJA[$i]['anneeL'] ?></td>
                    </tr>
                    <?php
                    $i = $i + 1;
                }
                ?>
                </tbody>
            </table>
            <br />
            <br />
            <p style="text-align: right"><a href="Index.php">Retour à la page d'accueil</a></p> 
        </div>
    </div>
  </body>   
</html>