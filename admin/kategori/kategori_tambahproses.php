<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $db_link->query("INSERT INTO kategori SET nama_kategori='$_POST[nama_kategori]'")
  or die($db_link->error);

  echo "Kategori telah tersimpan";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=kategori'>";
?>
