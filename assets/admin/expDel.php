<?php
$parameters = parse_ini_file('../../db.ini');

try{
  //CONNEXION VIA PDO
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['expNameD'])) {

    $stmt = $connect->prepare('DELETE FROM `experiences` WHERE `nom` = :name');
    $stmt->execute(array(":name" => strtolower($_POST['expNameD'])));

    header("location: adminPanel.php#widgetExpContainer");
    exit;
  }
}catch(PDOException $e){
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
