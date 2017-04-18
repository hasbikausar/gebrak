<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $db_link->query("INSERT INTO menu SET judul='$_POST[judul]', link='$_POST[link]', urutan='$_POST[urutan]'")
  or die($db_link->error);

  echo "Menu telah tersimpan";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=menu'>";
?>
