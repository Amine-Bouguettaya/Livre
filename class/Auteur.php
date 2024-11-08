<?php

class Auteur{
    private string $_nom;
    private string $_prenom;
    private array $_livres; 

    public function __construct($nom, $prenom) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }

    public function setNom($nom) {
        $this->_nom = $nom;
    }
    public function setPrenom($prenom) {
        $this->_prenom = $prenom;
    }

    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }

    public function addLivre(Livre $newLivre) {
        $this->_livres[] = $newLivre;
    }

    public function afficherBibliographie(){
        $result = "Livres de ".$this->_prenom." ".$this->_nom."<br>";
        foreach ($this->_livres as $livre) {
            $result .= $livre->getTitre()."(".$livre->getAnnee().") : ".$livre->getNbpage()." pages / ".$livre->getPrix()." €<br>";
        }
        return $result;
    }
    public function __tostring() {
        return "le prénom de cette objet est ".$this->_prenom." ".$this->_nom.".<br>";
    }
}