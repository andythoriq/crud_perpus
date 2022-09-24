<?php
include '../main/functions.php';
$no_buku = $_GET['no_buku'];

if(isset($no_buku)){
    if(hapusBuku($no_buku) > 0){
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