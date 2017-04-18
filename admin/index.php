<!DOCTYPE html>
<html>
  <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../assets/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../assets/adminlogin.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <title>Admin Login - SK Gebrak</title>
    <link rel="icon" href="../favicon.png">
  </head>
  <body>
    <div class="bglogin"></div>
    <form action="ceklogin.php" method="post">
    <div class="col s12">
      <div class="row tengah">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="username">
          <label>Username</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_lock" type="password" class="validate" name="password">
          <label>Password</label>
        </div>
        <div class="input-field col s12">
          <div class="center"><button class="btn waves-effect waves-orange transparent" id="btnAdminLogin" type="submit"><div id="txtAdminLogin">MASUK<i class="material-icons right">arrow_forward</i></div></button></div>
        </div>
      </div>
    </div>
    </form>

    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../assets/materialize/js/materialize.min.js"></script>
  </body>
</html>
