<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $password = md5($_POST['password']);

  $db_link->query("UPDATE user SET username='$_POST[username]', password='$password' WHERE id_user='$_POST[id]'")
  or die($db_link->error);

  echo "User telah diedit";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=users'>";
?>
