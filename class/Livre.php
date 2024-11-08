<?php


class Livre{
    private string $_titre;
    private int $_nbpage;
    private int $_annee;
    private float $_prix;
    private Auteur $_auteur;

    public function __construct($titre, $nb_page, $annee, $prix, $auteur) {
        $this->_titre = $titre;
        $this->_nbpage = $nb_page;
        $this->_annee = $annee;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $auteur->addLivre($this);
    }
    
    public function setTitre($titre) {
        $this->_titre = $titre;
    }
    public function setNbpage($nb_page) {
        $this->_nbpage = $nb_page;
    }
    public function setAnnee($annee) {
        $this->_annee = $annee;
    }
    public function setPrix($prix) {
        $this->_prix = $prix;
    }

    public function getTitre() {
        return $this->_titre;
    }
    public function getNbpage() {
        return $this->_nbpage;
    }
    public function getAnnee() {
        return $this->_annee;
    }
    public function getPrix() {
        return $this->_prix;
    }

    public function getAuteur(){
        return $this->_auteur;
    }

    public function __toString() {
        return "Le titre de ce livre est ".$this->_titre.".<br>";
    }
}