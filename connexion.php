<?php
  session_start();
  require_once './classes/database.php';
      $db = new Database();
      $pdo = $db->getPdo();

      

//    $stmt = $pdo->prepare("SELECT * FROM vehicules WHERE id_car = 3 ");
//     $stmt->execute();
//     $user = $stmt->fetch();
//     print_r($user);


  if(isset($_POST['login'])){
    $email = htmlspecialchars(trim($_POST['email'])); 
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM clients WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    
    if($user && password_verify($password, $user['password'])){
        $_SESSION['id_client'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        if($user['role'] == "admin"){
            header("location: dashboard.php");
            exit;
        } else if($user['role'] == "client"){
            header("location: profil.php");
            exit;
        }else{
            header("location: index.php");
        }  

    } else{
          $_SESSION['error'] = "Identifiants incorrects.";
    }

  }




?>