<?php
$parameters = parse_ini_file('../../db.ini');

try {
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['projectName']) && isset($_POST['projectLanguage'])) {

    $stmt = $connect->prepare("INSERT INTO projets(name, description, lang, type, application, page_url)  VALUES (?,?,?,?,?,?)");
    $stmt->execute(array(strtolower($_POST['projectName']), $_POST['projectDescription'], strtolower($_POST['projectLanguage']), strtolower($_POST['projectType']), strtolower($_POST['projectApplication']), $_POST['projectUrl']));
    header("location: adminPanel.php#widgetProjectContainer");
    exit;
  }
} catch (PDOException $e) {
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
