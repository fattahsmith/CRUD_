<?php
require 'init.php';

$user = new User();
$user->cekUserSession();

if(empty(Input::get('id_barang'))) {
  die ('Maaf halaman ini tidak bisa diakses langsung');
}
$barang = new Barang();
$barang->generate(Input::get('id_barang'));

if (!empty($_POST)) {
  $pesanError = $barang->validasi($_POST);
  if (empty($pesanError)) {
    $barang->update($barang->getItem('id_barang'));
    header('Location:tampil_barang.php');
  }
}

// include head
include 'template/header.php';
?>

<!doctype html>

  <div class="container">
    <div class="row">
      <div class="col-6 py-4">
      <h1 class="h2 mr-auto"><a class="text-info" href="edit_barang.php">
        Edit Barang</a></h1>

      <?php
        if (!empty($pesanError)):
      ?>

      <div id="divPesanError">
        <div class="mx-auto">
          <div class="alert alert-danger" role="alert">
            <ul class="mb-0">
            <?php
             foreach ($pesanError as $pesan) {
               echo "<li>$pesan</li>";
             }
            ?>
            </ul>
          </div>
        </div>
      </div>

      <?php
        endif;
      ?>

      <form method="post">

        <div class="form-group">
          <label for="nama_barang">ID Barang</label>
          <input type="text" class="form-control" name="nama_barang" disabled
          value="<?php echo $barang->getItem('id_barang'); ?>">
          <small class="d-block">*ID Barang tidak bisa diubah</small>
        </div>

        <div class="form-group">
          <label for="nama_barang">Nama Barang</label>
          <input type="text" class="form-control" name="nama_barang"
          value="<?php echo $barang->getItem('nama_barang'); ?>">
        </div>

        <div class="form-group">
          <label for="jumlah_barang">Jumlah</label>
          <input type="text" class="form-control" name="jumlah_barang"
          value="<?php echo $barang->getItem('jumlah_barang'); ?>">
        </div>

        <div class="form-group">
          <label for="harga_barang">Harga</label>
          <input type="text" class="form-control" name="harga_barang"
          value="<?php echo $barang->getItem('harga_barang'); ?>">
        </div>

        <input type="submit" class="btn btn-primary" value="Update">
        <a href="tampil_barang.php" class="btn btn-secondary">Cancel</a>

      </form>

      </div>
    </div>
  </div>

<?php
// include footer
include 'template/footer.php';
?>
