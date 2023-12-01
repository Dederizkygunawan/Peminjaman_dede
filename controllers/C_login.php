<?php
session_start();
include_once 'C_koneksi.php';
// buatk file di folder controller, nama filenya C_login.php 
// didalam file tersebut memiliki 2 fungsi atau method 
// 1. register 
// 2. login

// ini adalah kelas login  
class C_login{

    // untuk windows, MCOS, ubuntu
    // ini adalah fungsi atau method untuk memasukan data ke dalam tabel users 
    function register($id=0, $nis, $nama,$email,$pass, $role){
    
    // instansiasi object atau membuat object dari class C_koneksi 
    $conn = new C_koneksi();

    // ini adalah perintah untuk memasukan data kedalam tabel user 
    $sql = "INSERT INTO user VALUES ('$id' $nis','$nama','$email','$pass')";
//     var_dump($sql);
    //ini exsekutornya
   $query =  mysqli_query($conn->conn(), $sql);

   if ($query) {
        echo "data tidak gagal ditambahkan";
   }else{
        echo "data gagal ditambahkan";
   }

}

    // untuk OS windows 
    // function register($id, $nama,$email,$pass, $role){

    // }

    // ini fungsi untuk menangani login untuk user 
    function login($email=null, $pass=null){

        // ini membuat sebuah variabel yang bertipe data objek dari kelas koneksi 
        $conn = new C_koneksi();

        //untuk mengecek tombol login sudah di tekan / di klik oleh user
        if (isset($_POST['login'])) {
            
            // perintah untuk mengambil semua data dari tabel user berdasarkan email yang di inputkan oleh user 
            $sql = "SELECT * from user WHERE email = '$email'";

            //exsekutor perintah diatas
            $query = mysqli_query($conn->conn(), $sql);  

            // assoc = array asosiatif -> key / index nya berupa string/huruf.
            $data = mysqli_fetch_assoc($query);

            //array biasa -> key / index nya berupa angka, dimulai dari 0 - tak terhingga 
            // $data2 = mysqli_fetch_array($query);

            // untuk mengecek apakah ada data dari hasil $query 
            if ($data) {
                  
                // ini menggunakan array biasa 
                // password_verify($pass, $data['3']


                //menggunkan array asosiatif
                //untuk membandingkan inputan password dari user dengan password dari tabel user 
                if (password_verify($pass, $data['password'])) {

                    //untuk role pengguna sebagai admin
                    if ($data['role'] == 'admin') {
                        
                        // membuat variabel session yang nantinya akan digunkan pada halaman home admin/ login sebagai admin 
                        $_SESSION["data"] = $data;
                        $_SESSION["role"] = $data["role"];

                        // jika login berhasil dan rolenya sebagai admin maka akan berpindah kehalaman home 
                        header("Location: ../views/home_user.php");
                        exit;


                    //untuk role pengguna sebagai admin
                    }elseif ($data['role'] == 'user') {
                        // membuat variabel session yang nantinya akan digunkan pada halaman home user/ login sebagai user 
                        $_SESSION["data"] = $data;
                        $_SESSION["role"] = $data["role"];

                        // jika login berhasil dan rolenya sebagai user maka akan berpindah kehalaman home 
                        header("Location: ../views/home.php");
                        exit;
                    
                    //untuk role pengguna bukan sebagai admin dan user
                    }else {
                        echo "tolong cek username dan password";
                    }

                    //jika kondisi tidak terpenuhi pada pengecek password
                }else{
                    echo "tolong cek username dan password";
                }
            }
            
        }
    }
    
        public function logout(){
            //menghentikan session
            // session_destory();

            session_destroy();
            header("Location:../index.php");
            exit;
        }
    }


?>