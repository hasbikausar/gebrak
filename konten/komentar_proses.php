<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=index.php'>");

  $tgl  = date('Ymd');
  $db_link->query("INSERT INTO komentar SET id_berita='$_POST[id]', nama='$_POST[nama]', email='$_POST[email]', komentar='$_POST[komentar]', tanggal='$tgl'")
  or die($db_link->error);
  echo "Komentar telah terkirim";
  echo "<meta http-equiv='refresh' content='1; url=?tampil=posts&id=$_POST[id]'";
?>
