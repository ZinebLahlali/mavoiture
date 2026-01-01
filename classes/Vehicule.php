<?php
class Vehicule
{  private $id_car;
   private $modele;
   private $prix;
   private $disponible;
   private $carburant;
   private $boite_vitesse;
   private $nb_places;
   private $marque;
   private $bagages;



public function __construct($id_car, $modele, $prix, $disponible, $carburant,$boite_vitesse, $nb_places, $marque, $bagage){
         $this->id_car = $id_car;
         $this->modele = $modele;
         $this->prix = $prix;
         $this->disponible = $disponible;
         $this->carburant = $carburant;
         $this->boite_vitesse = $boite_vitesse;
         $this->nb_places = $nb_places;
         $this->marque = $marque;
         $this->bagages = $bagages;

} 

//getters

public function getId(){
    return $this->id;
}
public function getModele(){
    return $this->modele;
}
public function getPrix(){
    return $this->prix;
}
public function getDisponible(){
    return $this->disponible;
}
public function getCarburant(){
    return $this->carburant;
}
public function getBoite(){
    return $this->boite_vitesse;
}

public function getNbPlaces(){
    return $this->nb_places;
}
public function getMarque(){
    return $this->marque;
}
public function getBagages(){
    return $this->bagages;
}


//sterres
public function setId($id_car){
    $this->id_car = $id_car;
}
public function setModele($modele){
    $this->modele = $modele;
}
public function setPrix($prix ){
    $this->prix  = $prix;
}
public function setDisponible($disponible){
    $this->disponible = $disponible;
}
public function setCarburant($carburant){
    $this->carburant = $carburant;
}
public function setBoite($boite_vitesse){
    $this->boite_vitesse = $boite_vitesse;
}
public function setNbPlaces($nb_places){
    $this->nb_places = $nb_places;
}
public function setMarque($marque){
    $this->marque = $marque;
}
public function setBagages($bagages){
    $this->bagages = $bagages;
}

}


?>

