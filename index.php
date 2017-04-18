<?php
  session_start();

  include 'lib/koneksi.php';
  //include 'lib/fungsi_tglindonesia.php';
  define("INDEX", true);
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/pace-theme-flash.css" type="text/css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/frontend.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SK Gebrak</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- <div class="navbar-fixed white"> -->
      <nav>
        <div class="nav-wrapper white">
          <a href="index.php" class="brand-logo red-text">GEBRAK</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" id="btnNav">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <?php include 'menu.php'; ?>
            <li><a href="admin/index.php" class="red-text">Login</a></li>
          </ul>
        </div>
      </nav>
    <!-- </div> -->

    <div class="row">
      <div class="col s1">
        <!-- SideNav panel -->
          <ul class="side-nav" id="mobile-demo">
            <?php include 'menu.php'; ?>
            <div class="divider"></div>
            <a href="admin/index.php" class="red-text">Login</a>
          </ul>

      </div>
    </div>
<!-- Page content -->
    <main>
    <div class="container">
      <div class="row">
        <div class="col s1">
        </div>
        <div class="col s10">
          <?php include 'konten.php'; ?>
        </div>
        <div class="col s1">
        </div>
      </div>
    </div>

    </main>
    <form action="?tampil=search" method="post">
      <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large red">
          <i class="material-icons">search</i>
        </a>
        <ul>
          <li><a class="btn-float btn-large red"><input type="text" name="kata"></a></li>
        </ul>
      </div>
    </form>

    <footer class="page-footer red">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Surat Kabar Gebrak</h5>
              <p class="white-text text-lighten-4">Alamat: Jl. Sei Asahan No.34 Medan 20131<br>Telp: (061) - 8218001 / 8211565<br>Fax: (061) - 8217772<br>Email: redaksi@gebrak.com</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Social Media</h5>
              <ul>
                <li>
                  <a id="sosmed" class="white-text text-lighten-3" href="https://www.facebook.com/"><i id="sosmed" class="fa fa-facebook-square fa-2x"></i></a>
                  <a id="sosmed" class="white-text text-lighten-3" href="https://www.twitter.com/"><i id="sosmed" class="fa fa-twitter-square fa-2x"></i></a>
                  <a id="sosmed" class="white-text text-lighten-3" href="https://www.youtube.com/"><i id="sosmed" class="fa fa-youtube fa-2x"></i></a>
                  <a id="sosmed" class="white-text text-lighten-3" href="https://www.google.com/"><i id="sosmed" class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
              </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright red darken-3">
        <div class="container">
          <div style="color: white;">&copy; 2017 Made with <i class="material-icons" id="logoHeart">favorite</i> in Medan, Indonesia
          <a class="white-text text-lighten-4 right" href="https://www.facebook.com/hasbikausaranwar">Hasbi Kausar Anwar</a>
          </div>
        </div>
      </div>
    </footer>
    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/materialize/js/materialize.min.js"></script>
    <script src="assets/pace.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav({
          menuWidth: 240, // Default is 240
          edge: 'left', // Choose the horizontal origin
          closeOnClick: true
        });

        $('.tooltipped').tooltip({delay: 50});
        $('.fixed-action-btn').openFAB();
        $('.fixed-action-btn').closeFAB();
        $('.fixed-action-btn.toolbar').openToolbar();
        $('.fixed-action-btn.toolbar').closeToolbar();
      });
    </script>
  </body>
</html>
