<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $query = "SELECT * FROM berita WHERE id_berita='$_GET[id]'";
  $sql = mysqli_query($db_link, $query); // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

  unlink("../img/berita/".$data['gambar']);

  $query2 = "DELETE FROM berita WHERE id_berita='$_GET[id]'";
  $sql2 = mysqli_query($db_link, $query2); // Eksekusi/Jalankan query dari variabel $query

  if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  	// Jika Sukses, Lakukan :
    echo "Berita telah dihapus";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=berita'>";
  }else{
  	// Jika Gagal, Lakukan :
    echo "Berita gagal dihapus";
    echo "<meta http-equiv='refresh' content='100; url=?tampil=berita'>";
  }
?>
