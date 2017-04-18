<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $tampil = $db_link->query("SELECT * FROM halaman WHERE id_halaman='$_GET[id]'")
  or die($db_link->error);
  $data = $tampil->fetch_array();
?>

<h2>Edit Halaman</h2>
<hr><br>

<div class="row">
  <form class="col s12" name="edit" method="post" action="?tampil=halaman_editproses">
    <div class="row">
      <div class="input-field col s12">
        <input type="hidden" class="validate" name="id" value="<?php echo $data['id_halaman'];?>">
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="judul" value="<?php echo $data['judul']; ?>">
        <label>Judul</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="textarea1" class="materialize-textarea" name="isi"><?php echo $data['isi']; ?></textarea>
        <label for="textarea1">Isi</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <button class="btn waves-effect waves-light" type="submit" id="btn" name="edit" value="Edit">Edit <i class="material-icons right">send</i></button>
      </div>
    </div>
  </form>
</div>
