<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142128409-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142128409-1');
</script>

<link rel="stylesheet" href="../../main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="shortcut icon" href="../images/logo.ico">
<title>Curriculum vitae - Enzo Avagliano</title>
</head>
<body>
  <?php
  //CONNEXION A LA BDD AFIN DE RECUP LES INFOS
  // $parameters = parse_ini_file('../../db.ini');
  // $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  // $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  ?>
  <main>
    <?php include '../php/menuCV.php' ?>
    <section id="cvContainer">
      <div id="left">
        <div class="presContainer">
          <img src="../images/Social/cvpp.png" alt="Enzo Avagliano Profile Picture">
          <div class="titleContainerCV">
            <h1 class="nameTitle">Enzo Avagliano</h1>
            <p class="statusTitle">étudiant - Developpeur</p>
          </div>
        </div>

        <div class="competences">
          <div class="general">
            <h1 style="font-size: 2em; letter-spacing: 2px">Skills</h1>

            <?php
            $parameters = parse_ini_file('../../db.ini');
            $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $connect->prepare('SELECT `value` FROM `competences` WHERE `cat` = "dev"');
            $stmt2 = $connect->prepare('SELECT `nom` FROM `competences` WHERE `cat` = "dev"');
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
          </div>
          <div class="languages">
            <h1 style="font-size: 2em; letter-spacing: 2px">Languages</h1>
            <?php
            $parameters = parse_ini_file('../../db.ini');
            $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $connect->prepare('SELECT `value` FROM `competences` WHERE `cat` = "lang"');
            $stmt2 = $connect->prepare('SELECT `nom` FROM `competences` WHERE `cat` = "lang"');
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
          </div>
          <div class="software">
            <h1 style="font-size: 2em; letter-spacing: 2px">Softwares</h1>

            <?php
            $parameters = parse_ini_file('../../db.ini');
            $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $connect->prepare('SELECT `value` FROM `competences` WHERE `cat` = "software"');
            $stmt2 = $connect->prepare('SELECT `nom` FROM `competences` WHERE `cat` = "software"');
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
          </div>
        </div>

        <div class=".adminButtonDiv">
          <a href="connexionPage.php">Modify cv</a>
        </div>
      </div>

      <div id="right">
        <div class="upleft">
          <h1 class="sectionTitleCV"><i class="fas fa-caret-right"></i>Professional Experience</h1>
          <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Internship observation | Middle School<br>VAMO OUTILLAGE - Help on diferents tasks and shipping</p>
          <p class="dateCV">Summer 2015</p>
        </div>
        <div class="upright">
          <h1 class="sectionTitleCV"><i class="fas fa-caret-right"></i>Studies</h1>
          <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Ynov Digital School | Aix en Provence<br>Bachelor 1 in computer science</p>
          <p class="dateCV">September 2018 - Today</p>

          <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Hight School 'Emile Zola' | Aix en Provence<br>Obtaining the scientific 'Baccalaureat' in July 2018</p>
          <p class="dateCV">September 2015 - July 2018</p>

          <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Middle School 'La Chesneraie' | Puyricard<br>Obtaining the 'Brevet des Collèges' in July 2015 </p>
          <p class="dateCV">September 2011 - July 2015</p>
        </div>
        <div class="downleft">
          <h1 class="sectionTitleCV"><i class="fas fa-caret-right"></i>Hobbies</h1>
          <div class="hobbiesList">
            <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Computing</p>
            <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Video Games</p>
            <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Sports</p>
            <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Traveling</p>
            <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Astronomy</p>
            <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Astrophotography</p>
            <p class="sectionParaCV"><i class="fas fa-caret-right"></i>4L Trophy (Humanitarian raid)</p>
          </div>
        </div>
        <div class="downright">
          <h1 class="sectionTitleCV"><i class="fas fa-caret-right"></i>Other Diplomas</h1>
          <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Owener of driving licence</p>
          <p class="dateCV">Since november 9th 2018</p>

          <p class="sectionParaCV"><i class="fas fa-caret-right"></i>Owner of the English TOEIC with a score of 877</p>
          <p class="dateCV">September 2018</p>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
