<?php

class Produit{
    protected string $nom;
    protected int $prixachat;
    protected int $prixvente;
    protected int $nbrexem = 0;
    protected string $desc = "Pas de description";

    public function __construct($nom, $prixachat, $prixvente){
        $this->nom = $nom ;
        $this->prixachat = $prixachat;
        $this->prixvente = $prixvente;
    }


    public function setNom(string $nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }

    public function setPrixachat(int $prixachat){
        $this->prixachat = $prixachat;
    }

    public function getPrixachat(){
        return $this->prixachat;
    }


    public function setPrixvente(int $prixvente){
        $this->prixvente = $prixvente;
    }

    public function getPrixvente(){
        return $this->prixvente;
    }

    public function setNbrexem(int $nbrexem){
        $this->nbrexem = $nbrexem;
    }

    public function getNbrexem(){
        return $this->nbrexem;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getDesc(){
        return $this->desc;
    }

    
    public function Decrire(){
        echo "Le produit est ".$this->desc;
        echo "Voulez-vous editer la description: ";
        $avis = readline();
        if ($avis=== "oui"){
            echo "Entrez une nouvelle description: " ;
            $newdesc = readline();
            $this->desc = $newdesc;
            echo "La description est désormais: ".$this->desc;

        }else return "Merci bien"; 
    }

    /*public function Nombrexem(){
        echo "Voulez-vous ajouter ou diminuer un nombre d'exemplaire (A/D): ";
        $choix = readline();
        if ($choix=== "A"){
            echo "Combien voulez-vous ajouter: ";
            $nbr = readline();
            $this->nbrexem = $this->nbrexem + $nbr;
            echo "Le nouveau nombre d'exemplaire est: ". $this->nbrexem;
        } else if ($choix=== "D"){
            echo "Combien voulez-vous diminuer: ";
            $nbr = readline();
            $this->nbrexem = $this->nbrexem - $nbr;
            echo "Le nouveau nombre d'exemplaire est: ". $this->nbrexem;
        } else {
            echo "Vous avez toujours: ".$this->nbrexem." exemplaires";
        };
    }*/

    public function addstock(int $nbr){
         $this->nbrexem= $this->nbrexem + $nbr;
    }


    public function removestock(int $nbr){
        $this->nbrexem= $this->nbrexem - $nbr;
    }
    
    /*public function afficher(){
        echo "Le produit ".$this->nom." est acheté à ".$this->prixachat.", coûte".$this->prixvente.
        "\nIl se décrit comme suit: ".$this->desc."et il ne reste que ".$this->nbrexem;
    }*/

}

class Magasin{
    protected int $solde;
    protected $stock=[];
    public function ajouterProduit(string $nom,float $prixAchat,float $prixVente) {
        $produit = new Produit($nom, $prixAchat, $prixVente);
        $this->stock[] = $produit;
        array_push($this->stock,$produit);
    }

    public function acheterProduit(int $referenceProduit, int $nombreExemplaires){

    }

}


