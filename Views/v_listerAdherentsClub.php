<!-- Joyce Elmaleh CSI-->

<html lang="FR">
  <head>
  </head>
  <body>
    <div class="jumbotron masthead"> 
    <h1 style="text-align: center">Membres du club</h1>
        <br/>
        <div class="container mt-5">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom de l'adhérent</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Date d'inscription</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                while($i < count($desAdherents))
                {
                    ?>
                    <tr>
                        <th scope="row" style="background-color: #FFFFFF"><?php echo $desAdherents[$i]['nomA']?></th>
                        <td style="background-color: #FFFFFF"><?php echo $desAdherents[$i]['prenom']?></td>
                        <td style="background-color: #FFFFFF"><?php echo $desAdherents[$i]['dateNaissance']?></td>
                        <td style="background-color: #FFFFFF"><?php echo $desAdherents[$i]['genre']?></td>
                        <td style="background-color: #FFFFFF"><?php echo $desAdherents[$i]['dateI']?></td>
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