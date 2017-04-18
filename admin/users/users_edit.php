<?php
  if (!defined("INDEX")) die("<meta http-equiv='refresh' content='1; url=../index.php'>");

  include '../lib/koneksi.php';

  $tampil = $db_link->query("SELECT * FROM user WHERE id_user='$_GET[id]'")
  or die($db_link->error);
  $data = $tampil->fetch_array();
?>

<h3>Edit User</h3>
<hr><br>

<div class="row">
  <form class="col s12" name="edit" method="post" action="?tampil=users_editproses">
    <div class="row">
      <div class="input-field col s12">
        <input type="hidden" class="validate" name="id" value="<?php echo $data['id_user'];?>">
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="username" value="<?php echo $data['username']; ?>">
        <label>Username</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input type="password" name="password" value="<?php echo $data['password']; ?>">
        <label>Password</label>
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
