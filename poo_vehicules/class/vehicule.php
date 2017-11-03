<?php



abstract class Vehicule {

    private $nbRoues;
    private $etatDeMarche;
    private $poids;
    private $position = 0;
    private $avancer;
    private $reculer;

    private $embrayer;
    private $debrayer;
    private $demarerMoteur;
    private $arreterMoteur;
    private $marque;

    private $nomVehicule;

    protected $couleur;
    protected $vitesse = 1;
    
    public function __construct($couleur,$marque){

        $this->couleur = $couleur;
        $this->marque = $marque;

    }

    public function __toString(){

        return get_class($this)." : ".$this->nomVehicule;

    }

    public function getCouleur(){

        return $this->couleur;
        
    }


    public function getMarque(){

        return $this->marque;

    }

    
    public function getPosition(){
        echo "<p>Position actuelle de départ ".$this->position."</p>";
        return $this->position;
    }


    public function setAvancer($avancer){
        
        $this->position += ($avancer * $this->vitesse);
        echo "<p>Votre position est de ".$this->position." cases</p>";
        return $this;

    }


    public function setReculer($reculer){

        $this->position -= $reculer;
        echo "<p>Votre position est de ".$this->position." cases</p>";
        return $this;

    }

    public function getVitesse(){
        
        return $this->vitesse;
    }


    public function passerVitesse(){

        $this->vitesse ++;
        echo"<p>Votre numéro de vitesse est à : ".$this->vitesse." vitesse</p>";
        return $this;
        
    }

    public function enleverVitesse(){
        
                $this->vitesse --;
                echo "<p>Tu es en vitesse : ".$this->vitesse."</p>";
                return $this;
                
    }

}

