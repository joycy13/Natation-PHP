<!-- Joyce Elmaleh CSI-->

<?php

$repModele = './Modele/';
$repVues = './Views/';

require($repModele . "Adherent.php");
require($repModele . "Club.php");
require($repModele . "Adherent_Est_Inscrit.php");
require($repModele . "Database.php");

if ( isset($_POST['nomA']) ) {
  $nomA = $_POST['nomA'];
}
if ( isset($_POST['prenom']) ) {
  $prenom = $_POST['prenom'];
}
if ( isset($_POST['dateNaissance']) ) {
  $dateNaissance = $_POST['dateNaissance'];
}
if ( isset($_POST['genre']) ) {
  $genre = $_POST['genre'];
}
if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  $etape = 2;
  ajouterAdherent($nomA, $prenom, $dateNaissance, $genre, $tabErreurs);
}

include($repVues."v_entete.php") ;
include($repVues."v_barre_menu.php") ;
include($repVues."v_ajouterAdherent.php") ;
include($repVues."v_pied.php") ;

?>