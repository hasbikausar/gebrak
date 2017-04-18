<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=index.php'>");

  $pages   =  isset($_GET['pages'])?$_GET['pages']:1;
  $batas   =  5;
  $posisi  =  ($pages-1) * $batas;

  $artikel = $db_link->query("SELECT * FROM berita WHERE judul LIKE '%$_POST[kata]%' ORDER by id_berita DESC LIMIT $posisi, $batas")
  or die($db_link->error);
  $jmldata = mysqli_num_rows($artikel);
  if ($jmldata > 0) {
    echo "Hasil pencarian dari <b>$_POST[kata]</b>";
  while ($data = $artikel->fetch_array()) {
    $isi  = substr($data['isi'],0,300);
    $isi  = substr($data['isi'],0,strrpos($isi," "));
?>
  <h5 class="border-judul"><a href="?tampil=posts&id=<?php echo $data['id_berita']; ?>" class="border-judul"><?php echo $data['judul'];?></a></h5>
  <p>
    <?php if ($data['gambar'] != " ");?>
    <center><img src="img/berita/<?php echo $data['gambar']; ?>" class="responsive-img" width="500" id="gambar-artikel"></center>
    <p>
    <?php echo $isi; ?> ...
    <a href="?tampil=posts&id=<?php echo $data['id_berita']; ?>">See more</a>
  </p>
<?php
  }

  //$semua    = $db_link->query("SELECT * FROM artikel");
  //$jmldata  = mysqli_num_rows($semua);
  //$jmlpages = ceil($jmldata/$batas);
  //$previous = $pages - 1;
  //$next     = $pages + 1;

  //echo "<center>";
  //echo "<ul class='pagination'>";
  //if($pages > 1){
	//	echo "<a  href='?tampil=home&pages=1'> <i class='material-icons'>first_page</i> </a>";
	//	echo "<a href='?tampil=home&pages=$previous'> <i class='material-icons'>chevron_left</i> </a>";
	//}else{
	//	echo " <i class='material-icons'>first_page</i> ";
	//	echo " <i class='material-icons'>chevron_left</i> ";
	//}

	//for($i=1; $i<=$jmlpages; $i++){
	//	if($i == $pages) {
  //  echo " <li>$i</li> ";
  //}else echo "<a href='?tampil=home&pages=$i'> <li>$i</li> </a>";
	//}

	//if($pages < $jmlpages){
	//	echo "<a href='?tampil=home&pages=$next'> <i class='material-icons'>chevron_right</i> </a>";
	//	echo "<a href='?tampil=home&pages=$jmlpages'> <i class='material-icons'>last_page</i> </a>";
	//}else{
	//	echo " <i class='material-icons'>chevron_right</i> ";
	//	echo " <i class='material-icons'>last_page</i> ";
	//}

  }else {
    echo "Kata yang dicari tidak ada";
  }
  echo "</u>";
  echo "</center>";
?>
