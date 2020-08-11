<!-- Joyce Elmaleh CSI-->

<?php

class Adherent
{ 
    private $idAdherents;
    private $NomAdherent;
    private $Prenom;
    private $dateDeNaissance;
    private $Genre;

    public function __construct($idA, $nomA, $prenom, $dateNaissance, $genre)
    {
        $this->idAdherents = $idA;
        $this->NomAdherent = $nomA;
        $this->Prenom = $prenom;
        $this->dateDeNaissance = $dateNaissance;
        $this->Genre = $genre;
    }

    public function getIdA()
    {
        return $this->idAdherents;
    }

    public function getNomA()
    {
        return $this->NomAdherent;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function getDateNaissance()
    {
        return $this->dateDeNaissance;
    }

    public function getGenre()
    {
        return $this->Genre;
    }

    public function setIdA($idA)
    {
        $this->idAdherents = $idA;
    }

    public function setNomA($nomA)
    {
        $this->NomAdherent = $nomA;
    }

    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateDeNaissance = $dateNaissance;
    }

    public function setGenre($genre)
    {
        $this->Genre = $genre;
    }

}

?>