<!-- Joyce Elmaleh CSI-->

<?php

class Club
{  
    private $idClubs;
    private $NomClub;
    private $codePostal;
    private $Ville;

    public function __construct($idC, $nomC, $cp, $ville)
    {
        $this->idClubs = $idC;
        $this->NomClub = $nomC;
        $this->codePostal = $cp;
        $this->Ville = $ville;
    }

    public function getIdC()
    {
        return $this->idClubs;
    }

    public function getNomC()
    {
        return $this->NomClub;
    }

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function getVille()
    {
        return $this->Ville;
    }

    public function setIdC($idC)
    {
        $this->idClubs = $idC;
    }

    public function setNomC($nomC)
    {
        $this->NomClub = $nomC;
    }

    public function setCodePostal($cp)
    {
        $this->codePostal = $cp;
    }

    public function setVille($ville)
    {
        $this->Ville = $ville;
    }

}

?>