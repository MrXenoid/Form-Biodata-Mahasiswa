<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tampilan Biodata</title>
    <style>
        body {
            background: url("https://i.ytimg.com/vi/szGWR5ErgYo/maxresdefault.jpg");
            background-size: cover;
            color: white;
        }
        input {
            color: white;
        }
    </style>
</head>
<body>
  <center>
<div class="card text-bg-primary mb-3" style="max-width: 35rem;">
    <div class="container p-4">
    <h2>Data Mahasiswa</h2><hr>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Nomor Induk Mahasiswa</label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext text-white" value=": <?php echo $nim; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Nama</label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext text-white" value=": <?php echo $nama; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext text-white" value=": <?php echo $email; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Nomor HP</label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext text-white" value=": <?php echo $nohp; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext text-white" value=": <?php echo $tgl_lahir; ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
    <div class="col-sm-9">
      <input type="text" readonly class="form-control-plaintext text-white" value=": <?php echo $alamat; ?>">
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>