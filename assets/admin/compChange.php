<?php
$parameters = parse_ini_file('../../db.ini');

try{
  //CONNEXION VIA PDO
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['compNameE']) && isset($_POST['compValueE'])) {

    $stmt = $connect->prepare('UPDATE `competences` SET `value` = :percent WHERE `nom` = :comp');
    $stmt->execute(array(":percent" => $_POST['compValueE'], ":comp" => strtolower($_POST['compNameE'])));

    header("location: adminPanel.php#widgetCvContainer");
    exit;
  }
}catch(PDOException $e){
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
