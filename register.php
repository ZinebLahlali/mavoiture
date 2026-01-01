<?php
   session_start();
   require_once 'database.php';
   require_once "./classes/Client.php";

  $c = new Client();



   if(isset($_POST['register'])){
      $c->setNom(htmlspecialchars(trim($_POST['nom'])));
      $c->setPrenom(htmlspecialchars(trim($_POST['prenom'])));
      $c->setEmail(trim($_POST['email']));
      $c->setPassword(htmlspecialchars(trim($_POST['password'])));
      $confirm = htmlspecialchars($_POST['confirm']);
      $c->setMobile(htmlspecialchars(trim($_POST['mobile'])));
      $c->setAdresse(htmlspecialchars(trim($_POST['adresse'])));
      $c->setVille(htmlspecialchars(trim($_POST['ville'])));
      

      if($password !== $confirm){
          $_SESSION['error'] = "Les mots de passe ne correspondent pas.";
      } else {
        //vérifie si l'utilisateur exite déja
        $check = $pdo->prepare("SELECT * FROM client WHERE email = ?");
        $check->execute([$email]);
        if ($check->rowCount() > 0) {
            $_SESSION['error'] = "Ce email déjà utilisé.";
        } else {

         $hashed = password_hash($password, PASSWORD_DEFAULT);

      }
   }
    if(!empty($u->getNom())&&!empty($u->getEmail())&&!empty($u->getPassword())&&!empty($u->getRole())){
        $c->creer();
        header('location: profilr.php');
        exit;
    }

}








?>