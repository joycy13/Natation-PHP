<!-- Joyce Elmaleh CSI-->

<html lang="FR">
  <head>
    <script type="text/javascript">
        function valider(){
        frm=document.forms['formAjout'];
            return true;
          }
          else {
            alert("Le prix doit être positif !");
            return false;
          }
        }
    </script>
  </head>
  <body>
  <div class="jumbotron masthead">
    <div class="container">
      <h1 style="text-align: center">Ajouter un membre à un club</h1>
      <br/>
    <form name="formAjout" action="" method="post" onSubmit="return valider()">
      <fieldset>
        <label>Nom de l'adhérent</label><br/>
        <input type="text" placeholder="Entrer le nom de l'adhérent" name="nomA" size="140" /><br />
        <br/>
        <label>Prénom</label><br/>
        <input type="text" placeholder="Entrer le prenom de l'adherent" name="prenom" size="140" /><br />
        <br/>
        <label>Date de naissance</label><br/>
        <input type="date" placeholder="" name="dateNaissance" size="140" /><br />
        <br/>
        <label>Genre</label><br/>
        <input type="text" placeholder="Entrer le genre" name="genre" size="140" /><br />
        <br/>
      </fieldset>
      <button type="submit" class="btn btn-primary">Enregistrer</button>
      <button type="reset" class="btn">Annuler</button>
      <br />
      <br />
      <p style="text-align: right"><a href="Index.php">Retour à la page d'accueil</a></p>
    </form>
    </div>
   </div>
  </body>
</html>   



