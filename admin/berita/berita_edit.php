<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $tampil = $db_link->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'")
  or die($db_link->error);
  $data = $tampil->fetch_array();

  //$sql  =   $db_link->query("SELECT * FROM kategori ORDER by id_kategori")
  //or die($db_link->error);
  //while($kategori = $sql->fetch_array()) {
?>

<h3>Edit Berita</h3>
<hr><br>

<div class="row">
  <form class="col s12" name="edit" method="post" action="?tampil=berita_editproses" enctype="multipart/form-data">
    <div class="row">
      <div class="input-field col s12">
        <input type="hidden" class="validate" name="id" value="<?php echo $data['id_berita'];?>">
      </div>
    </div>
    <!--<div class="row">
      <div class="input-field col s12">
        <select class="" name="kategori">
          <?php
              //$selected = ($hasil['id_kategori']==$id_kategori)?"selected" :"";
              //echo "<option value='".$kategori['id_kategori']."'>".$kategori['nama_kategori']."</option>";
            //}
          ?>
        </select>
      </div>
    </div>-->
    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="judul" value="<?php echo $data['judul']; ?>">
        <label>Judul</label>
      </div>
    </div>
    <div class="row">
      <div class="file-field input-field">
      <div class="btn" id="upload">
        <span>File</span>
        <input type="file" name="gambar" multiple>
      </div>
      <div class="file-path-wrapper">
        <img src="../img/berita/<?php echo $data['gambar']; ?>" width="100"/><br>
        <input class="file-path validate" type="text">
      </div>
      </div>
      <input type="checkbox" name="ubah_foto" value="true" id="test5" />
      <label for="test5">Ceklis jika ingin mengubah gambar.</label>
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
