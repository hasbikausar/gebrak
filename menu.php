<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=index.php'>");
?>

  <?php
    $menu = $db_link->query("SELECT * FROM menu ORDER by urutan");
    while ($data = $menu->fetch_array()) {
  ?>

  <li><a href="<?php echo $data['link'];?>" class="red-text"><?php echo $data['judul'];?></a></li>

  <?php
    }
  ?>
