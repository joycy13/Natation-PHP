<html lang="FR">
  <head>
  </head>
  <body>
    <div class="container">

        <form action="" method=post>
        <fieldset>
        <legend>Sélectionner le club </legend>
        <label> Club :</label>
            <?php  
            
                $connect = connecterServeurBD();
                
                
                        
                $resultat = $connect->query('SELECT idClubs FROM adherents_est_inscrit');
                $resultat->setFetchmode(PDO::FETCH_OBJ);
                ?>
            <select name="idC">

                <?php
                while ($ligne = $resultat->fetch() ) {
                    ?><option><?php echo "". $ligne->idClubs; ?></option><?php
                }
                    $resultat->closeCursor();
                ?>

            </select> 
        </fieldset>
        <button type="submit" class="btn btn-primary">Modifier</button>
        <button type="reset" class="btn">Annuler</button>
        </form>
    </div>
  </body>
</html>