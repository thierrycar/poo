<?php

class Voiture {

	public $marque;
	public $couleur;
	public $annee;
	private $_nombre_roues;

	public function afficherMarque(){
		return "je suis de marque ".$this->marque;
	}

	public function rouler(){
		return "Je roule ...<br>";

	}
	public function tournerADroite(){
		return "Je tourne à droite";
	}

	public function setNombreRoues($number) {
        if (!is_numeric($number) || $number != 4) {
            throw new Exception("Le nombre de roues d'une voiture doit être égal à 4");
        }
        $this->_nombre_roues = $number;
	}
}
try{
	$voiture = new Voiture();
	$voiture->marque = 'bmw';
	$voiture->couleur = 'bleu';
	$voiture->annee = 2005;

	echo $voiture->afficherMarque();

} catch (Exception $e) {
    echo $e->getMessage();
}
?>
