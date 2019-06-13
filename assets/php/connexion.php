<?php

$parameters = parse_ini_file('db.ini');

try {
  //CONNEXION A LA BDD
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $login = $_POST['login'];
  $pass = $_POST['mdp'];

  $stmt = $connect->prepare('SELECT login, pass FROM admins');
  $stmt->execute();
  $result = $stmt->fetch();


  if (isset($_POST['login']) && isset($_POST['mdp'])) {
    if($login == $result['login'] && $pass == $result['pass']){

      session_start();
      $_SESSION['login'] = $login;
      $_SESSION['pass'] = $pass;
      header('location: ../pages/adminPanel.php');
      echo "Vous êtes Connecté !";
    }else{
      echo "Pas le bon login ou pass";
    }
  }

}catch(\Exeption $e){
  echo $e -> getMessage() . "<br>";
  echo $e -> getCode() . "<br>";
}
$connect = null;
?>
