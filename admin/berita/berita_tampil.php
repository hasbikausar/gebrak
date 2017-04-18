<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");
?>

<h3>Daftar Berita</h3>
<hr><br>
<a href="?tampil=berita_tambah" class="btn waves-effect waves-light" id="btn"><i class="material-icons right">add</i>Tambah Berita</a><br><br>
<p>
<table class="responsive-table bordered highlight">
  <thead>
    <tr>
      <th class="center-align">No</th>
      <th class="center-align">Judul</th>
      <th class="center-align">Tanggal</th>
      <th class="center-align">Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php
    // Load file koneksi.php
    include '../lib/koneksi.php';
    include '../lib/fungsi_tglindonesia.php';

    $no = 1;
    $sql  = $db_link->query("SELECT * FROM berita ORDER by id_berita DESC")
    or die($db_link->error);
    while ($data = $sql->fetch_array()) {
      $tanggal  = tgl_indonesia($data['tanggal']);
    ?>
    <tr>
      <td class="center-align"><?php echo $no; ?></td>
      <td class="center-align"><?php echo $data['judul']; ?></td>
      <td class="center-align"><?php echo $tanggal; ?></td>
      <td class="center-align">
        <a href="?tampil=berita_edit&id=<?php echo $data['id_berita']; ?>" class="btn waves-effect waves-light" id="btnEdit"><i class="material-icons">mode_edit</i></a>
        <a href="?tampil=berita_hapus&id=<?php echo $data['id_berita']; ?>" class="btn waves-effect waves-light" id="btnHapus"><i class="material-icons">delete_forever</i></a>
      </td>
    </tr>
    <?php
    $no++;
    }
    ?>
  </tbody>

</table>
