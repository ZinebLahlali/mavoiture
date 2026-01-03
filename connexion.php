<?php
  session_start();
  require_once './classes/database.php';
      $db = new Database();
      $pdo = $db->getPdo();

    
  

  if(isset($_POST['login'])){
    $email = trim($_POST['email']); 
    $password = $_POST['password_hash'];


    $stmt = $pdo->prepare("SELECT * FROM clients WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    
    if($user && password_verify($password, $user['password_hash'])){
        $_SESSION['id_client'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        if($user['role'] === "admin"){
            header("location: dashboard.php");
            exit;
        } else if($user['role'] === "client"){
            header("location: index.php");
            exit;
        }else{
            header("location: Home.php");
        }  

    } else{
          $_SESSION['error'] = "Identifiants incorrects.";
    }

  }





?>