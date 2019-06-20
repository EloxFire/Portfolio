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
<link rel="stylesheet" href="../css/connect.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/scroll.js"></script>
<link rel="shortcut icon" href="../images/logo.ico">
<meta charset="utf-8">
<title>Connexion - Enzo Avagliano</title>
</head>
<body>
  <main>

    <ul id="menu">
      <li><a class="underlinedMenu" href="../../index.php#about">About</a></li>
      <li><a class="underlinedMenu" href="../../index.php#projects">Projects</a></li>
      <li><a class="underlinedMenu" href="../../index.php#software">Softwares</a></li>
      <li><a class="underlinedMenu" href="../../index.php#social">Social</a></li>
      <li><a class="underlinedMenu" href="cv.php">Curriculum vitae</a></li>
      <li><a class="underlinedMenu" href="../../index.php#contact">Contact</a></li>

      <li style="float:right"><img class="logoInMenu" src="../images/logo.png" alt="Logo Enzo Avagliano"></li>
      <li style="float:right"><a class="underlinedMenu" href="../pages/connexionPage.php">Connexion</a></li>
    </ul>

    <div class="loginBox">
      <h1>Log-in as administrator :</h1>

      <form action="../php/connexion.php" method="post">
        <label for="login">Login</label>
        <input type="text" id="login" name="login" placeholder="Your login.." required>

        <label for="passwd">Password</label>
        <input type="password" id="passwd" name="mdp" placeholder="Your password.." required>

        <input type="submit" value="Log-in">
      </form>
    </div>
  </main>
</body>
</html>
