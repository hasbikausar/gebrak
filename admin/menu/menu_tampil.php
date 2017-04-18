<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");
?>

<h3>Daftar Menu</h3>
<hr><br>
<a href="?tampil=menu_tambah" class="btn waves-effect waves-light" id="btn"><i class="material-icons right">add</i>Tambah Menu</a><br><br>
<p>
<table class="highlight responsive-table">
  <thead>
    <tr>
      <th class="center-align">No</th>
      <th class="center-align">Judul Menu</th>
      <th class="center-align">Link</th>
      <th class="center-align">Urutan</th>
      <th class="center-align">Aksi</th>
    </tr>
  </thead>

<?php
// Load file koneksi.php
include '../lib/koneksi.php';

$no = 1;
$sql  = $db_link->query("SELECT * FROM menu ORDER by urutan")
or die($db_link->error);
while ($data = $sql->fetch_array()) {
?>

  <tbody>
    <tr>
      <td class="center-align"><?php echo $no; ?></td>
      <td class="center-align"><?php echo $data['judul']; ?></td>
      <td class="center-align"><?php echo $data['link']; ?></td>
      <td class="center-align"><?php echo $data['urutan']; ?></td>
      <td class="center-align">
        <a href="?tampil=menu_edit&id=<?php echo $data['id_menu']; ?>" class="btn waves-effect waves-light" id="btnEdit"><i class="material-icons">mode_edit</i></a>
        <a href="?tampil=menu_hapus&id=<?php echo $data['id_menu']; ?>" class="btn waves-effect waves-light" id="btnHapus"><i class="material-icons">delete_forever</i></a>
      </td>
    </tr>
  </tbody>

<?php
$no++;
}
?>
</table>
