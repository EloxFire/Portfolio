<?php
$parameters = parse_ini_file('../../db.ini');

try{
  //CONNEXION VIA PDO
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['projectNameD'])) {

    $stmt = $connect->prepare('DELETE FROM `projets` WHERE `name` = :projet');
    $stmt->execute(array(":projet" => strtolower($_POST['projectNameD']));

    header("location: adminPanel.php#widgetProjectContainer");
    exit;
  }
}catch(PDOException $e){
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
