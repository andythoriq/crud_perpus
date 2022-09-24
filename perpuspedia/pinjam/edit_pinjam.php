<!DOCTYPE html>
<?php
include '../main/functions.php';
$no_pinjam = $_GET['no_pinjam'];
$tgl_pinjam = $_GET['tgl_pinjam'];
$pinjam = query("SELECT * FROM pinjam WHERE no_pinjam = $no_pinjam")[0];
$dataDataAnggota = query("SELECT * FROM anggota");
$dataDataBuku = query("SELECT * FROM buku");

if (isset($_POST['simpan'])){
    // $lm_pinjam, , $tgl_pinjam
    if(editPinjam($_POST, $no_pinjam) > 0){
        echo "<script>
        alert('Data Berhasil Diedit!')
        document.location.href = 'index.php'
        </script>";
    }else {
        echo "Data Gagal Diedit " . mysqli_error($konek);
    }
}
?>
<html lang="en">
<head>
    <title>Halaman Edit Data Pinjam</title>
</head>
<body>
    <a href="index.php"><button type="button" class="btn btn-dark ms-2 mt-2">Kembali</button></a>
    <h1 class="display-4 text-center">Formulir Edit Data Pinjam <i class="fa-solid fa-handshake"></i></h1>
    <h1 class="display-6 text-center"> Anggota Dengan Id <b><?= $pinjam['id_anggota'];?></b> Meminjam Buku Dengan Nomor <b><?= $pinjam['no_buku'];?></b></h1>
    <div class="container-sm mb-5 position-absolute top-50 start-50 translate-middle">
        <form method="POST" action="">
            <div class="row">
                <span class="ms-3">Id Anggota :</span>
                <div class="form-floating">
                    <select name="idAnggota" class="form-select" id="idAnggota" required>
                        <option value="">- Pilih Id Anggota -</option>
                        <?php foreach($dataDataAnggota as $anggota):?>
                        <option value="<?= $anggota['id_anggota'];?>"><?=$anggota['id_anggota'];?>. <?=  $anggota['nama']; ?></option>
                        <?php endforeach;?>
                    </select>
                    <label class="ms-3" for="idAnggota">terdapat nama anggota</label>
                </div>
            </div>
            <br>
            <div class="row">
                <span class="ms-3">Nomor Buku :</span>
                    <div class="form-floating">
                        <select name="noBuku" class="form-select" id="noBuku" required>
                            <option value="">- Pilih Nomor Buku -</option>
                            <?php foreach($dataDataBuku as $buku):?>
                            <option value="<?= $buku['no_buku'];?>"><?= $buku['no_buku'];?>. <?= $buku['judul'];?></option>
                            <?php endforeach;?>
                        </select>
                        <label class="ms-3" for="noBuku">terdapat judul buku</label>
                    </div>
            </div>
            <br>
            <div class="row">
                <!-- <div class="col">
                    <input type="number" name="lm_pinjam" min="1" max="30" class="form-control" step="1" placeholder="tentukan berapa hari meminjam buku" required>
                </div> -->
                <div class="col">
                    <button class="btn btn-outline-dark" name="simpan" type="submit">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="../script/boilerplate.js"></script>
<script src="../script/date.js"></script>
<script src="https://kit.fontawesome.com/68243230bc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>