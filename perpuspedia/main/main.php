<!DOCTYPE html>
<?php
include '../main/functions.php';


?>
<html lang="en">
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid">
        <span class="navbar-brand"><i class="fa-sharp fa-solid fa-book"></i> perpuspedia</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href=""><i class="fa-solid fa-house"></i> home</a>
            <a class="nav-link" href="../anggota/"><i class="fa-solid fa-user"></i> Anggota</a>
            <a class="nav-link" href="../buku/"><i class="fa-solid fa-book-open"></i> Buku</a>
            <a class="nav-link" href="../pinjam/"><i class="fa-solid fa-handshake"></i> Pinjam</a>
        </div>
        </div>
    </div>
    </nav>
    <div class="card">
        <img src="../img/bg2.webp" class="card-img-top" alt="gambar-buku" height="500">
        <div class="card-body container text-center">
            <h5 class="card-title">- perpuspedia by Andy Thoriq -</h5>
            <p class="card-text">Kelas 11 RPL 2. Tugas pwpb, praktik CRUD perpustakaan dengan tiga entitas yaitu anggota, buku, dan pinjam. Dengan bantuan Bootstrap, web menjadi responsive. Tidak lupa dengan icon yang didapat dari Fontawesome.</p>
            <div class="row mt-4 mb-4">
                <div class="col">
                <a href="../anggota/" class="btn btn-dark">Ke Halaman Anggota <i class="fa-solid fa-user"></i></a>
                </div>
                <div class="col">
                <a href="../buku/" class="btn btn-dark">Ke Halaman Buku <i class="fa-solid fa-book-open"></i></a>
                </div>
                <div class="col">
                <a href="../pinjam/" class="btn btn-dark">Ke Halaman Pinjam <i class="fa-solid fa-handshake"></i></a>
                </div>
            </div>
            <hr>
            <p class="card-text"><small class="text-muted">copy right &copy; <span id="tahun"></span> perpuspedia</small></p>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-header"><br></div>
        <div class="card-body">
            <h5 class="card-title">Teknologi atau bahasa pemrograman yang digunakan...</h5>
            <h1 class="card-text"><i class="fa-brands fa-php"></i> <i class="fa-brands fa-html5"></i> <i class="fa-brands fa-square-js"></i> <i class="fa-brands fa-bootstrap"></i> <i class="fa-brands fa-font-awesome"></i> <i class="fa-solid fa-database"></i></h1><h5>DLL.</h5>
            <p class="card-text"></p>
        </div>
        <div class="card-footer text-muted"><br></div>
    </div>
</body>
<script src="../script/boilerplate.js"></script>
<script src="../script/date.js"></script>
<script src="https://kit.fontawesome.com/68243230bc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>