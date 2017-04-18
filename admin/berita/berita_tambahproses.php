<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $nama_gambar    = $_FILES['gambar']['name'];
  $lokasi_gambar  = $_FILES['gambar']['tmp_name'];
  $tipe_gambar    = $_FILES['gambar']['type'];

  $tanggal  = date('Ymd');
  $isi      = addslashes($_POST['isi']);

  if ($lokasi_gambar=="") {
    $db_link->query("INSERT INTO berita SET judul='$_POST[judul]', id_kategori='$_POST[kategori]', isi='$isi', tanggal='$tanggal'")
    or die($db_link->error);
  }
  else {
    move_uploaded_file($lokasi_gambar, "../img/berita/$nama_gambar");
    $db_link->query("INSERT INTO berita SET judul='$_POST[judul]', id_kategori='$_POST[kategori]', isi='$isi', tanggal='$tanggal', gambar='$nama_gambar'")
    or die($db_link->error);
  }

  echo "Artikel telah tersimpan";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=berita'>";
?>
