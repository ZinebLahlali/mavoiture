<?php
class Reservation 
{  private $id_res;
   private $datedebut;
   private $datefin;
   private $lieuD;
   private $lieuR;
   private $statut;

   function public __construct($id_res,  $datedebut,  $datefin, $lieuD, $lieuR, $statut){
        $this->id_res = $id_res;
        $this->datedebut = $datedebut;
        $this->datefin = $datefin;
        $this->lieuD = $lieuD;
        $this->lieuR = $lieuR;
        $this->statut = $statut;
         
   }

   //getters

public function getId(){
    return $this->id_res;
}
public function getDatedebut(){
    return $this->datedebut;
}
public function getDatefin(){
    return $this->datefin;
}
public function getLieuD(){
    return $this->lieuD;
}
public function getLieuR(){
    return $this->lieuR;
}
public function getStatut(){
    return $this->statut;
}


//setters
public function setId($id_res){
    $this->id_res = $id_res;
}
public function setDatedebut($datedebut){
    $this->datedebut =  $datedebut;
}
public function setDatefin($datefin){
    $this->datefin = $datefin;
}
public function setLieuD($lieuD){
    $this->lieuD = $lieuD;
}
public function setlieuR($lieuR){
    $this->lieuR = $lieuR;
}
public function setStatut($statut){
    $this->statut= $statut;
}
 


}
?>
