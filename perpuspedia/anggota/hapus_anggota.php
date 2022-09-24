<?php
include '../main/functions.php';
$id_anggota = $_GET['id_anggota'];

if(isset($id_anggota)){

    if(hapusAnggota($id_anggota) > 0){
        echo "<script>
        alert('Data Berhasil Dihapus!')
        document.location.href = 'index.php'
        </script>";
    }else{
        echo "Data Gagal Dihapus!" . mysqli_error($konek);
    }
}else{
    header("Location: index.php");
}