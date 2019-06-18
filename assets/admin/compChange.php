<?php
$param = parse_ini_file('../../db.ini');

try{
  //CONNEXION VIA PDO
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['compNameE']) && isset($_POST['compValueE'])) {
    $comp = $_POST['compNameE'];
    $percent = $_POST['compValueE']."%";

    $stmt = $dbh->prepare("UPDATE competences SET valeur = :percent WHERE nom = :comp";);
    $stmt->execute(array(":comp"=>$comp, ":percent"=>$percent));
    header("location: adminPanel.php#widgetCvContainer");
    echo('Compétence modifiée !');
    exit;
  }
}catch(PDOException $e){
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
