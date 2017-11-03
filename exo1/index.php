<?php

class Personnage {

    private $_force = 50;        // La force du personnage
    private $_localisation = "Carcassonne"; // Sa localisation
    private $_experience = 1;   // Son expérience
    private $_degats = 0;       // Ses dégâts

    public function deplacer() // Une méthode qui déplacera le personnage (modifiera sa localisation).
    
      {
    
    
      }
    
            
    
    public function frapper() // Une méthode qui frappera un personnage (suivant la force qu'il a).
    
      {
    
    
      }
    
            
    
    public function gagnerExperience() // Une méthode augmentant l'attribut $experience du personnage.
    
    {
    
        $this->_experience = $this->_experience + 1;
    
    }



    public function parler()

    {

    echo 'Je suis un personnage !';

    }



    public function afficherExperience()

    {

        echo $this->_experience;

    }

}

$perso = new Personnage;

$perso->parler();
$perso->afficherExperience();
$perso->gagnerExperience();
$perso->afficherExperience();

?>

<h1>Exercice 2</h1>

<?php

class Voiture {

    const INDICATEUR_ROUGE=10;
    const CAPACITE_RESERVOIR=60;
    
    private $indicReservoirRouge;

    public static $nbVoiture=0;

    // propriétés

    private $reservoir;

    public function __construct(){

        $this->setReservoir(0);
        self::$nbVoiture ++;

    }

    public function setReservoir($reservoir){

        $this->reservoir=$reservoir;

        if ($this->reservoir<self::INDICATEUR_ROUGE){

            $this->indicReservoirRouge=true;

        } else {
            
            $this->indicReservoirRouge=false;

        }

    }

    public function displayTableauDeBord(){

        echo "le volume du réservoir est de : ".$this->reservoir;

        if (true == $this->indicReservoirRouge){

            echo "<p>bouton rouge</p>";
            
        }else{

            echo "<p>bouton vert</p>";

        }

    }

}

$voiture1 = new Voiture;

$voiture1->setReservoir(7);
$voiture1->displayTableauDeBord();

?>