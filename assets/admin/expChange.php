<?php
$parameters = parse_ini_file('../../db.ini');

try{
  //CONNEXION VIA PDO
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['expNameE']) && isset($_POST['expPlaceE'])) {

    $stmt = $connect->prepare('UPDATE `experiences` SET `description` = :description, `lieu` = :place, `date` = :xdate WHERE `nom` = :name');
    $stmt->execute(array(":name" => strtolower($_POST['expNameE']), ":description" => strtolower($_POST['expDescriptionE']), ":lieu" => strtolower($_POST['expPlaceE']), ":xdate" => $_POST['expDateE']));

    header("location: adminPanel.php#widgetExpContainer");
    exit;
  }
}catch(PDOException $e){
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
