<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Tes Arkademy</title>
</head>

<body>
  <nav class="navbar navbar-light bg-light" style="border-bottom: 3px solid black;">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="<?= base_url("/arkademy.png") ?>" alt="Logo Arkademy" width="120px">
      </a>
    </div>
  </nav>

  <main class="my-4">
    <div class="container">
      <!-- Selesai Peninjauan -->
      <?php if (session()->get('success')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->get('success') ?>
        </div>
      <?php endif; ?>

      <?php if (session()->get('error')) : ?>
        <div class="alert alert-danger" role="alert">
          <?= session()->get('error') ?>
        </div>
      <?php endif; ?>
      <div class="card">
        <div class="card-body">
          <a href="<?= base_url('/add') ?>" class="btn btn-primary mb-3">Tambah Produk</a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Produk</th>
                  <th class="d-none d-lg-table-cell">Keterangan</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($produk as $item) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $item['nama_produk'] ?></td>
                    <td class="d-none d-lg-table-cell"><?= $item['keterangan'] ?></td>
                    <td>Rp. <?= $item['harga'] ?></td>
                    <td><?= $item['jumlah'] ?></td>
                    <td>
                      <a href="<?= base_url("/edit") ?>/<?= $item['id'] ?>" class="btn btn-success btn-sm m-1">Edit</a>
                      <a onclick="return confirm('Apakah anda yakin akan menghapus produk tersebut?')" href="<?= base_url("/delete") ?>/<?= $item['id'] ?>" class="btn btn-danger btn-sm m-1">Hapus</a>
                    </td>
                  </tr>
                <?php $no++;
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>