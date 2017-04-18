<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=index.php'>");

  $db_link->query("UPDATE berita SET hits=hits+1 WHERE id_berita='$_GET[id]'")
  or die($db_link->error);

  $artikel  = $db_link->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'")
  or die($db_link->error);
  $data     = $artikel->fetch_array();
  $isi      = $data['isi'];
?>

  <h5 class="border-judul"><a href="?tampil=posts&id=<?php echo $data['id_berita']; ?>" class="border-judul"><?php echo $data['judul'];?></a></h5>
  <p>
  <?php if ($data['gambar'] != " ");?>
  <center><img src="img/berita/<?php echo $data['gambar']; ?>" class="responsive-img" width="500" id="gambar-artikel"></center>
  <p>
  <?php echo $isi; ?>
  </p>
<br>
<hr>
<br>
  <!-- bagian 1 -->
<?php
  $komentar     = $db_link->query("SELECT * FROM komentar WHERE id_berita='$_GET[id]'")
  or die($db_link->error);
  $jmlkomentar  = mysqli_num_rows($komentar) ;
?>
  <h5><?php echo "$jmlkomentar"; ?> Komentar</b>
<br>
<?php
  while ($datakomen = $komentar->fetch_array()) {
?>
<br>
  <h6><?php echo "$datakomen[nama]"; ?> - <?php echo "$datakomen[tanggal]"; ?></h6>
  <p>
    <?php echo "$datakomen[komentar]"; ?>
  </p>
<?php
 echo "<br>";
  }
?>
<br>
<!-- bagian 2 -->
<h5>Isi Komentar</h5>
<form action="?tampil=komentar_proses" method="post">
  <input type="hidden" name="id" value="<?php echo $data['id_berita']; ?>">
    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="nama">
        <label>Nama</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="email">
        <label>Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="textarea1" class="materialize-textarea" name="komentar"></textarea>
        <label for="textarea1">Komentar</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <button id="btn" class="btn waves-effect waves-light" type="submit" name="tambah">Kirim Komentar <i class="material-icons right">send</i></button>
      </div>
    </div>
</form>
<script type="text/javascript">
  $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });
</script>
