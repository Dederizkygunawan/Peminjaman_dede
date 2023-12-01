<?php

include_once 'C_koneksi.php';

    class C_barang{
        //variabel lokal
        //public $id;
        public function tampil(){
                $conn = new C_koneksi();

                $sql = "SELECT * FROM tb_petugas ORDER BY id_petugas DESC";

                $query = mysqli_query($conn->conn(), $sql);

                while ($q = mysqli_fetch_object($query)) {

                    $hasil[] = $q;
                }
            if (!empty($hasil)){
                return $hasil;
            }

        }


            public function tambah($id_petugas,$nama_petugas, $nis, $judul_buku, $tanggal_peminjaman, $tanggal_pengembalian){
                $conn =new C_koneksi();

                    $sql = "INSERT INTO tb_petugas VALUES('$id_petugas', '$nama_petugas','$nis','$judul_buku','$tanggal_peminjaman','$tanggal_pengembalian')";

                    $query = mysqli_query($conn->conn(), $sql);
                    
                    if ($query) {
                      echo "data barang berhasil ditambahkan";  
                    }else{
                        echo "data barang gagal ditambahkan";
                    }
                            }
            
            public function edit($id_petugas){
                $conn = new C_koneksi();

                $sql = "SELECT * FROM tb_petugas WHERE id_petugas = '$id_petugas'";
                //var_dump($sql);
                $query = mysqli_query($conn->conn(), $sql);
                if ($query && mysqli_num_rows($query) > 0){
                    $hasil = array();
                    while ($q = mysqli_fetch_object($query)){
                        $hasil[] = $q;
                    }
                    return $hasil;
                } else {
                    return null;
                }

            }
    
            public function update($id_petugas, $nama_petugas, $nis, $judul_buku, $tanggal_peminjaman, $tanggal_pengembalian){
                $conn = new C_koneksi();
                        $sql = "UPDATE tb_petugas SET nama_petugas = '$nama_petugas' , nis=' $nis', judul_buku='$judul_buku', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian' WHERE id_petugas ='$id_petugas'";
                        $query = mysqli_query($conn->conn(), $sql);

                        if ($query) {
                            echo "data berhasil diubah";
                        }else{
                            echo "data tidak berhasil diubah";
                            
                    }
              }
            public function delete($id_petugas){
                $conn = new C_koneksi();
                        $sql = "DELETE FROM tb_petugas WHERE id_petugas='$id_petugas'";
                        mysqli_query($conn->conn(), $sql);


                        header("Location:../views/v_barang_user.php");
                    } 
                }

                    ?>