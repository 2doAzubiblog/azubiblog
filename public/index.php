<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="http://code.jquery.com/jquery-3.3.1.slim.min.js"></script>



  <link rel="stylesheet" href="assets/css/main.min.css">
  <title>2do Azubiblog</title>
  </head>
  <body>

  <nav>
      <ul>
          <li><a href="#">Home</a></li>
          <li class="submenu"><a href="#">Das sind wir</a>
          <ul>
              <li><a href="#">Calvin</a></li>
              <li><a href="#">Lorena</a></li>
              <li><a href="#">Finn</a></li>
              <li><a href="#">Lukas</a></li>
              <li><a href="#">Julia</a></li>
              <li><a href="#">Patrick</a></li>
              <li><a href="#">Munja</a></li>
          </ul>
          </li>
          <li class="submenu"><a href="#">Ausbildungsberufe</a>
          <ul>
              <li><a href="#">Marketingkommunikation</a></li>
              <li><a href="#">Mediengestalter/-in</a></li>
              <li><a href="#">Büromanagement</a><li>
          </ul>
          </li>
          <li><a href="#">Rundgang</a></li>
          <li><a href="#">Postarchiv</a></li>
          <li><a href="#">Kontakt</a></li>
          <li><a href="#">zu 2do</a></li>
      </ul>
  </nav>

  <div class="header">
    <div class="header-container">
      <img src="assets/images/logo.png" alt="2do" class="logo">
      <p class="beschreibung">Willkommen auf dem Azubiblog von<br>2do Marketing Services!</p>
    </div>
  </div>

<?php include 'includes/posts.php' ?>

<?php include 'includes/footer.php' ?>

  </body>

</html>
