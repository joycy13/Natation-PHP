<!-- Joyce Elmaleh CSI-->

<?php
 
$repModele = './Modele/';
$repVues = './Views/';

require($repModele . "Adherent.php");
require($repModele . "Club.php");
require($repModele . "Adherent_Est_Inscrit.php");
require($repModele . "Database.php");

$adherent = listerAdherentsFede();

include($repVues."v_entete.php") ;
include($repVues."v_barre_menu.php") ;
include($repVues."v_listerAdherentsFede.php") ;
include($repVues."v_pied.php") ;

?>