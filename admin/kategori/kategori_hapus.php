<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $db_link->query("DELETE FROM kategori WHERE id_kategori='$_GET[id]'")
  or die($db_link->error);

  echo "Kategori telah dihapus";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=kategori'>";
?>
