<?php
    include '../main/functions.php';
    $id_anggota = $_GET['id_anggota'];
    $anggota = query("SELECT * FROM anggota WHERE id_anggota = $id_anggota")[0];

    if(isset($_POST['simpan'])){
        if(editAnggota($_POST, $id_anggota) > 0){
            echo"
            <script>
            alert('Data Berhasil Diedit')
            document.location.href = 'index.php'
            </script>
            ";
        }else{
            echo "Data Gagal Diedit " . mysqli_error($konek);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Edit Data Anggota</title>
</head>
<body>
<a href="index.php"><button type="button" class="btn btn-dark ms-2 mt-2">Kembali</button></a>
    <h1 class="display-4 text-center">Formulir Edit Data Anggota <i class="fa-solid fa-user"></i></h1>
    <h1 class="display-6 text-center"><?= $anggota['nama'];?></h1>
    <div class="container-sm mb-5 position-absolute top-50 start-50 translate-middle">
        <form method="POST" action="">
            <div class="row">
                <div class="col">
                    <span>Nama :</span>
                    <input type="text" name="nama" value="<?= $anggota['nama'];?>" class="form-control" placeholder="Cth : FirstName LastName" required>
                </div>
                <div class="col">
                    <span>Alamat :</span>
                    <input type="text" name="alamat" value="<?= $anggota['alamat'];?>" class="form-control" placeholder="Cth : Jl. Rambutan No. 39" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <span>Kota :</span>
                    <input type="text" name="kota" value="<?= $anggota['kota'];?>" class="form-control" placeholder="Cth : Makasar" required>
                </div>
                <div class="col">
                    <span>Nomor Telephone :</span>
                    <input type="number" name="no_telp" value="<?= $anggota['no_telp'];?>" class="form-control" placeholder="Cth : 087812448989" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <span>Tanggal Lahir :</span>
                    <input type="date" name="tgl_lahir" value="<?= $anggota['tgl_lahir'];?>" class="form-control" required>
                </div>
                <div class="col">
                    <br>
                    <button class="btn btn-outline-dark" name="simpan" type="submit">Simpan Perubahan</button>
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
