

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
      <div class="parallax"><img src="img/img1.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <h2 class="header center-align">Rejstracja</h2>
      <form class="col s12" action="http://localhost/myApp/registration_logic.php" method="POST">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" name="first_name">
            <label for="first_name">Imię</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" name="last_name">
            <label for="last_name">Nazwisko</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Hasło</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password2" type="password" class="validate" name="password2">
            <label for="password2">Powtórz hasło</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
            <span class="helper-text" data-error="Hmm .. Zły adres !" data-success="Dobrze !">Pomoc :)</span>
          </div>
        </div>
        <div class = "row">
          <div class="col s6 center-align">
            <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Rejstracja
            </button>
          </div>
          <div class="col s6 center-align">
          <a class="waves-effect waves-light btn-large" href="login.php">Logowanie</a>
          </div>
        </div>
        </form>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/img2.jpg"></div>
    </div>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>
        
