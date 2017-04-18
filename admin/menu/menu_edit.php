<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $sql = $db_link->query("SELECT * FROM menu WHERE id_menu='$_GET[id]'")
  or die($db_link->error);
  $data = $sql->fetch_array();
?>

<h3>Edit Menu</h3>

<div class="row">
  <form class="col s12" name="edit" method="post" action="?tampil=menu_editproses">
    <div class="row">
      <div class="input-field col s12">
        <input type="hidden" class="validate" name="id" value="<?php echo $data['id_menu'];?>">
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="text" class="validate" name="judul" value="<?php echo $data['judul'];?>">
        <label>Judul Menu</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="text" class="validate" name="link" value="<?php echo $data['link'];?>">
        <label>Link</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="text" class="validate" name="urutan" value="<?php echo $data['urutan'];?>">
        <label>Urutan</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <button class="btn waves-effect waves-light" type="submit" id="btn" name="edit" value="Edit">Edit <i class="material-icons right">send</i></button>
        <button class="btn waves-effect waves-light" id="btn" name="kembali" value="Batal" onclick="history.back();">Batal <i class="material-icons right">undo</i></button>
      </div>
    </div>
  </form>
</div>
