<?php
$parameters = parse_ini_file('../../db.ini');
try {
  //CONNEXION A LA BDD
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //ON PREPARE NOTRE REQUETE
  $stmt = $connect->prepare("INSERT INTO messages(name, message, mail) VALUES (:name, :message, :email)");
  $stmt->bindParam(':name', $name); //ON DEFINIS LES PARAMETRES SELON NOTRE FORMULAIRE
  $stmt->bindParam(':message', $message);
  $stmt->bindParam(':email', $mail);

  $name = $_POST['name'];
  $message = $_POST['message'];
  $mail = $_POST['mail'];

  $stmt->execute(); //ON EXECUTE NOTRE REQUETTE PRECEDEMENT PREPAREE
  header('location: ../../index.php');
  exit;
}catch (Exception $e) {
  echo $e -> getMessage() . "<br>";
  echo $e -> getCode() . "<br>";
}
?>
