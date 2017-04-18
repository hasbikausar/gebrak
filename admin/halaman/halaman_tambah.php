<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");
?>

<h2>Tambah Halaman</h2>
<hr><br>

<div class="row">
  <form class="col s12" name="tambah" method="post" action="?tampil=halaman_tambahproses">
    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="judul">
        <label>Judul</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="textarea1" class="materialize-textarea" name="isi"></textarea>
        <label for="textarea1">Isi</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <button class="btn waves-effect waves-light" type="submit" id="btn" name="tambah" value="Tambah">Tambah <i class="material-icons right">send</i></button>
        <button class="btn waves-effect waves-light" type="reset" id="btn" name="reset" value="Reset">Reset <i class="material-icons right">autorenew</i></button>
      </div>
    </div>
  </form>
</div>
