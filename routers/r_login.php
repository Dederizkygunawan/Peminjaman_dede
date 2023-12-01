<?php
include_once '../controllers/C_login.php';

$login = new C_login();


    if ($_GET['aksi'] == 'register') {
        
        $id_petugas = $_POST['id_petugas'];
        $nis = $_POST['nis'];
        $judul_buku = $_POST['judul_buku'];
        $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
        // merubah password sihingga tidak bisa dibaca 
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $role = $_POST['role'];

            //memanggil method register
            $login->register($id=0, $nis, $nama, $email, $pass, $role);

    }elseif ($_GET['aksi'] == 'login') {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        //memanggil method login
        $login->login($email, $pass);
    } elseif ($_GET['aksi'] == 'logout'){
        $login->Logout();
        
    }

    
?>