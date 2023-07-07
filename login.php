<?php
require('config/databases.php');
error_reporting(0);
session_start();
if(isset($_POST['login'])){
  $password=htmlspecialchars($_POST['us_password']);
  $email = htmlspecialchars($_POST['us_mail']);
  if(isset($password) and !empty($email)){
    $logs=$my_bd->prepare("SELECT * FROM utilisateur WHERE Password_utilis=? AND Email_utilis=?");
    $logs->execute(array($password,$email));
    $logs->rowCount();
    $checks=$logs->fetch();
    if($checks >0){ 
      $access= $checks['role_utilis'];
      $_SESSION['id_utilis']= $checks['id_utilis'];
      $_SESSION['Nom_utilis']= $checks['Nom_utilis'];
      $_SESSION['Password_utilis']= $checks['Password_utilis'];
      $_SESSION['Email_utilis']= $checks['Email_utilis'];
      $_SESSION['role_utilis']= $checks['role_utilis'];
      setcookie('alluser_email', $email, time() + (86400 * 30), "/");
      if($access == "administrateur"){
        header('location: backend/index.php');
      }
      elseif($access == "encadreur"){
        header('location: backend/encadreur/index.php');
      }
      else{
        $utilinonreco= "cet utilisateur ne pa reconnu";
      }
    }
    else{
      $incorect= "incorect email or password";
    }
  }
}
if($my_bd == true){
  require_once('login_view/index.view.php');
}
?>
 