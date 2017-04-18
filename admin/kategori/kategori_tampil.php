<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");
?>

<h3>Daftar Kategori</h3>
<hr><br>
<a href="?tampil=kategori_tambah" class="btn waves-effect waves-light" id="btn"><i class="material-icons right">add</i>Tambah Kategori</a><br><br>
<p>
<table class="responsive-table bordered highlight">
  <thead>
    <tr>
      <th class="center-align">No</th>
      <th class="center-align">Nama Kategori</th>
      <th class="center-align">Link</th>
      <th class="center-align">Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php
    // Load file koneksi.php
    include '../lib/koneksi.php';
    include '../lib/fungsi_tglindonesia.php';

    $no = 1;
    $sql  = $db_link->query("SELECT * FROM kategori ORDER by id_kategori ASC")
    or die($db_link->error);
    while ($data = $sql->fetch_array()) {
    ?>
    <tr>
      <td class="center-align"><?php echo $no; ?></td>
      <td class="center-align"><?php echo $data['nama_kategori']; ?></td>
      <td class="center-align">?tampil=kategori&id=<?php echo $data['id_kategori']; ?></td>
      <td class="center-align">
        <a href="?tampil=kategori_edit&id=<?php echo $data['id_kategori']; ?>" class="btn waves-effect waves-light" id="btnEdit"><i class="material-icons">mode_edit</i></a>
        <a href="?tampil=kategori_hapus&id=<?php echo $data['id_kategori']; ?>" class="btn waves-effect waves-light" id="btnHapus"><i class="material-icons">delete_forever</i></a>
      </td>
    </tr>
    <?php
    $no++;
    }
    ?>
  </tbody>

</table>
