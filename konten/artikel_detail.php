<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=index.php'>");

  $db_link->query("UPDATE artikel SET hits=hits+1 WHERE id_artikel='$_GET[id]'")
  or die($db_link->error);

  $artikel  = $db_link->query("SELECT * FROM artikel WHERE id_artikel='$_GET[id]'")
  or die($db_link->error);
  $data     = $artikel->fetch_array();
  $isi      = $data['isi'];
?>

  <h5 class="border-judul"><a href="?tampil=artikel_detail&id=<?php echo $data['id_artikel']; ?>" class="border-judul"><?php echo $data['judul'];?></a></h5>
  <p>
  <?php if ($data['gambar'] != " ");?>
  <center><img src="img/artikel/<?php echo $data['gambar']; ?>" class="responsive-img" id="gambar-artikel"></center>
  <p>
  <?php echo $isi; ?>
  </p>
