<?php
session_start();
$parameters = parse_ini_file('db.ini');

try {
  //CONNEXION VIA PDO
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (!isset($_POST['login']) || !isset($_POST['mdp'])){
    header('location: ../../index.php');
    exit;
  }
  $stmt = $connect->prepare('SELECT * FROM `admins` WHERE `login` = :login AND `pass` = :password');
  $stmt->execute(array("login" => $_POST['login'], "password" => $_POST['mdp']));
  $result = $stmt->fetch();

  if ($result != null){
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pass'] = $_POST['mdp'];
    header('location: ../admin/adminPanel.php'); //ON REDIRIGE VERS LA PAGE ADMIN
    exit;
  }else{
    header('location: ../../index.php'); //ON REDIRIGE VERS LA PAGE D'ACCUEIL
    exit;
  }
}catch(Exeption $e){
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
