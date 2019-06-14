<?php

session_start();

$parameters = parse_ini_file('db.ini');
try {
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if (!isset($_POST['login']) || !isset($_POST['mdp'])){
    //echo "<script>alert('Bad password or login, you've been redirected...')</script>";
    header('location: ../../index.php');
    exit;

  }
  // On prepare la requete sql par la requete suivant
  $stmt = $connect->prepare('SELECT * FROM `admins` WHERE `login` = :login AND `pass` = :password');
  $stmt->execute(array(":login" => $_POST['login'], ":password" => $_POST['mdp']));
  $result = $stmt->fetch();

  if ($result != null){ //VERIFICATION DE SI LE RESULTAT N'EST PAS NUL
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pass'] = $_POST['mdp'];
    header('location: ../pages/adminPanel.php');
    exit;
  }
  echo "<script>alert('Bad password or login, you've been redirected...')</script>";
  header('location: ../../index.php');
  exit;

}catch(Exeption $e){
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}

?>
