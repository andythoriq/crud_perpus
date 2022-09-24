<?php
include '../main/functions.php';

$no_pinjam = $_GET['no_pinjam'];

if(isset($no_pinjam)){
    if(hapusPinjam($no_pinjam) > 0){
        echo"
        <script>
            alert('Data Berhasil Dihapus!')
            document.location.href = 'index.php'
        </script>
        ";
    } else{
        echo"
        Data Gagal Dihapus " . mysqli_error($konek);
    }
}else {
    header("Location: index.php");
}