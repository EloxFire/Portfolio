<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/scroll.js"></script>
  <script type="text/javascript" src="assets/js/filterScript.js"></script>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="assets/images/logo.ico">
  <title>Enzo Avagliano - Homepage.</title>
</head>
<body onload="filterSelection('all')">
  <header>
    <div class="titleContainer">
      <h1 class="boxedHeader">Welcome.</h1>
    </div>
  </header>

  <?php include 'assets/php/menu.php' ?>

  <section id="about">
    <h1 class="sectionTitle">About me.</h1>
    <div class="separator"></div>

    <div class="personalInfos">
      <h3>some personal infos :</h3>
      <p>
        Hi !<br>
        My name's Enzo Avagliano, I'm 18 years old and I'm a computer engineering student in first year at <a href="https://www.ynov-aix.fr/" target="_blank">Ynov Aix-En-Provence</a><br>
        I live in the little (but lovely) town of <a href="https://fr.wikipedia.org/wiki/Saint-Cannat" target="_blank">Saint-Cannat</a>, near <a href="https://fr.wikipedia.org/wiki/Aix-en-Provence" target="_blank">Aix-En-Provence.</a>
        As for my passions, I'm in love with atronomy, and all that is in relation to the space in general, obviously, computing take also a big part of my life.<br>
        If I had to make a graphic of my passion, here are the corresponding percentages :<br>
        Astronomy : 25%<br>
        Computing : 25%<br>
        But, this doesn't make 100%... Yeah the fifty percent that remains are here :<br>
        Friendship : 50%.
      </p>
      <div class="additionalNotes">
        <p>These three poles are the engines and the pillars, which make me who I am.</p>
      </div>
    </div>

    <div class="professionalInfos">
      <h3>some professional infos :</h3>
      <p>
        As I said earlier, I am a first year computer engineering student, but the truth is that I started studying development 3 years ago doing totally random things in java for a famous game named <a href="https://minecraft.net/fr-fr/" target="_blank"> Minecraft</a>.
        I do not know if you know :)<br>
        Now, i have some projects, which are curently under development, you'll be able to see them in the next section , right after that !
      </p>
    </div>
  </section>

  <section id="projects">
    <h1 class="sectionTitle">Projects.</h1>
    <div class="separator"></div>

    <div class="intro">
      <p>
        Yes, since I started to code, I did several projects, which are for some completed and for the other in a "paused" statut.<br>
        Here, you got a list and the details of those projects.
      </p>
    </div>

    <div class="filterContainer">
      <h1 class="secondSectionTitle">Filter projects by :</h1>
      <div class="separatorSecond"></div>
      <div id="filtersButtonContainer">
        <a class="btnFilter" onclick="filterSelection('all')">Show all</a>
        <a class="btnFilter" onclick="filterSelection('java')">Java</a>
        <a class="btnFilter" onclick="filterSelection('cProject')">C/C#/C++</a>
        <a class="btnFilter" onclick="filterSelection('html')">HTML/CSS</a>
        <a class="btnFilter" onclick="filterSelection('arduino')">Arduino</a>
        <a class="btnFilter" onclick="filterSelection('processing')">Processing</a>
      </div>
    </div>

    <div class="container">
      <div class="filterDiv java tdk less">
        <h3>Terre du Kill</h3>
        <div class="separatorCard"></div>
        <p>
          Project type :<br>
          MiniGame<br>
          Language :<br>
          Java<br>
          Application :<br>
          In-game modifications
        </p>
        <div class="separatorCard"></div>
        <p class="seeMore"><a href="assets/pages/tdk.php">See more</a></p>
      </div>
      <div class="filterDiv arduino cuitepates less">
        <h3>Cuitépâtes</h3>
        <div class="separatorCard"></div>
        <p>
          Project type :<br>
          Utils<br>
          Language :<br>
          Arduino<br>
          Application :<br>
          Life simplification
        </p>
        <div class="separatorCard"></div>
        <p class="seeMore"><a href="assets/pages/cuitepates.php">See more</a></p>
      </div>

      <div class="filterDiv arduino lockit less">
        <h3>Lock!t</h3>
        <div class="separatorCard"></div>
        <p>
          Project type :<br>
          Utils<br>
          Language :<br>
          Arduino/MIT app inventor<br>
          Application :<br>
          Life simplification
        </p>
        <div class="separatorCard"></div>
        <p class="seeMore"><a href="assets/pages/lockit.php">See more</a></p>
      </div>

      <div class="filterDiv processing snake less">
        <h3>Snake</h3>
        <div class="separatorCard"></div>
        <p>
          Project type :<br>
          Game<br>
          Language :<br>
          Processing<br>
          Application :<br>
          Remake the mobile game Snake
        </p>
        <div class="separatorCard"></div>
        <p class="seeMore"><a href="assets/pages/snake.php">See more</a></p>
      </div>

      <div class="filterDiv processing systemexe less">
        <h3>System.exe</h3>
        <div class="separatorCard"></div>
        <p>
          Project type :<br>
          Game<br>
          Language :<br>
          Processing<br>
          Application :<br>
          'Asteroid' like 2D game
        </p>
        <div class="separatorCard"></div>
        <p class="seeMore"><a href="assets/pages/system.php">See more</a></p>
      </div>
      <div class="filterDiv html portfolio less">
        <h3>My Portfolio</h3>
        <div class="separatorCard"></div>
        <p>
          Project type :<br>
          Website<br>
          Language :<br>
          HTML/CSS/JS<br>
          Application :<br>
          professional visibility
        </p>
        <div class="separatorCard"></div>
        <p class="seeMore"><a href="assets/pages/portfolio.php">See more</a></p>
      </div>
    </div>
  </section>

  <section id="software">
    <h1 class="sectionTitle">Softwares.</h1>
    <div class="separator"></div>

    <div class="intro">
      <p>
        This section is a bit different from the other, here you'll find a list of all the softwares I use daily.
      </p>
    </div>

    <div class="softwaresContainer">
      <div class="softwareCard">
        <img src="assets/images/atom.png" class="softwareImg">
        <div class="separatorCard"></div>

        <h1>Atom Editor</h1>
        <p>
          The most beautiful and powerfull software in THE ENTIRE WORLD.
        </p>
      </div>
      <div class="softwareCard">
        <img src="assets/images/github.png" class="softwareImg">
        <div class="separatorCard"></div>

        <h1>GitHub</h1>
        <p>
          Very cool, very easy to use, very everything.
        </p>
      </div>
      <div class="softwareCard">
        <img src="assets/images/google.png" class="softwareImg">
        <div class="separatorCard"></div>

        <h1>Google</h1>
        <p>
          Yes, because I don't know everything !
        </p>
      </div>
    </div>

    <div class="secondSectionTitle">GitHub</div>
    <div class="separatorSecond"></div>
    <p class="intro">
      GitHub Inc. is a web-based hosting service for version control using Git. It is mostly used for computer code. It offers all of the distributed version control and source code management
    </p>

    <div class="secondSectionTitle">Atom Editor</div>
    <div class="separatorSecond"></div>
    <p class="intro">
      Atom is a free and open-source text and source code editor for macOS, Linux, and Microsoft Windows with support for plug-ins written in Node.js, and embedded Git Control, developed by GitHub.
    </p>

    <div class="secondSectionTitle">Google</div>
    <div class="separatorSecond"></div>
    <p class="intro">
      Well Google...
    </p>
  </section>

  <section id="social">
    <h1 class="sectionTitle">Social.</h1>
    <div class="separator"></div>

    <p class="intro">Heyy ! Welcome to the Social section. Well, you'll find out that you got all my social medias over here ^^.</p>

    <div class="mediaContainer">
      <div class="mediaCard">
        <a href="https://twitter.com/EloxFire" target="_blank"><img src="assets/images/Social/Twitter.png" class="mediaImg"></a>
        <div class="separatorCard"></div>
        <h1>Twitter</h1>
        <p>My most active social media</p>
      </div>

      <div class="mediaCard">
        <a href="#social" target="_blank"><img src="assets/images/Social/Discord.png" class="mediaImg"></a>
        <div class="separatorCard"></div>
        <h1>Discord</h1>
        <p>My discord name is EloxFire#3031</p>
      </div>

      <div class="mediaCard">
        <a href="https://www.youtube.com/user/EloxFire" target="_blank"><img src="assets/images/Social/Youtube.png" class="mediaImg"></a>
        <div class="separatorCard"></div>
        <h1>Youtube</h1>
        <p>Here you can find my Youtube channel</p>
      </div>

      <div class="mediaCard">
        <a href="https://github.com/EloxFire" target="_blank"><img src="assets/images/Social/Github.png" class="mediaImg"></a>
        <div class="separatorCard"></div>
        <h1>GitHub</h1>
        <p>Link to my Github page, where I post some code and projects.</p>
      </div>
    </section>

    <section id="contact">
      <h1 class="sectionTitle">Contact</h1>
      <div class="separator"></div>

      <div id="contactContainer">
        <div class="leftContact">
          <form class="contactForm" action="assets/php/formulaire.php" method="post">
            <label for="name">Name</label><span class="required">*</span>
            <input type="text" name="name" placeholder="Enter your name" required>
            <label for="mail">E-Mail (Optional)</label>
            <input type="email" name="mail" placeholder="Enter you mail here (optional)">
            <label for="message">Your message</label><span class="required">*</span>
            <textarea name="message" rows="8" cols="80" placeholder="Enter your text here" required></textarea>
            <input type="submit" name="sendButton" value="Send message">
          </form>
        </div>
      </div>
    </section>

    <?php include 'assets/php/footer.php' ?>
  </body>
  </html>
