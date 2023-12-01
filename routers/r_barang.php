<?php

//untuk memanggil file C_barang
include_once '../controllers/C_barang.php';

//membuat variabel yang bertipe data objek dari kelas C_barang
$barang = new C_barang();

if ($_GET['aksi'] == 'tambah') {

    $id_petugas = $_POST['id_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $nis = $_POST['nis'];
    $judul_buku = $_POST['judul_buku'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];

    //memanggil method atau function tambah
    $barang->tambah($id_petugas = 0, $nama_petugas, $nis, $judul_buku, $tanggal_peminjaman, $tanggal_pengembalian);

} elseif ($_GET['aksi'] == 'hapus') {
    $id_petugas = $_GET ['id_petugas'];
    $barang->delete($id_petugas);

    
}

?>