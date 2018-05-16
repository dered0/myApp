<?php
// this file include db config
require_once 'db.php';




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

    <div class="parallax-container">
      <div class="parallax"><img src="img/img3.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <h2 class="header center-align">Logowanie</h2>
      <form class="col s12" action="http://localhost/myApp/login_logic.php" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Hasło</label>
          </div>
        </div>
        <div class = "row">
          <div class="col s6 center-align">
            <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Logowanie
            </button>
          </div>
          <div class="col s6 center-align">
          <a class="waves-effect waves-light btn-large" href="registration.php">Rejstracja</a>
          </div>
        </div>
        </form>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/img4.jpg"></div>
    </div>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>
        
