<!-- Joyce Elmaleh CSI-->

<?php
 
$repModele = './Modele/';
$repVues = './Views/';
  
require($repModele . "Adherent.php");
require($repModele . "Club.php");
require($repModele . "Adherent_Est_Inscrit.php");
require($repModele . "Database.php");
  
$nomC="";
if (isset($_GET['nomC']))
{
    $nomC = $_GET['nomC'];
}  
$desAdherents = listerAdherentClub($nomC);


include($repVues."v_entete.php");
include($repVues."v_barre_menu.php");
include($repVues."v_listerAdherentsClub.php");
include($repVues."v_pied.php");

?>