<?php
// session first
session_start();


// this file include db config
require_once 'db.php';

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
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
          

<div class="parallax-container">
      <div class="parallax"><img src="img/img5.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
      <h3 class="header center-align">Witaj <?php echo $_SESSION['first_name']; ?></h3>
      <div class="divider"></div>

      <div class="row">
        <div class="col s12 center-align">
            <a class="waves-effect waves-light btn" href="logout.php">Wyloguj się</a>
      </div>
      </div>
        </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/img6.jpg"></div>
    </div>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>
        
