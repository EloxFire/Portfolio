<?php
$parameters = parse_ini_file('../../db.ini');

try {
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['expName']) && isset($_POST['expPlace'])) {
    $name = $_POST['expName'];
    $place = $_POST['expPlace'];
    $desc = $_POST['expDescription'];
    $xdate = $_POST['expDate'];
    $grade = $_POST['expGrade'];

    $stmt = $connect->prepare("INSERT INTO experiences(nom, grade, description, lieu, xp_date)  VALUES(?,?,?,?,?)");
    $stmt->execute([strtolower($name), strtolower($grade), strtolower($desc), strtolower($place), $xdate]);
    header("location: adminPanel.php#widgetExpContainer");
    exit;
  }
} catch (PDOException $e) {
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
