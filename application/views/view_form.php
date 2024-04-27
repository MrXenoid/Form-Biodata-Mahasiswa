<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Biodata</title>
    <style>
body {
            background: url("https://img.freepik.com/free-photo/sunset-silhouettes-trees-mountains-generative-ai_169016-29371.jpg?t=st=1713869659~exp=1713873259~hmac=b729f48751331006d8cf22eb1d7e366aaa3cd79052f1f4da60f9d5c6fbdd5f45&w=1060");
            background-size: cover;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="card mt-5 p-4 shadow">
    <div class="card text-bg-success mb-3" style="max-width: 35rem, position: relative;">
  <div class="card-body">
    <div class="container p-4">
        <h2>Form Biodata Mahasiswa</h2><hr>
        <form action="tampil" class="row g-3" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nomor induk Mahasiswa :</label>
    <input type="number" class="form-control" id="nim" name="nim" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nama :</label>
    <input type="text" class="form-control" id="nama" name="nama" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Nomor HP</label>
    <input type="number" class="form-control" id="nohp" name="nohp" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Email :</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Tanggal Lahir :</label>
    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Alamat</label>
    <textarea class="form-control" id="alamat" name="alamat" required></textarea>
  </div>
  <div class="col-12">
  <input type="submit" value="Kirim" class="btn btn-warning"> 
  <input type="reset" value="Batal" class="btn btn-danger">
  </div>
</form>
  </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>