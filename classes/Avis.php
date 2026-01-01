<?php

class Avis
{  private $id_avi;
   private $note;
   private $comment;
   private $soft_delete;
   private $date_avis;

 public function __construct($id_avi, $note, $comment, $soft_delete, $date_avis)
 {       $this->id_avi = $id_avi;
         $this->note = $note;
         $this->comment = $comment;
         $this->soft_delete = $soft_delete;
         $this->date_avis = $date_avis;

 }

 //getters
public function getId(){
    return $this->id_avi;
}
public function getNot(){
    return $this->note;
}
public function getComment(){
    return $this->comment;
}
public function getSoftDelete(){
    return $this->soft_delete;
}
public function getDateAvis(){
    return $this->date_avis;
}

//setters
public function setId($id_avi){
    $this->id_avi = $id_avi;
}
public function setNote($note){
    $this->note =  $note;
}
public function setComment($comment){
    $this->comment = $comment;
}
public function setSoftDelete($soft_delete){
    $this->soft_delete= $soft_delete;
}
public function setDateAvis($date_avis){
    $this->date_avis;
}






}



?>