<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $nama_gambar  = $_FILES['gambar']['name'];
  $lokasi_gambar  = $_FILES['gambar']['tmp_name'];
  $tipe_gambar  = $_FILES['gambar']['type'];

  $tanggal  = date('Ymd');
  $isi  = addslashes($_POST['isi']);

  // Cek apakah user ingin mengubah gambarnya atau tidak
  if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form edit, lakukan :
  	// Ambil data gambar yang dipilih dari form
  	$nama_gambar  = $_FILES['gambar']['name'];
  	$lokasi_gambar  = $_FILES['gambar']['tmp_name'];

  	// Set path folder tempat menyimpan gambarnya
  	$path = "../img/berita/".$nama_gambar;

  // Proses upload
  if(move_uploaded_file($lokasi_gambar, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  	// Query untuk menampilkan data artikel berdasarkan ID yang dikirim
  	$query = "SELECT * FROM berita WHERE id_berita='$_POST[id]'";
  	$sql = mysqli_query($db_link, $query); // Eksekusi/Jalankan query dari variabel $query
  	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

    // Hapus file gambar sebelumnya yang ada di folder img/artikel
  	unlink("../img/berita/".$data['gambar']);

    // Proses ubah data ke Database
		$query = "UPDATE berita SET judul='$_POST[judul]', isi='$isi', gambar='$nama_gambar' where id_berita='$_POST[id]'";
		$sql = mysqli_query($db_link, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
      echo "Berita telah diedit";
      echo "<meta http-equiv='refresh' content='1; url=?tampil=berita'>";

    }else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<meta http-equiv='refresh' content='60; url=?tampil=berita'>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<meta http-equiv='refresh' content='60; url=?tampil=berita'>";
	}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$query = "UPDATE berita SET judul='$_POST[judul]', isi='$isi' where id_berita='$_POST[id]'";
	$sql = mysqli_query($db_link, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
    echo "Berita telah diedit";
    echo "<meta http-equiv='refresh' content='1; url=?tampil=berita'>";
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<meta http-equiv='refresh' content='60; url=?tampil=berita'>";
	}
}
?>
