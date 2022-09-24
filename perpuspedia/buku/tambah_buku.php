<!DOCTYPE html>
<?php
    include '../main/functions.php';
    if (isset($_POST['simpan'])){
        if(tambahBuku($_POST) > 0){
            echo "<script>
            alert('Data Berhasil Ditambah!')
            document.location.href = 'index.php'
            </script>";
        }else {
            echo "Gagal Menambah Data Baru " . mysqli_error($konek);
        }
    }
?>
<html lang="en">
<head>
    <title>Halaman Tambah Data Buku</title>
</head>
<body>
<a href="index.php"><button type="button" class="btn btn-dark ms-2 mt-2">Kembali</button></a>
    <h1 class="display-4 text-center">Formulir Tambah Data Buku <i class="fa-solid fa-book"></i></h1>
    <div class="container-sm mb-5 position-absolute top-50 start-50 translate-middle">
        <form method="POST" action="">
            <div class="row">
                <div class="col">
                    <span>Judul :</span>
                    <input type="text" name="judul" class="form-control" placeholder="Cth : Sikap Untuk Bersikap Bodo Amat" required>
                </div>
                <div class="col">
                    <span>Pengarang :</span>
                    <input type="text" name="pengarang" class="form-control" placeholder="Cth : Ahmad Habibi" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <span>Tahun Terbit :</span>
                    <input type="number" name="thn_terbit" min="1" max="2099" class="form-control" step="1" placeholder="Cth : 2004" required>
                </div>
                <div class="col">
                    <span>Jenis Buku :</span>
                    <div class="form-floating">
                        <select name="jenis_buku" class="form-select" id="jenis_buku" required>
                            <option value="">- Pilih Jenis Buku -</option>
                            <option value="Fiksi">Fiksi</option>
                            <option value="Nonfiksi">Nonfiksi</option>
                        </select>
                        <label for="jenis_buku">fiksi / nonfiksi</label>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <span>Status Buku :</span>
                    <div class="form-floating">
                        <select name="status_buku" class="form-select" id="status" required>
                            <option value="">- Status Buku -</option>
                            <option value="Ada">Ada</option>
                            <option value="Dipinjam">Dipinjam</option>
                            <option value="Kembali">Kembali</option>
                        </select>
                        <label for="status">ada, dipinjam, kembali</label>
                    </div>
                </div>
                <div class="col">
                    <br>
                    <button class="btn btn-outline-dark" name="simpan" type="submit">Tambah Data</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="../script/boilerplate.js"></script>
<script ript src="../script/date.js"></script>
<script src="https://kit.fontawesome.com/68243230bc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>