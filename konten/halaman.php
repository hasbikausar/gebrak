<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=index.php'>");

  $artikel  = $db_link->query("SELECT * FROM halaman WHERE id_halaman='$_GET[id]'")
  or die($db_link->error);
  $data     = $artikel->fetch_array();
  $isi      = $data['isi'];
?>

  <h5 id="border-judul"><a href="?tampil=halaman&id=<?php echo $data['id_halaman']; ?>"><?php echo $data['judul'];?></a></h5>
  <p>
    <?php echo $isi; ?>
  </p>
