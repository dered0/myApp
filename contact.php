<?php
// session first
session_start();



//validate login

if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header('location: login.php');
  exit;
}




?>

<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/main.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <nav>
    <div class="nav-wrapper grey darken-4">
      <a href="#!" class="brand-logo">Witaj <?php echo $_SESSION['first_name']; ?> !</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">xxxxxx</a></li>
        <li><a href="badges.html">yyyyyy</a></li>
        <li><a href="collapsible.html">zzzz</a></li>
        <li><a href="contact.php">Kontakt</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">xxxxxx</a></li>
    <li><a href="badges.html">yyyyyy</a></li>
    <li><a href="collapsible.html">zzzz</a></li>
    <li><a href="contact.php">Kontakt</a></li>
  </ul>
          

<div class="parallax-container">
      <div class="parallax"><img src="img/img7.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <form class="col s12" action="contact_logic.php" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <input id="first_name" name="name" type="text" class="validate">
                <label for="first_name">Imię</label>
              </div>
              </div>
              <div class="row">
              <div class="input-field col s12">
                <input id="last_name" name="last_name" type="text" class="validate">
                <label for="last_name">Nazwisko</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="subject" name="subject" name="subject" type="text" class="validate">
                <label for="subject">Temat</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
              <input id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
            <span class="helper-text" data-error="Hmm .. Zły adres !" data-success="Dobrze !">Pomoc :)</span>
              </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
                   <label for="textarea1">Wpisz treść wiadmości(max 200 znakow)</label>
              </div>
            </div>
            <div class="row">
            <div class="col s12 center-align">
            <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Wyślij
            </button>
          </div>
          </div>
          </form>
      </div>  
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/img8.jpg"></div>
    </div>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>
        
