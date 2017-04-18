<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $isi  = addslashes($_POST['isi']);

  $db_link->query("UPDATE halaman SET judul='$_POST[judul]', isi='$isi' WHERE id_halaman='$_POST[id]'")
  or die($db_link->error);

  echo "Halaman telah diedit";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=halaman'>";
?>
