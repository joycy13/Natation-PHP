<!-- Joyce Elmaleh CSI-->

<?php

// Connexion à la base de données

function connecterServeurBD() 
{
    $dsn = 'mysql:dbname=sport;host=localhost';
    $user = 'root';
    $password = 'root';

    try {
        $dbh = new PDO($dsn, $user, $password, [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'']);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return $dbh;
} 

function deconnecterServeurBD($idCnx) {

}

// Lister les adhérents de la fédération (club, date de première adhésion, à jour de ses cotisations)

function listerAdherentsFede(){

    $connexion = connecterServeurBD();
    if (TRUE)
    {
        $requete="SELECT DISTINCT NomAdherent, Prenom, NomClub, dateInscription
                  FROM adherents A, clubs C, adherents_est_inscrit I 
                  WHERE A.idAdherents=I.idAdherents 
                  AND C.idClubs=I.idClubs
                  ORDER BY NomAdherent";
                  
        $jeuResultat=$connexion->query($requete); 
        $i = 0;
        $ligne = $jeuResultat->fetch();

        while($ligne)
        {
            $adherent[$i]['nomA']=$ligne['NomAdherent'];
            $adherent[$i]['prenom']=$ligne['Prenom'];
            $adherent[$i]['nomC']=$ligne['NomClub'];
            $adherent[$i]['dateI']=$ligne['dateInscription'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
    }
    $jeuResultat->closeCursor();   

    return $adherent;
}

// Lister les adhérents non à jour de cotisation pour la féde

function listerMaj(){

    $connexion = connecterServeurBD();
    if (TRUE)
    {
        $requete="SELECT NomAdherent, Prenom, NomClub, dateInscription, anneeDeLicence 
                  FROM adherents A, clubs C, adherents_est_inscrit I 
                  WHERE A.idAdherents=I.idAdherents 
                  AND C.idClubs=I.idClubs 
                  AND YEAR(dateInscription)<YEAR(CURRENT_DATE)";

        $jeuResultat=$connexion->query($requete); 
        $i = 0;
        $ligne = $jeuResultat->fetch();

        while($ligne)
        {
            $adherentNAJ[$i]['nomA']=$ligne['NomAdherent'];
            $adherentNAJ[$i]['prenom']=$ligne['Prenom'];
            $adherentNAJ[$i]['nomC']=$ligne['NomClub'];
            $adherentNAJ[$i]['dateI']=$ligne['dateInscription'];
            $adherentNAJ[$i]['anneeL']=$ligne['anneeDeLicence'];

            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
    }
    $jeuResultat->closeCursor();   

    return $adherentNAJ;
}

// Lister les adhérents d’un club par ordre alphabétique des noms

function listerClub(){

    $connexion = connecterServeurBD();
    if (TRUE)
    {
        $requete="SELECT DISTINCT NomClub, codePostal, Ville
                  FROM adherents A, clubs C, adherents_est_inscrit I
                  WHERE A.idAdherents=I.idAdherents
                  AND C.idClubs=I.idClubs
                  ORDER BY NomClub";

        $jeuResultat=$connexion->query($requete); 
        $i = 0;
        $ligne = $jeuResultat->fetch();

        while($ligne)
        {
            $club[$i]['nomC']=$ligne['NomClub'];
            $club[$i]['cp']=$ligne['codePostal'];
            $club[$i]['ville']=$ligne['Ville'];

            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
    }
    $jeuResultat->closeCursor();   

    return $club;
}

function listerAdherentClub($nomC){

    $connexion = connecterServeurBD();
    if (TRUE)
    {
        $requete="SELECT DISTINCT NomAdherent, Prenom, dateDeNaissance, Genre, dateInscription
                  FROM adherents A, clubs C, adherents_est_inscrit I 
                  WHERE A.idAdherents=I.idAdherents
                  AND C.idClubs=I.idClubs
                  AND NomClub='$nomC'
                  ORDER BY NomAdherent";


        $jeuResultat=$connexion->query($requete); 
        $i = 0;
        $ligne = $jeuResultat->fetch();

        while($ligne)
        {
            $desAdherents[$i]['nomA']=$ligne['NomAdherent'];
            $desAdherents[$i]['prenom']=$ligne['Prenom'];
            $desAdherents[$i]['dateNaissance']=$ligne['dateDeNaissance'];
            $desAdherents[$i]['genre']=$ligne['Genre'];
            $desAdherents[$i]['dateI']=$ligne['dateInscription'];

            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
    }
    $jeuResultat->closeCursor();

    return $desAdherents;
}  

// Lister les adhérents non à jour des cotisations par ordre alphabétique des noms

function listerMajAlpha(){

    $connexion = connecterServeurBD();
    if (TRUE)
    {
        $requete="SELECT NomAdherent, Prenom, NomClub, dateInscription, anneeDeLicence 
                  FROM adherents A, clubs C, adherents_est_inscrit I 
                  WHERE A.idAdherents=I.idAdherents 
                  AND C.idClubs=I.idClubs 
                  AND YEAR(dateInscription)<YEAR(CURRENT_DATE)
                  ORDER BY NomAdherent";

        $jeuResultat=$connexion->query($requete); 
        $i = 0;
        $ligne = $jeuResultat->fetch();

        while($ligne)
        {
            $adherentNAJA[$i]['nomA']=$ligne['NomAdherent'];
            $adherentNAJA[$i]['prenom']=$ligne['Prenom'];
            $adherentNAJA[$i]['nomC']=$ligne['NomClub'];
            $adherentNAJA[$i]['dateI']=$ligne['dateInscription'];
            $adherentNAJA[$i]['anneeL']=$ligne['anneeDeLicence'];

            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
    }
    $jeuResultat->closeCursor();   

    return $adherentNAJA;
}

// Ajouter un adhérent en choisissant dynamiquement le club

function rechercherClub($nomC)
{
    $connexion = connecterServeurBD();
   
    $requete="SELECT NomClub 
              FROM adherents A, clubs C, adherents_est_inscrit I 
              WHERE A.idAdherents=I.idAdherents 
              AND C.idClubs=I.idClubs
              AND NomClub='$nomC'";  

    $jeuResultat=$connexion->query($requete); 
    $jeuResultat->setFetchMode(PDO::FETCH_OBJ);   

    $ligne = $jeuResultat->fetch();
    if($ligne)
    {

          $unClub = new Club($ligne->idClubs,
                             $ligne->NomClub,
                             $ligne->codePostal,
                             $ligne->Ville, "");
    }
    else 
    {
          $unClub = new Club("","","","");
      
    }
    $jeuResultat->closeCursor();   
  return $unClub;
}

function ajouterAdherent($nomA, $prenom, $dateNaissance, $genre)
{

  $connexion = connecterServeurBD();

  if (TRUE) 
  {
       $requete="INSERT INTO adherents (NomAdherent, Prenom, dateDeNaissance, Genre) 
                 VALUES ('".$nomA."','".$prenom."','".$dateNaissance."','".$genre."');";

       var_dump($requete);

       $connexion->query($requete);

  }
  else
  {
    $message = "probléme a la connexion <br />";
    ajouterErreur($tabErr, $message);
  }
}

?>