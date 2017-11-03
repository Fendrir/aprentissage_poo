<?php

abstract class Voiture extends Vehicule {

    private $reservoir;
    private $indicReserve;
    private $kilometrage = 3679;

    public function __construct($couleur,$marque,$reservoir){

        parent::__construct($couleur,$marque);
        $this->reservoir = $reservoir;
        echo "<p>La voiture est de couleur : ".$this->couleur."</p>";
        echo "<p>La marque de la voiture est : ".$this->getMarque()."</p>";
        echo "<p>Le réservoir contient : ".$this->reservoir." Litres.</p>";

    }

    public function setReservoir(){

        $this->reservoir = $reservoir;

    }

    public function setTableauDeBord(){

        

    }

    public function setConsommer(){


        
    }

}

