<?php
  session_start();

  include '../lib/koneksi.php';

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $cek    = $db_link->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
  $data   = $cek->fetch_array();
  $jumlah = $cek->num_rows;

  if ($jumlah>0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

    echo "<meta http-equiv='refresh' content='1; url=admin.php'>";
  }
  else {
    echo "<center>Gagal, username atau password salah!<br><b><a href='index.php'>ULANGI</a></b></center>";
  }
?>
