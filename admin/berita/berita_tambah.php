<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");
?>

<h3>Tambah Berita</h3>
<hr><br>

<div class="row">
  <form class="col s12" name="tambah" method="post" action="?tampil=berita_tambahproses" enctype="multipart/form-data">
    <div class="row">
      <div class="input-field col s12">
        <select class="" name="kategori">
          <?php
            $sql  =   $db_link->query("SELECT * FROM kategori ORDER by id_kategori")
            or die($db_link->error);
              echo "<option disabled selected>Pilih Kategori</option>";
            while($data = $sql->fetch_array()) {
              echo "<option value='".$data['id_kategori']."'>".$data['nama_kategori']."</option>";
            }
          ?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="judul">
        <label>Judul</label>
      </div>
    </div>
    <div class="row">
      <div class="file-field input-field">
      <div class="btn" id="upload">
        <span>File</span>
        <input type="file" name="gambar">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
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
        <button class="btn waves-effect waves-light" id="btn" name="kembali" value="Batal" onclick="history.back();">Batal <i class="material-icons right">undo</i></button>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });
</script>
