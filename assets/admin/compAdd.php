<?php
$parameters = parse_ini_file('../../db.ini');

try {
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['compName']) && isset($_POST['compValue'])) {
    $comp = $_POST['compName'];
    $percent = $_POST['compValue'];

    $stmt = $connect->prepare("INSERT INTO competences(nom, value)  VALUES(?,?)");
    $stmt->execute([$comp,$percent]);
    header("location: adminPanel.php#widgetCvContainer");
    exit;
  }
} catch (PDOException $e) {
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
