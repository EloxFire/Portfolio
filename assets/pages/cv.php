<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Curriculum vitae - Enzo Avagliano</title>
  </head>
  <body>
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
              <p>HTML</p>
              <progress value="80" max="100"></progress>
              <p>CSS</p>
              <progress value="80" max="100"></progress>
              <p>JAVASCRIPT</p>
              <progress value="40" max="100"></progress>
              <p>JAVA</p>
              <progress value="30" max="100"></progress>
              <p>ADOBE SERIE</p>
              <progress value="70" max="100"></progress>
              <p>OFFICE SERIE</p>
              <progress value="80" max="100"></progress>
            </div>
            <div class="languages">
              <h1 style="font-size: 2em; letter-spacing: 2px">Languages</h1>
              <p>FRENCH</p>
              <progress value="95" max="100"></progress>
              <p>ENGLISH</p>
              <progress value="90" max="100"></progress>
              <p>ITALIAN</p>
              <progress value="40" max="100"></progress>
            </div>
          </div>

          <div class="adminButton">
            <button type="button" name="add">Modify CV</button>
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
