<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Tes Arkademy - Add</title>
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
      <a href="/" class="btn btn-danger mb-3">
        Kembali</a>
      <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
          <h1 class="card-title fs-2">Tambah Produk</h1>
          <hr>
          <form action="<?= base_url('/insert') ?>" method="post">
            <div class="mb-3">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="keterangan">Keterangan</label>
              <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
              <label for="harga">Harga</label>
              <input type="number" name="harga" id="harga" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="jumlah">Jumlah</label>
              <input type="number" name="jumlah" id="jumlah" class="form-control" required>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </main>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>