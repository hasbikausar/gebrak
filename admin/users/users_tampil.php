<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");
?>

<h3>Daftar Users</h3>
<hr><br>
<a href="?tampil=users_tambah" class="btn waves-effect waves-light" id="btn"><i class="material-icons right">add</i>Tambah User</a><br><br>
<p>
<table class="responsive-table bordered highlight">
  <thead>
    <tr>
      <th class="center-align">ID</th>
      <th class="center-align">Username</th>
      <th class="center-align">Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php
    // Load file koneksi.php
    include '../lib/koneksi.php';

    $no = 1;
    $sql  = $db_link->query("SELECT * FROM user ORDER by id_user ASC")
    or die($db_link->error);
    while ($data = $sql->fetch_array()) {
    ?>
    <tr>
      <td class="center-align"><?php echo $no; ?></td>
      <td class="center-align"><?php echo $data['username']; ?></td>
      <td class="center-align">
        <a href="?tampil=users_edit&id=<?php echo $data['id_user']; ?>" class="btn waves-effect waves-light" id="btnEdit"><i class="material-icons">mode_edit</i></a>
        <a href="?tampil=users_hapus&id=<?php echo $data['id_user']; ?>" class="btn waves-effect waves-light" id="btnHapus"><i class="material-icons">delete_forever</i></a>
      </td>
    </tr>
    <?php
    $no++;
    }
    ?>
  </tbody>

</table>
