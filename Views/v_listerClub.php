<!-- Joyce Elmaleh CSI-->

<html lang="FR">
  <head>
  </head>
  <body>
    <div class="jumbotron masthead">    
    <h1 style="text-align: center">Liste des clubs</h1>
        <br/>   
        <div class="container mt-5">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nom du club</th>
                    <th scope="col">Code postal</th>
                    <th scope="col">Ville</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                while($i < count($club))
                {
                    ?>
                    <tr>
                        <th scope="row" style="background-color: #FFFFFF"><?php echo $club[$i]['nomC']?></th>
                            <td style="background-color: #FFFFFF"><?php echo $club[$i]['cp']?></td>
                            <td style="background-color: #FFFFFF"><?php echo $club[$i]['ville']?></td>
                        <td style="background-color: #FFFFFF">
                            <a href="adherentsClub.php?nomC=<?php echo $club[$i]['nomC']?>">Afficher les membres du club</a>
                        </td>
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