<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");
?>

<h3>Data Artikel</h3>
<hr><br>
<a href="?tampil=artikel_tambah" class="btn waves-effect waves-light" id="btn"><i class="material-icons right">add</i>Tambah Artikel</a><br><br>
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
    $sql  = $db_link->query("SELECT * FROM artikel ORDER by id_artikel DESC")
    or die($db_link->error);
    while ($data = $sql->fetch_array()) {
      $tanggal  = tgl_indonesia($data['tanggal']);
    ?>
    <tr>
      <td class="center-align"><?php echo $no; ?></td>
      <td class="center-align"><?php echo $data['judul']; ?></td>
      <td class="center-align"><?php echo $tanggal; ?></td>
      <td class="center-align">
        <a href="?tampil=artikel_edit&id=<?php echo $data['id_artikel']; ?>" class="btn waves-effect waves-light" id="btnEdit"><i class="material-icons">mode_edit</i></a>
        <a href="?tampil=artikel_hapus&id=<?php echo $data['id_artikel']; ?>" class="btn waves-effect waves-light" id="btnHapus"><i class="material-icons">clear</i></a>
      </td>
    </tr>
    <?php
    $no++;
    }
    ?>
  </tbody>

</table>
