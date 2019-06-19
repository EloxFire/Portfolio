<?php
$parameters = parse_ini_file('../../db.ini');
try {
  //CONNEXION A LA BDD
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //ON PREPARE NOTRE REQUETE
  $stmt = $connect->prepare("INSERT INTO messages(name, message, mail) VALUES (?, ?, ?)");
  $stmt->execute(array($_POST['name'], $_POST['message'], $_POST['mail'])); //ON EXECUTE NOTRE REQUETTE PRECEDEMENT PREPAREE
  header('location: ../../index.php#contact');
  exit;
}catch (Exception $e) {
  echo $e -> getMessage() . "<br>";
  echo $e -> getCode() . "<br>";
}
?>
