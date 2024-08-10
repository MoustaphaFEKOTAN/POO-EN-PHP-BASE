<?php
    class Produit
    {
       private string $nomPro,$description="<Pas de description>";
       private int $nbreExemplaire=0;
       private float  $prixAchat,$prixVente;
       function __construct(string $nom,float $prixAchat,float $prixVente)
       {
        $this->nom=$nom;
        $this->prixAchat=$prixAchat;
        $this->prixVente=$prixVente;
       }
       public function getDescription()
       {
        echo $this->description;
       }
       public function setDescription($newdescription)
       {
        $this->description=$newdescription;
       }

       public function dimNbreEx($newNbreEx)
       {
        if($this->nbreExemplaire < $newNbreEx)
        {
            echo 'Quantité insuffisante';
        }
        else
        {
            $this->nbreExemplaire-=$newNbreEx;
        }
       }
       public function augNbreEx($newNbreEx)
       {
        $this->nbreExemplaire+=$newNbreEx;
       }
       public function getNom()
       {
         return $this->nom;
       }
       public function getPrixAchat()
       {
        return  $this->prixAchat;
       }
       public function getPrixVente()
       {
        return  $this->prixVente;
       }
       public function getNbreEx()
       {
        return  $this->nbreExemplaire;
       }
    }

    class Magasin
    {
       private float $solde=20000;
       private $stockPro=[];

       public function ajouterProduit(string $nom,float $prixAchat,float $prixVente)
       {
            $produit=new Produit($nom,$prixAchat,$prixVente);
            $count=count($this->stockPro);
            if($count==0)
            {
                $this->stockPro[0]=$produit;
            }
            else
            {
                $this->stockPro[$count]=$produit;
            }
            array_push($this->stockPro,$produit);
       }

       public function acheterProduit(int $referenceProduit,int $nombreExemplaires) 
       {
            if(isset($this->stockPro[$referenceProduit]))
            {
                $produit=$this->stockPro[$referenceProduit];
                $produit->augNbreEx($nombreExemplaires);
                $this->solde-=($produit->getPrixAchat()*$nombreExemplaires);
            }
       }

       public function vendreProduit(int $referenceProduit,int $nombreExemplaires)
       {

        if(isset($this->stockPro[$referenceProduit]))
        {
            $produit=$this->stockPro[$referenceProduit];
            $produit->dimNbreEx($nombreExemplaires);
            $this->solde+=($produit->getPrixAchat()*$nombreExemplaires);
        }

       }

       public function getSolde()
       {
           return $this->solde;
       }

       public function setSolde(int $newsolde)
       {
           return $this->solde=$newsolde;
       }

       public function getStockPro()
       {
           for($i=0;$i<count($this->stockPro);$i++)
           {
               $pro=$this->stockPro[$i];
               echo "Produit disponible:<br>Référence: ".$i."<br>Nom:".$pro->getNom()."
               <br>Prix D'achat: ".$pro->getPrixAchat()."<br>
               Prix de vente: ".$pro->getPrixVente()."<br>";
          }
            //print_r($this->stockPro);
       }

       public function Bilan()
       {
         echo "Solde :".$this->getSolde()."<br>";
          $this->getStockPro();
       }
    }

 $mag=new Magasin;
 $mag->ajouterProduit("Meche",2000,3000);
 $mag->ajouterProduit("Lait",5000,8000);
 $mag->acheterProduit(0,40);
 $mag->acheterProduit(1,40);
 $mag->vendreProduit(0,10);
 $mag->vendreProduit(1,20);
 $mag->setSolde(10000);
 $mag->Bilan();

 //Livre exo 2

?>