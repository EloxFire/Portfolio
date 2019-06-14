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
  <meta charset="utf-8">
  <title>Admin Panel - Enzo Avagliano</title>
</head>
<body>
  <main>
    <section id="top-panel">
      <h1 class="adminPanelTitle">Welcome <?php echo $_SESSION['login'];?> !</h1>
    </section>

    <section id="side-panel">
      <h2 class="sidePanelList">Sections list :</h2>

      <!-- List of categories -->
      <ul>
        <li> <a class="sidePanelList" href="#">Realtime traffic</a> </li>
        <li> <a class="sidePanelList"href="#">Long stats</a> </li>
        <li> <a class="sidePanelList"href="#">Curriculum vitae</a> </li>
        <li> <a class="sidePanelList"href="#">Projects manager</a> </li>
      </ul>
    </section>

    <section id="panel-container">
      <div class="widget">
        <h3 class="panelTitle">Panel 1</h3>
      </div>
      <div class="widget">
        <h3 class="panelTitle">Panel 2</h3>
      </div>
      <div class="widget">
        <h3 class="panelTitle">Panel 3</h3>
      </div>
      <div class="widget">
        <h3 class="panelTitle">Panel 4</h3>
      </div>
    </section>
  </main>
</body>
</html>
