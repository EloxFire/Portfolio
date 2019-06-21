<?php
$parameters = parse_ini_file('../../db.ini');
$connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connect->prepare('SELECT `value` FROM `competences`');
$stmt2 = $connect->prepare('SELECT `nom` FROM `competences`');
$stmt->execute();
$stmt2->execute();
$tabulation = [];

while($ligne = $stmt->fetch(PDO::FETCH_NUM)){
  foreach($ligne as $val){
    $n = $stmt2->fetchColumn();
    echo "<p>$n</p>";
    echo "<progress value='$val' max='100'></progress>";
  }
}
?>
