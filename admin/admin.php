<?php
  session_start();

  if (!empty($_SESSION['username']) and !empty($_SESSION['password'])) {
    include '../lib/koneksi.php';
    define("INDEX", true);
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../assets/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../assets/admin.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SK Gebrak</title>
    <link rel="icon" href="../favicon.png">
  </head>
  <body>
    <div class="navbar-fixed">
    <nav id="navfixed">
      <div class="nav-wrapper">
        <a href="../index.php" class="brand-logo center">GEBRAK</a>
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons" id="btnNav">menu</i></a>
      </div>
    </nav>
    </div>

    <main>
    <div class="container">

    <div class="row">
      <div class="col s1">
        <!-- SideNav panel -->
          <ul id="slide-out" class="side-nav">
            <li><a href="?tampil=beranda" class="waves-effect">Beranda <i class="material-icons left" id="btnSideNav">home</i></a></li>
            <li><a href="?tampil=berita" class="waves-effect">Berita <i class="material-icons left" id="btnSideNav">note_add</i></a></li>
            <li><a href="?tampil=menu" class="waves-effect">Menu <i class="material-icons left" id="btnSideNav">style</i></a></li>
            <li><a href="?tampil=kategori" class="waves-effect">Kategori <i class="material-icons left" id="btnSideNav">label</i></a></li>
            <li><a href="?tampil=users" class="waves-effect">Users <i class="material-icons left" id="btnSideNav">people</i></a></li>
            <li><div class="divider"></div></li>
            <li><a href="?tampil=keluar" class="waves-effect">Keluar <i class="material-icons left" id="btnSideNav">exit_to_app</i></a></li>
          </ul>
      </div>
      <div class="col s11">
        <!-- Page content -->

          <div id="content">
            <?php include 'konten.php'; ?>
          </div>

      </div>
    </div>

    </div>
    </main>


    <footer class="page-footer center" id="footer">
      <div style="color: white;">&copy; 2017 <span>-</span> Made with <span><i class="material-icons" id="logoHeart">favorite</i></span> in Medan, Indonesia</div>
      <div class="footer-copyright center" id="footer">
          <div style="color: white;">Brought to you by Hasbi</div>
      </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../assets/materialize/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav({
          menuWidth: 240, // Default is 240
          edge: 'left', // Choose the horizontal origin
          closeOnClick: true
        });

        $("select").material_select();
      });
    </script>
  </body>
</html>

<?php
  }
  else {
    echo "Dilarang membuka halaman ini!";
    echo "<meta http-equiv='refresh' content='1; url=index.php'>";
  }
?>
