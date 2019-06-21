<?php
$parameters = parse_ini_file('../../db.ini');

try {
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['compName']) && isset($_POST['compValue'])) {
    $comp = $_POST['compName'];
    $percent = $_POST['compValue'];
    $cat = $_POST['compCat'];

    $stmt = $connect->prepare("INSERT INTO competences(nom, value, cat)  VALUES(?,?,?)");
    $stmt->execute([strtolower($comp),$percent,strtolower($cat)]);
    header("location: adminPanel.php#widgetCvContainer");
    exit;
  }
} catch (PDOException $e) {
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
