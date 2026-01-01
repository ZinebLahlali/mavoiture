<?php
  
  class User
  { private $id_user;
    private $nom;
    private $prenom;
    private $email;
    private $password;


    public function __construct($id_user, $nom, $prenom, $email,$password)
    {      $this->id_user = $id_user;
           $this->nom = $nom;
           $this->prenom= $prenom;
           $this->email = $email;
           $this->password = $password;       
    }

            
        //getters
        public function getId(){
            return $this->id_user;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }


        //sterres
        public function setId($id_user){
            $this->id_user = $id_user;
        }
        public function setNom($nom){
            $this->nom = $nom;
        }
        public function setPrenom($prenom){
            $this->prenom  = $prenom;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setPassword($password){
            $this->password = $password;
        }




  }





?>