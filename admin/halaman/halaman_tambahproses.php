<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $isi  = addslashes($_POST['isi']);

  $db_link->query("INSERT INTO halaman SET judul='$_POST[judul]', isi='$isi'")
  or die($db_link->error);

  echo "Halaman telah tersimpan";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=halaman'>";
?>
