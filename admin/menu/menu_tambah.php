<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");
?>

<h3>Tambah Menu</h3>
<hr><br>

<div class="row">
  <form class="col s12" name="tambah" method="post" action="?tampil=menu_tambahproses">
    <div class="row">
      <div class="input-field col s12">
        <input type="text" class="validate" name="judul">
        <label>Judul Menu</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="text" class="validate" name="link">
        <label>Link</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="text" class="validate" name="urutan">
        <label>Urutan</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <button class="btn waves-effect waves-light" type="submit" id="btn" name="tambah" value="Tambah">Tambah <i class="material-icons right">send</i></button>
        <button class="btn waves-effect waves-light" type="reset" id="btn" name="reset" value="Reset">Reset <i class="material-icons right">autorenew</i></button>
        <button class="btn waves-effect waves-light" id="btn" name="kembali" value="Batal" onclick="history.back();">Batal <i class="material-icons right">undo</i></button>
      </div>
    </div>
  </form>
</div>
