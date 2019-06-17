<?php
$parameters = parse_ini_file('../php/db.ini');

try {
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['comp'])) {
    $comp=$_POST['comp'];
  } else {
    $comp="";
  }

  if(isset($_POST['percent'])) {
    $percent=$_POST['percent'].'%';
  } else {
    $percent="";
  }

  if(empty($comp) OR empty($percent)) {
    echo '<font color="red">Veuillez remplir tout les champs</font>';
    return;
  } else {
    $query = ;
    $stmt = $connect->prepare("INSERT INTO competences(nom, veleur)  VALUES(?,?)");
    $stmt->execute([$comp,$percent]);
    var_dump($comp . $percent);
    echo('Competence ajoutée');
    exit;
  }
} catch (PDOException $e) {
  echo @"{$e->getMessage()}<br>{$e->getCode()}<br>";
}
?>
