<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', TRUE);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142128409-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142128409-1');
</script>

<link rel="stylesheet" href="../../main.css">
<link rel="stylesheet" href="../css/adminPanel.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/scroll.js"></script>
<link rel="shortcut icon" href="../images/logo.ico">
<script src="https://kit.fontawesome.com/f59aae8cd6.js"></script>
<meta charset="utf-8">
<title>Admin Panel - Enzo Avagliano</title>
</head>
<body>
  <?php
  $parameters = parse_ini_file('../../db.ini');
  $connect = new PDO($parameters['host'], $parameters['user'], $parameters['pass']);
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  ?>
  <main>

    <div class="navbar">
      <h1 class="adminPanelTitle"><i class="fas fa-users-cog"></i> Welcome <?php echo $_SESSION['login'];?> !</h1>
    </div>

    <div class="sidenav">
      <a href="#widgetGeneralContainer"><i class="fas fa-chart-pie"></i> General Stats</a>
      <a href="#widgetProjectContainer"><i class="fas fa-project-diagram"></i> Projects Manager</a>
      <a href="#widgetCvContainer"><i class="fas fa-clipboard-list"></i> CV Editor</a>
      <a href="#widgetExpContainer"><i class="fas fa-briefcase"></i> Pro Experiences Manager</a>
    </div>

    <section id="widgetGeneralContainer">
      <div id="widgetGeneral" class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-chart-line"></i> Realtime Trafic</h1>
      </div>

      <div class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-chart-line"></i> Realtime Trafic</h1>
      </div>
    </section>

    <section id="widgetProjectContainer">
      <div id="widgetProjectAdd" class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-plus"></i> Add a project</h1>

        <form class="projectFormAdd" action="../admin/projectAdd.php" method="post">
          <label for="projectName">Project name</label><span class="required">*</span>
          <input type="text" name="projectName" placeholder="Enter the project name here" required>

          <label for="projectDescription">Project description (optional)</label>
          <input type="text" name="projectDescription" placeholder="Enter the project description here">

          <label for="projectLanguage">Project language</label><span class="required">*</span>
          <input type="text" name="projectLanguage" placeholder="Enter the project language" required>

          <label for="projectImage">Project image (optional)</label>
          <input type="file" name="projectImage" placeholder="Post a project image here">

          <input type="submit" name="sendButton" value="Add project">
        </form>
      </div>

      <div class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-edit"></i> Edit a project</h1>

        <form class="projectFormEdit" action="../admin/projectChange.php" method="post">
          <label for="projectNameE">Project name</label>
          <select name="projectNameE">
            <?php
            $stmt = $connect->prepare('SELECT `name` FROM `projets`');
            $stmt->execute();
            $tabulation = [];
            while($ligne = $stmt->fetch(PDO::FETCH_NUM)){
              foreach($ligne as $val){
                echo "<option name='$val'>$val</option>";
              }
            }
            ?>
          </select>

          <label for="projectDescriptionE">Project description</label>
          <input type="text" name="projectDescriptionE" placeholder="Enter the new project description ">

          <label for="projectLanguageE">Project language</label>
          <select name="projectLanguageE">
            <?php
            $stmt2 = $connect->prepare('SELECT `lang` FROM `projets`');
            $stmt2->execute();
            $tabulation = [];
            while($ligne = $stmt2->fetch(PDO::FETCH_NUM)){
              foreach($ligne as $val){
                echo "<option name='$val'>$val</option>";
              }
            }
            ?>
          </select>

          <label for="projectImage">Project image (optional)</label>
          <input type="file" name="projectImageE" placeholder="Post a project image">

          <input type="submit" name="sendButton" value="Modify project">
        </form>
      </div>
    </section>

    <section id="widgetCvContainer">
      <div id="widgetCV" class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-plus"></i> Add a competence</h1>

        <form class="cvFormAdd" action="compAdd.php" method="post">
          <label for="compName">Competence name</label><span class="required">*</span>
          <input type="text" name="compName" placeholder="Name of the competence goes here" required>

          <label for="compValue">Date (optional)</label><span class="required">*</span>
          <input type="number" name="compValue" placeholder="Value in percent" required>

          <input type="submit" name="sendButton" value="Add competence">
        </form>
      </div>

      <div class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-edit"></i> Edit a competence</h1>

        <form class="cvFormEdit" action="../admin/compChange.php" method="post">
          <label for="compNameE">Competence</label><span class="required">*</span>
          <select name="compNameE">
            <?php
            $stmt = $connect->prepare('SELECT `nom` FROM `competences`');
            $stmt->execute();
            $tabulation = [];
            while($ligne = $stmt->fetch(PDO::FETCH_NUM)){
              foreach($ligne as $val){
                echo "<option name='$val'>$val</option>";
              }
            }
            ?>
          </select>

          <label for="compValueE">Date (optional)</label>
          <input type="number" name="compValueE" placeholder="Enter the new value of the competence">

          <input type="submit" name="sendButton" value="Modify competence">
        </form>
      </div>

      <div class="widget-by2" style="margin-top: -22em;">
        <h1 class="widgetTitle"><i class="fas fa-edit"></i> Delete a competence</h1>


        <form class="cvFormEdit" action="../admin/compDel.php" method="post">
          <label for="compNameD">Competence</label><span class="required">*</span>
          <select name="compNameD">
            <?php
            $stmt = $connect->prepare('SELECT `nom` FROM `competences`');
            $stmt->execute();
            $tabulation = [];
            while($ligne = $stmt->fetch(PDO::FETCH_NUM)){
              foreach($ligne as $val){
                echo "<option name='$val'>$val</option>";
              }
            }
            ?>
          </select>

          <input type="submit" name="sendButton" value="Modify competence">
        </form>
      </div>
    </section>

    <section id="widgetExpContainer">
      <div id="widgetCV" class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-plus"></i> Add an experience</h1>

        <form class="expFormAdd" action="../admin/compAdd.php" method="post">
          <label for="expName">Experience name</label><span class="required">*</span>
          <input type="text" name="expName" placeholder="Enter the experience name here" required>

          <label for="expDescription">Experience description (optional)</label>
          <input type="text" name="expdescription" placeholder="Enter the experience description here">

          <label for="expImage">Experience place</label><span class="required">*</span>
          <input type="file" name="expImage" placeholder="Post a project image here" required>

          <label for="expDate">Experience Date (optional)</label>
          <input type="date" name="expDate" placeholder="Enter the creation date of the project">

          <input type="submit" name="sendButton" value="Add Experience">
        </form>
      </div>

      <div class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-edit"></i> Edit an experience</h1>

        <form class="expFormEdit" action="../admin/compAdd.php" method="post">
          <label for="expName">Experience</label><span class="required">*</span>
          <select name="expName">
            <option value="html">VAMO</option>

          </select>

          <label for="compValue">Experience Date (optional)</label>
          <input type="number" name="expValue" placeholder="Enter the new date of the experience">

          <input type="submit" name="sendButton" value="Modify experience">
        </form>
      </div>
    </section>

  </main>
</body>
</html>
