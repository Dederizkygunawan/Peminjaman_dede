<?php

// nama kelas harus sama dengan nama file 
// class dalam pbo adalah blueprint atau prototipe dari seebuah objek
class C_koneksi{

    // ini adalah fungsi atau method yang kita beri nama conn yang dimana fungsi ini akan terkoneksi kedatabase project_xiirpl2
    public function conn(){
        $conn = mysqli_connect('localhost', 'root', '', 'peminjaman_buku');

        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }else{
            return $conn;
            // echo "koneksi berhasil";
        }
    }
}
// instansiasi objek atau membuat objek
// $conn tipe object  
// $conn = new C_koneksi();
// cara memanggil fungsi atau method  yang ada didalam class 
// $conn->conn();



?>