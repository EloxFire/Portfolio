<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
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
  <main>
    <section id="top-panel">

    </section>

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

        <form class="projectFormAdd" action="../admin/compAdd.php" method="post">
          <label for="projectName">Project name</label><span class="required">*</span>
          <input type="text" name="projectName" placeholder="Enter the project name here" required>

          <label for="projectDescription">Project description (optional)</label>
          <input type="text" name="description" placeholder="Enter the project description here">

          <label for="projectLanguage">Project language</label><span class="required">*</span>
          <input type="text" name="projectLanguage" placeholder="Enter the project language" required>

          <label for="projectImage">Project image (optional)</label>
          <input type="file" name="projectImage" placeholder="Post a project image here">

          <label for="projectDate">Date (optional)</label>
          <input type="date" name="projectDate" placeholder="Enter the creation date of the project">

          <input type="submit" name="sendButton" value="Add project">
        </form>
      </div>

      <div class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-edit"></i> Edit a project</h1>

        <form class="projectFormEdit" action="../admin/Add.php" method="post">
          <label for="projectName">Project name</label>
          <select name="projectName">
            <option value="tdk">Terre du Kill</option>
            <option value="cuitepates">Cuitépates</option>
            <option value="lockit">Lock!t</option>
            <option value="snake">Snake</option>
            <option value="systemexe">System.exe</option>
            <option value="portfolio">Portfolio</option>
          </select>

          <label for="projectDescription">Project description</label>
          <input type="text" name="description" placeholder="Enter the new project description ">

          <label for="projectLanguage">Project language</label>
          <select name="projectLanguage">
            <option value="java">Java</option>
            <option value="c">C / C# / C++</option>
            <option value="html">HTML / CSS</option>
            <option value="arduino">Arduino</option>
            <option value="processing">Processing</option>
          </select>

          <label for="projectImage">Project image (optional)</label>
          <input type="file" name="projectImage" placeholder="Post a project image">

          <label for="projectDate">Date (optional)</label>
          <input type="date" name="projectDate" placeholder="Enter the creation date of the project">

          <input type="submit" name="sendButton" value="Modify project">
        </form>
      </div>
    </section>

    <section id="widgetCvContainer">
      <div id="widgetCV" class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-plus"></i> Add a competence</h1>

        <form class="cvFormAdd" action="../admin/compAdd.php" method="post">
          <label for="compName">Competence name</label><span class="required">*</span>
          <input type="text" name="compName" placeholder="Name of the competence goes here" required>

          <label for="compValue">Date (optional)</label><span class="required">*</span>
          <input type="number" name="compValue" placeholder="Value in percent" required>

          <input type="submit" name="sendButton" value="Add competence">
        </form>
      </div>

      <div class="widget-by2" style="margin-top: 8em;">
        <h1 class="widgetTitle"><i class="fas fa-edit"></i> Edit a competence</h1>

        <form class="cvFormEdit" action="../admin/compAdd.php" method="post">
          <label for="compName">Competence</label><span class="required">*</span>
          <select name="compName">
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="javascript">Javascript</option>
            <option value="adobe">Adobe serie</option>
            <option value="office">Office serie</option>
            <option value="francais">French</option>
            <option value="anglais">English</option>
            <option value="italien">Italian</option>
          </select>

          <label for="compValue">Date (optional)</label>
          <input type="number" name="compValue" placeholder="Enter the new value of the competence">

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
            <!-- <option value="css">CSS</option>
            <option value="javascript">Javascript</option>
            <option value="adobe">Adobe serie</option>
            <option value="office">Office serie</option>
            <option value="francais">French</option>
            <option value="anglais">English</option>
            <option value="italien">Italian</option> -->
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