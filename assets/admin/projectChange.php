<?php
$parameters = parse_ini_file('../../db.ini');

try{
  //CONNEXION VIA PDO
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['projectNameE']) && isset($_POST['projectLanguageE'])) {

    $stmt = $connect->prepare('UPDATE `projets` SET `name` = :name, `description` = :description, `lang` = :lang, `type` = :type, `application` = :app, `page_url` = :url WHERE `name` = :name');
    $stmt->execute(array(":name" => strtolower($_POST['projectNameE']),
    ":description" => strtolower($_POST['projectDescriptionE']),
    ":lang" => strtolower($_POST['projectLanguageE']),
    ":type" => strtolower($_POST['projectTypeE']),
    ":app" => strtolower($_POST['projectTypeE']),
    ":url" => $_POST['projectUrlE']));

    header("location: adminPanel.php#widgetProjectContainer");
    exit;
  }
}catch(PDOException $e){
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
