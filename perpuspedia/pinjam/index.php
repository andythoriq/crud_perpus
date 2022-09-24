<!DOCTYPE html>
<?php
include '../main/functions.php';

$dataData = query("SELECT * FROM pinjam");

?>
<html lang="en">
<head>
  <title>Halaman Pinjam</title>
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
        <a class="nav-link" href="../anggota/"><i class="fa-solid fa-user"></i> Anggota</a>
        <a class="nav-link" href="../buku/"><i class="fa-solid fa-book-open"></i> Buku</a>
        <a class="nav-link" href=""><i class="fa-solid fa-handshake"></i> Pinjam</a>
      </div>
    </div>
  </div>
</nav>


<h1 class="display-4 text-center mt-2">Halaman Data Pinjam <i class="fa-solid fa-hand-holding-hand"></i></h1>
<div class="container-sm">
<a href="tambah_pinjam.php"><button type="button" class="btn btn-outline-dark mb-5 mt-5"><i class="fa-solid fa-plus"></i> Pinjam Buku</button></a>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
          <tr class="table-dark">
              <td>No</td>

              <td>Id Anggota</td>
              <td>Nomor Buku</td>

              <td>Tanggal Pinjam</td>
              <td>Tanggal Kembali</td>

              <td>Aksi(Hapus/Edit)</td>
          </tr>

          <?php 
              $no = 1;
              foreach($dataData as $pinjam):
          ?>
          <tr>
              <td><?= $no++; ?></td>

              <td><?= $pinjam['id_anggota']; ?></td>
              <td><?= $pinjam['no_buku']; ?></td>

              <td><?= $pinjam['tgl_pinjam']; ?></td>
              <td><?= $pinjam['tgl_kembali']; ?></td>

              <td>
                <a href="hapus_pinjam.php?no_pinjam=<?= $pinjam['no_pinjam']; ?>">
                <button class="btn btn-outline-danger" onclick="return confirm('YAKIN INIGN MENGHAPUS?')">Hapus</button></a>
                <a href="edit_pinjam.php?no_pinjam=<?= $pinjam['no_pinjam']; ?>&tgl_pinjam=<?= $pinjam['tgl_pinjam'];?>">
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