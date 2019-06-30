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
  $message = $_POST['message'];

  $headers = "Mail : ".$_POST['mail']."";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  $to = "enzo.avagliano@ynov.com";
  $subject = "De : ".$_POST['name']." ";


  mail($to,$headers,$message, $subject);
  header('location: ../../index.php');
  exit;
}catch (Exception $e) {
  echo $e -> getMessage() . "<br>";
  echo $e -> getCode() . "<br>";
}
?>
