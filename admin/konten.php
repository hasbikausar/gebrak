<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=index.php'>");

  if (isset($_GET['tampil'])){
    $tampil = $_GET['tampil'];
  }
  else {
    $tampil = "beranda";
  }

  if ($tampil == "beranda") {
    include 'beranda.php';
  }
  elseif ($tampil == "keluar") {
    include 'keluar.php';
  }

  elseif ($tampil == "berita") {
    include 'berita/berita_tampil.php';
  }
  elseif ($tampil == "berita_tambah") {
    include 'berita/berita_tambah.php';
  }
  elseif ($tampil == "berita_tambahproses") {
    include 'berita/berita_tambahproses.php';
  }
  elseif ($tampil == "berita_edit") {
    include 'berita/berita_edit.php';
  }
  elseif ($tampil == "berita_editproses") {
    include 'berita/berita_editproses.php';
  }
  elseif ($tampil == "berita_hapus") {
    include 'berita/berita_hapus.php';
  }

  elseif ($tampil == "menu") {
    include 'menu/menu_tampil.php';
  }
  elseif ($tampil == "menu_tambah") {
    include 'menu/menu_tambah.php';
  }
  elseif ($tampil == "menu_tambahproses") {
    include 'menu/menu_tambahproses.php';
  }
  elseif ($tampil == "menu_edit") {
    include 'menu/menu_edit.php';
  }
  elseif ($tampil == "menu_editproses") {
    include 'menu/menu_editproses.php';
  }
  elseif ($tampil == "menu_hapus") {
    include 'menu/menu_hapus.php';
  }

  elseif ($tampil == "kategori") {
    include 'kategori/kategori_tampil.php';
  }
  elseif ($tampil == "kategori_tambah") {
    include 'kategori/kategori_tambah.php';
  }
  elseif ($tampil == "kategori_tambahproses") {
    include 'kategori/kategori_tambahproses.php';
  }
  elseif ($tampil == "kategori_edit") {
    include 'kategori/kategori_edit.php';
  }
  elseif ($tampil == "kategori_editproses") {
    include 'kategori/kategori_editproses.php';
  }
  elseif ($tampil == "kategori_hapus") {
    include 'kategori/kategori_hapus.php';
  }

  elseif ($tampil == "users") {
    include 'users/users_tampil.php';
  }
  elseif ($tampil == "users_tambah") {
    include 'users/users_tambah.php';
  }
  elseif ($tampil == "users_tambahproses") {
    include 'users/users_tambahproses.php';
  }
  elseif ($tampil == "users_edit") {
    include 'users/users_edit.php';
  }
  elseif ($tampil == "users_editproses") {
    include 'users/users_editproses.php';
  }
  elseif ($tampil == "users_hapus") {
    include 'users/users_hapus.php';
  }


  else {
    echo "Konten tidak ada";
  }

?>
