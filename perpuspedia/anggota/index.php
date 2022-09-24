<!DOCTYPE html>
<?php
include '../main/functions.php';
$dataData = query("SELECT * FROM anggota");

?>
<html lang="en">
<head>
  <title>Halaman Anggota</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light sticky-top ">
  <div class="container-fluid">
    <span class="navbar-brand"><i class="fa-sharp fa-solid fa-book"></i> perpuspedia</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../main/main.php"><i class="fa-solid fa-house"></i> home</a>
        <a class="nav-link" href=""><i class="fa-solid fa-user"></i> Anggota</a>
        <a class="nav-link" href="../buku/index.php"><i class="fa-solid fa-book-open"></i> Buku</a>
        <a class="nav-link" href="../pinjam/index.php"><i class="fa-solid fa-handshake"></i> Pinjam</a>
      </div>
    </div>
  </div>
</nav>
<h1 class="display-4 text-center mt-2">Halaman Data Anggota <i class="fa-solid fa-users"></i></h1>
<div class="container-sm">
<a href="tambah_anggota.php"><button type="button" class="btn btn-outline-dark mb-5 mt-5"><i class="fa-solid fa-plus"></i> Tambah Data Anggota</button></a>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
          <tr class="table-dark">
              <td>No</td>
              <td>Nama</td>
              <td>Alamat</td>
              <td>Kota</td>
              <td>Nomor Telephone</td>
              <td>Tanggal Lahir</td>

              <td>Aksi(Hapus/Edit)</td>
          </tr>

          <?php 
              $no = 1;
              foreach($dataData as $anggota):
          ?>
          <tr>
              <td><?= $no++; ?></td>

              <td><?= $anggota['nama']; ?></td>
              <td><?= $anggota['alamat']; ?></td>
              <td><?= $anggota['kota']; ?></td>
              <td><?= $anggota['no_telp']; ?></td>
              <td><?= $anggota['tgl_lahir']; ?></td>

              <td>
                <a href="hapus_anggota.php?id_anggota=<?= $anggota['id_anggota']; ?>">
                <button class="btn btn-outline-danger" onclick="return confirm('YAKIN INIGN MENGHAPUS?')">Hapus</button></a>
                <a href="edit_anggota.php?id_anggota=<?= $anggota['id_anggota']; ?>">
                <button class="btn btn-outline-dark">Edit</button></a>
              </td>
          </tr>
          <?php endforeach; ?>
      </table>
    </div>
</div>
    <div class="card text-center sticky-bottom">
        <div class="card-header"><br></div>
        <div class="card-body">
            <h5 class="card-title">perpuspedia</h5>
            <p class="card-text">copy right &copy; <span id="tahun"></span></p>
        </div>
        <div class="card-footer text-muted"><br></div>
    </div>
</body>
<script src="../script/boilerplate.js"></script>
<script src="../script/date.js"></script>
<script src="https://kit.fontawesome.com/68243230bc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>