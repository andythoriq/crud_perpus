<?php
// koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "perpustrq");
if(!$konek){echo "gagal konek";};

// fungsi query
function query($query){
    global $konek;
    $result = mysqli_query($konek, $query);
    $dataData = [];
    while($data = mysqli_fetch_assoc($result)){
        $dataData[] = $data;
    }
    return $dataData;
}

//tambah anggota
function tambahAnggota($post){
    global $konek;

    $nama = htmlspecialchars($post['nama']);
    $alamat = htmlspecialchars($post['alamat']);
    $kota = htmlspecialchars($post['kota']);
    $no_telp = htmlspecialchars($post['no_telp']);
    $tgl_lahir = htmlspecialchars($post['tgl_lahir']);

    mysqli_query($konek, "INSERT INTO `anggota` (`id_anggota`, `nama`, `alamat`, `kota`, `no_telp`, `tgl_lahir`) VALUES (NULL, '$nama', '$alamat', '$kota', '$no_telp', '$tgl_lahir')");
    return mysqli_affected_rows($konek);
}

// hapus anggota
function hapusAnggota($id_anggota){
    global $konek;
    mysqli_query($konek,"DELETE FROM anggota WHERE `anggota`.`id_anggota` = $id_anggota");
    return mysqli_affected_rows($konek);
}

// edit anggota
function editAnggota($post, $id_anggota){
    global $konek;

    $nama = htmlspecialchars($post['nama']);
    $alamat = htmlspecialchars($post['alamat']);
    $kota = htmlspecialchars($post['kota']);
    $no_telp = htmlspecialchars($post['no_telp']);
    $tgl_lahir = htmlspecialchars($post['tgl_lahir']);

    mysqli_query($konek, "UPDATE `anggota` SET `nama` = '$nama', `alamat` = '$alamat', `kota` = '$kota', `no_telp` = '$no_telp', `tgl_lahir` = '$tgl_lahir' WHERE `anggota`.`id_anggota` = $id_anggota");

    return mysqli_affected_rows($konek);
}

// 
//     
// 
//
//
//

// tamhah buku
function tambahBuku($post){
    global $konek;

    $judul = htmlspecialchars($post['judul']);
    $pengarang = htmlspecialchars($post['pengarang']);
    $thn_terbit = htmlspecialchars($post['thn_terbit']);
    $jenis_buku = htmlspecialchars($post['jenis_buku']);
    $status_buku = htmlspecialchars($post['status_buku']);

    mysqli_query($konek, "INSERT INTO `buku` (`no_buku`, `judul`, `pengarang`, `thn_terbit`, `jenis_buku`, `status_buku`) VALUES (NULL, '$judul', '$pengarang', '$thn_terbit', '$jenis_buku', '$status_buku')");

    return mysqli_affected_rows($konek);
}

// hapus buku
function hapusBuku($no_buku){
    global $konek;

    mysqli_query($konek, "DELETE FROM buku WHERE `buku`.`no_buku` = $no_buku");

    return mysqli_affected_rows($konek);
}

// edit buku
function editBuku($post, $no_buku){
    global $konek;

    $judul = htmlspecialchars($post['judul']);
    $pengarang = htmlspecialchars($post['pengarang']);
    $thn_terbit = htmlspecialchars($post['thn_terbit']);
    $jenis_buku = htmlspecialchars($post['jenis_buku']);
    $status_buku = htmlspecialchars($post['status_buku']);

    mysqli_query($konek, "UPDATE `buku` SET `judul` = '$judul', `pengarang` = '$pengarang', `thn_terbit` = '$thn_terbit', `jenis_buku` = '$jenis_buku', `status_buku` = '$status_buku' WHERE `buku`.`no_buku` = $no_buku");
    return mysqli_affected_rows($konek);
}
//
//
//
//
//
//
//

// tambah pinjam
function tambahPinjam($post, $lm_pinjam){
    global $konek;

    $id_anggota = htmlspecialchars($post['idAnggota']);
    $no_buku = htmlspecialchars($post['noBuku']);
    $tgl_pinjam = date('Y-m-d');
    $tgl_kembali = date('Y-m-d', strtotime($tgl_pinjam. " + $lm_pinjam days"));

    mysqli_query($konek, "INSERT INTO `pinjam` (`no_pinjam`, `id_anggota`, `no_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES (NULL, '$id_anggota', '$no_buku', '$tgl_pinjam', '$tgl_kembali')");
    return mysqli_affected_rows($konek);
}

// hapus pinjam
function hapusPinjam($no_pinjam){
    global $konek;
    mysqli_query($konek, "DELETE FROM pinjam WHERE `pinjam`.`no_pinjam` = $no_pinjam");
    return mysqli_affected_rows($konek);
}

// edit pinjam
function editPinjam($post, $no_pinjam){
    //$lm_pinjam, , $tgl_pinjam
    global $konek;

    $id_anggota = htmlspecialchars($post['idAnggota']);
    $no_buku = htmlspecialchars($post['noBuku']);
    // $h = date('Y-m-d', strtotime($tgl_pinjam));
    // $r = date('Y-m-d');
    // // $tgl_kembali = date('Y-m-d', strtotime($h. " + $lm_pinjam days"));
    // $tgl_kembali = date('Y-m-d', strtotime($r. " + $lm_pinjam days"));
    // `tgl_kembali` = '$tgl_kembali'

    mysqli_query($konek, "UPDATE `pinjam` SET `id_anggota` = '$id_anggota', `no_buku` = '$no_buku' WHERE `pinjam`.`no_pinjam` = $no_pinjam");

    return mysqli_affected_rows($konek);
}