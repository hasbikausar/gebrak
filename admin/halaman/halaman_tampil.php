<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");
?>

<h3>Data Halaman</h3>
<hr><br>
<a href="?tampil=halaman_tambah" class="btn waves-effect waves-light" id="btn"><i class="material-icons right">add</i>Tambah Halaman</a><br><br>
<p>
  <table class="highlight responsive-table">
    <thead>
      <tr>
        <th class="center-align">No</th>
        <th class="center-align">Judul Halaman</th>
        <th class="center-align">Link Halaman</th>
        <th class="center-align">Aksi</th>
      </tr>
    </thead>

  <tbody>
    <?php
    // Load file koneksi.php
    include '../lib/koneksi.php';

    $no = 1;
    $sql  = $db_link->query("SELECT * FROM halaman")
    or die($db_link->error);
    while ($data = $sql->fetch_array()) {
    ?>
    <tr>
      <td class="center-align"><?php echo $no; ?></td>
      <td class="center-align"><?php echo $data['judul']; ?></td>
      <td class="center-align">?tampil=halaman&id=<?php echo $data['id_halaman']; ?></td>
      <td class="center-align">
        <a href="?tampil=halaman_edit&id=<?php echo $data['id_halaman']; ?>" class="btn waves-effect waves-light" id="btnEdit"><i class="material-icons">mode_edit</i></a>
        <a href="?tampil=halaman_hapus&id=<?php echo $data['id_halaman']; ?>" class="btn waves-effect waves-light" id="btnHapus"><i class="material-icons">clear</i></a>
      </td>
    </tr>
    <?php
    $no++;
    }
    ?>
  </tbody>

</table>
