<!-- Joyce Elmaleh CSI-->

<?php

class Adherent_Est_Inscrit
{
    private $idInscrit;
    private $idAdherents;
    private $idClubs;
    private $dateInscription;
    private $anneeDeLicence;

    public function __construct($idI, $idA, $idC, $dateI, $anneeL)
    {
        $this->idInscrit = $idI;
        $this->idAdherents = $idA;
        $this->idClubs = $idC;
        $this->dateInscription = $dateI;
        $this->anneeDeLicence = $anneeL;
    }

    public function getIdI()
    {
        return $this->idInscrit;
    }

    public function getIdA()
    {
        return $this->idAdherents;
    }

    public function getIdC()
    {
        return $this->idClubs;
    }

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function getAnneeL()
    {
        return $this->anneeDeLicence;
    }

    public function setIdI($idI)
    {
        $this->idInscrit = $idI;
    }

    public function setIdA($idA)
    {
        $this->idAdherents = $idA;
    }

    public function setIdC($idC)
    {
        $this->idClubs = $idC;
    }

    public function setDateInscription($dateI)
    {
        $this->dateInscription = $dateI;
    }

    public function setAnneeL($anneeL)
    {
        $this->anneeDeLicence = $anneeL;
    }

}

?>