<?php
require_once("class/vehicule.php");
require_once("class/voiture.php");
require_once("class/velo.php");
require_once("class/marque_voiture/citroen_ds3.php");
require_once("class/marque_voiture/peugeot_306.php");

// $velo1 = new Velo;

$maPeugeot = new Peugeot_306("noire");
$ds3 = new Citroen_ds3("rouge et blanc");


echo $maPeugeot;

$maPeugeot
            ->setAvancer(10)
            ->enleverVitesse()
            ->setReculer(5)
            ->passerVitesse()
            ->setAvancer(15);


echo $ds3;

$ds3
    ->setAvancer(5)
    ->passerVitesse()
    ->setAvancer(15)
    ->enleverVitesse()
    ->enleverVitesse()
    ->setReculer(5);