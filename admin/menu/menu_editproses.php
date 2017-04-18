<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $db_link->query("UPDATE menu SET judul='$_POST[judul]', link='$_POST[link]', urutan='$_POST[urutan]' WHERE id_menu='$_POST[id]'")
  or die($db_link->error);

  echo "Menu telah diedit";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=menu'>";
?>
