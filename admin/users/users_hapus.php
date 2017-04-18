<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $db_link->query("DELETE FROM user WHERE id_user='$_GET[id]'")
  or die($db_link->error);

  echo "User telah dihapus";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=users'>";
?>
