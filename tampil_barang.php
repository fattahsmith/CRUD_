<?php
require 'init.php';

$user = new User();
$user->cekUserSession();

$DB = DB::getInstance();

$searchTerm = Input::get('search'); // Store search term for display

if (!empty($_GET) && !empty($searchTerm)) { // Check if search term is not empty
  $tabelBarang = $DB->getLike('barang', 'nama_barang', '%' . $searchTerm . "%");
} else {
  $tabelBarang = $DB->get('barang');
}

// include head
include 'template/header.php';
?>

<div class="container mt-4">
  <div class="row">
    <div class="col-12">

      <div class="py-4 d-flex justify-content-between align-items-center">
        <div>
          <h1 class="h2">
            <a class="text-dark" href="tampil_barang.php">Tabel Barang</a>
          </h1>
          <form class="form-inline mt-2" method="get">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari Barang..." name="search" value="<?php echo $searchTerm; ?>">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
              </div>
            </div>
          </form>
        </div>
        <a href="tambah_barang.php" class="btn btn-primary">Tambah Barang</a>
      </div>

      <?php if (!empty($tabelBarang)) : ?>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr class="table-dark">
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga (Rp.)</th>
                <th>Tanggal Update</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tabelBarang as $barang) : ?>
                <tr>
                  <td><?= $barang->id_barang ?></td>
                  <td><?= $barang->nama_barang ?></td>
                  <td><?= $barang->jumlah_barang ?></td>
                  <td class="text-right"><?= number_format($barang->harga_barang, 0, ',', '.') ?></td>
                  <td><?php $tanggal = new DateTime($barang->tanggal_update);
                      echo $tanggal->format("d-m-Y H:i"); ?></td>
                  <td>
                    <a href="edit_barang.php?id_barang=<?= $barang->id_barang ?>" class="btn btn-info btn-sm">Edit</a> <a href="hapus_barang.php?id_barang=<?= $barang->id_barang ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php else : ?>
        <p class="text-center">Tidak ada data barang yang ditemukan.</p> <?php endif; ?>

    </div>
  </div>
</div>

<?php
// include footer
include 'template/footer.php';
?>