<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=index.php'>");

  if (isset($_GET['tampil'])){
    $tampil = $_GET['tampil'];
  }
  else {
    $tampil = "home";
  }

  if ($tampil == "home") {
    include 'konten/home.php';
  }
  elseif ($tampil == "kategori") {
    include 'konten/kategori.php';
  }
  elseif ($tampil == "posts") {
    include 'konten/posts.php';
  }
  elseif ($tampil == "komentar_proses") {
    include 'konten/komentar_proses.php';
  }
  elseif ($tampil == "search") {
    include 'konten/search.php';
  }

  else {
    echo "Konten tidak ada";
  }
?>
