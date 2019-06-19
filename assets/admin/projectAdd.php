<?php
$parameters = parse_ini_file('../../db.ini');

try {
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['projectName']) && isset($_POST['projectLanguage'])) {

    $stmt = $connect->prepare("INSERT INTO projets(name, description, lang)  VALUES (?,?,?)");
    $stmt->execute(array($_POST['projectName'], $_POST['projectDescription'], $_POST['projectLanguage']));
    header("location: adminPanel.php#widgetProjectContainer");
    exit;
  }
} catch (PDOException $e) {
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
