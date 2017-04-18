<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $query = "SELECT * FROM artikel WHERE id_artikel='$_GET[id]'";
  $sql = mysqli_query($db_link, $query); // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

  unlink("../img/artikel/".$data['gambar']);

  $query2 = "DELETE FROM artikel WHERE id_artikel='$_GET[id]'";
  $sql2 = mysqli_query($db_link, $query2); // Eksekusi/Jalankan query dari variabel $query

  if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  	// Jika Sukses, Lakukan :
    echo "Artikel telah dihapus";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=artikel'>";
  }else{
  	// Jika Gagal, Lakukan :
    echo "Artikel gagal dihapus";
    echo "<meta http-equiv='refresh' content='100; url=?tampil=artikel'>";
  }
?>
