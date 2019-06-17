<?php
$param = parse_ini_file('../../db.ini');

    try{
        $dbh = new PDO($param['url'], $param['user'], $param['password']);
    }catch(PDOException $e){
        echo("Erreur de connexion");
        exit;
    }

    if(isset($_POST['comp'])) {
        $comp=$_POST['comp'];
    } else {
        $comp="";
    }

    if(isset($_POST['percent'])) {
        $percent=$_POST['percent']."%";
    } else {
        $percent="";
    }
    if (empty($comp) OR empty($percent)) {
        echo '<font color="red">Attention, veuillez remplir les champs !</font>';
        echo "<form action='admin_page.php' method='get'>
        <input type='submit' value='Retour'>
    </form>";
        return;
    }
    else {
        $query = "UPDATE competences SET pourcentage = :percent WHERE nom_comp = :comp";
        $sql = $dbh->prepare($query);
        $sql->execute(array(":comp"=>$comp, ":percent"=>$percent));
        $dbh = null;
        echo('Compétence modifiée !');
        echo "<form action='admin_page.php' method='get'>
            <input type='submit' value='Retour'>
        </form>";
        exit;
    }
