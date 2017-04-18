<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $db_link->query("UPDATE kategori SET nama_kategori='$_POST[nama_kategori]' WHERE id_kategori='$_POST[id]'")
  or die($db_link->error);

  echo "Kategori telah diedit";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=kategori'>";
?>
