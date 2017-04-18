<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=index.php'>");

  $pages   =  isset($_GET['pages'])?$_GET['pages']:1;
  $batas   =  5;
  $posisi  =  ($pages-1) * $batas;

  $berita = $db_link->query("SELECT * FROM berita WHERE id_kategori='$_GET[id]' ORDER by id_berita DESC LIMIT $posisi, $batas")
  or die($db_link->error);
  while ($data = $berita->fetch_array()) {
    $isi  = substr($data['isi'],0,300);
    $isi  = substr($data['isi'],0,strrpos($isi," "));
?>
  <div class="artikel">
  <h5 class="border-judul"><a href="?tampil=posts&id=<?php echo $data['id_berita']; ?>" class="border-judul"><?php echo $data['judul'];?></a></h5>
  <p>
    <?php if ($data['gambar'] != " ");?>
    <center><img src="img/berita/<?php echo $data['gambar']; ?>" class="responsive-img" width="500" id="gambar-artikel"></center>
    <p>
    <?php echo $isi; ?> ...
    <a href="?tampil=posts&id=<?php echo $data['id_berita']; ?>">See more</a>
  </p>
  </div>
<?php
  }
  $semua    = $db_link->query("SELECT * FROM berita");
  $jmldata  = mysqli_num_rows($semua);
  $jmlpages = ceil($jmldata/$batas);
  $previous = $pages - 1;
  $next     = $pages + 1;

  echo "<center>";
  echo "<ul class='pagination'>";
  if($pages > 1){
    echo "<a  href='?tampil=kategori&id=$_GET[id]&pages=1' class='tooltipped' data-position='top' data-delay='50' data-tooltip='First'> <i class='material-icons'>first_page</i> </a>";
    echo "<a href='?tampil=kategori&id=$_GET[id]&pages=$previous' class='tooltipped' data-position='top' data-delay='50' data-tooltip='Previous'> <i class='material-icons'>chevron_left</i> </a>";
  }else{
    echo " <i class='material-icons'>first_page</i> ";
    echo " <i class='material-icons'>chevron_left</i> ";
  }

  for($i=1; $i<=$jmlpages; $i++){
		if($i == $pages) {
    echo "<li> $i </li>";
  }else echo "<a href='?tampil=kategori&id=$_GET[id]&pages=$i'> <li>$i</li> </a>";
	}

  if($pages < $jmlpages){
    echo "<a href='?tampil=kategori&id=$_GET[id]&pages=$next' class='tooltipped' data-position='top' data-delay='50' data-tooltip='Next'> <i class='material-icons'>chevron_right</i> </a>";
    echo "<a href='?tampil=kategori&id=$_GET[id]&pages=$jmlpages' class='tooltipped' data-position='top' data-delay='50' data-tooltip='Last'> <i class='material-icons'>last_page</i> </a>";
  }else{
    echo " <i class='material-icons'>chevron_right</i> ";
    echo " <i class='material-icons'>last_page</i> ";
  }
  echo "</u>";
  echo "</center>";

?>
