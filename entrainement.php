<?php
//EXERCICE QUI AFFICHE UNE VILLE AVEC SON DEPARTEMENT
/*
class Ville {
    private string $nom;
    private string $département;

    public function __construct($nom, $département) {
        $this->nom = $nom;
        $this->département = $département;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDépartement() {
        return $this->département;
    }

    public function afficher() {
        echo "La ville de " . $this->nom . " est dans le département " . $this->département;
        return;
    }
}

$ville = new Ville("Cotonou", "Littoral");
$ville->afficher();

  */


//EXERCICE AFFICHE INFOS SUR UNE PERSONNE EN UTULISANT L'HERITAGE
/*
declare(strict_types=1);

class personne {
    protected string $nom;
    protected string $prenom;

    public function getnom() {
        return $this->nom;
    }

    public function setnom(string $nom) {
        $this->nom = $nom;
    }

    public function getprenom() {
        return $this->prenom;
    }

    public function setprenom(string $prenom) {
        $this->prenom = $prenom;
    }

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    
    
}

class etudiant extends personne {
    private int $age;

    public function getage() {
        return $this->age;
    }

    public function __construct($nom, $prenom, $age) {
        parent::__construct($nom, $prenom);
        $this->age = $age;
    }

    public function affichemessage() {
        echo "cc, je suis  " . $this->nom . " " . $this->prenom . ", et j'ai" . $this->age . " ans.";
    }
}

$etudiant = new etudiant("AAAA", "BBBB", 18);
$etudiant->affichemessage();
*/


//EXERCICE CALCUL DES COORDONNES D'UN RECTANGLE//
/*
class rectangle{
    private int $longueur;
    private int $largeur;


    public function getlongueur(){
        return
$this->longueur;
    }

    public function setlongueur(int $longueur){
$this->longueur=$longueur;
    }

    public function getlargeur(){
        return
$this->largeur;

    public function setlargeur(int $largeurr){
$this->largeur=$largeur;
    }

    public function  __construct(int $longueur , int $largeur){
        $this->longueur=$longueur;
        $this->largeur=$largeur;
    }

    public function calculerperimetre(){
   $peri=($this->largeur + $this->longueur)*2 ;
   echo "Le perimetre de ce rectangle est:"  .$peri. "\n" ;
    }

    public function estCarre() {
        if($this->longueur === $this->largeur){
            echo "Est-ce un carré ? : Oui" ."\n" ;
        }else 
        echo "Est-ce un carré ? : non" ."\n" ;

    }

}
$rectangle=new rectangle(1,9);

$rectangle->calculerperimetre();
$estCarre = $rectangle->estCarre();
*/



abstract class personne{
    protected string $nom;
    protected string $prenom;

    public function getnom(){
       return  $this->nom;
        
    }
    public function setnom($nom){
        $this->nom=$nom;
        
    }

    public function getprenom(){
        return  $this->prenom;
         
     }
     public function setprenom($prenom){
        $this->prenom=$prenom;
         
     }

     public function __construct($nom,$prenom){
        $this->nom=$nom;
        $this->prenom=$prenom;
     }


    
}
class client extends  personne{
    private string $adresse;

    public function getaddresse(){
        return $this->adresse;
    }

    public function __construct($nom,$prenom,$addresse) {
        parent::__construct($nom,$prenom);
        $this->addresse=$addresse;

    }
     
    public function setcoord(){
        echo " Monsieur," ." ". $this->nom. "  " .$this->prenom. " " ."qui habite dans le " .$this->addresse; 
    }

 }

 class electeur extends personne{
    private int $bureau_de_vote ;
    private bool $vote ;
    

    public function getvote(){
        return $this->vote=$vote;
    }

    public function setvote($vote){
         $this->vote=$vote;
    }

public function __construct($nom,$prenom,$vote){
    parent::__construct($nom,$prenom);
         $this->vote=$vote;
    }

    public function avoter(){
        if($this->vote===true){
              echo " :A voter";
        
        }else{
            echo ": EST UN Mauvais citoyens";
        }
    }


 }


  $client=new client("FEKOTAN","Moustapha","12eme_arrondissement");
  $client->setcoord();

  $electeur=new electeur("FEKOTAN","Moustapha",TRUE);
  $electeur->avoter();
 

?>