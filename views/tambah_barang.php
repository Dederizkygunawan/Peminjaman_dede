<?php
$halaman = "barang";
session_start();
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';


include_once '../controllers/C_barang.php';

$barang = new C_barang();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<!-- <h1 class="h3 mb2-2 text-gray-000"><?= $halaman ?>< -->

<!-- DataTables example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">From Data Peminjaman</h6>
    </div>
    <div class="card body">
        <div class="table-responsive">

        <!-- start isi dari konten card -->

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form action="../routers/r_barang.php?aksi=tambah" method="POST" class="user" enctype="multipart/form-data">

                <div class="form-group">
                    <input type="number" class="form-control form-control-user" id="exampleInputEmail" placeholder="id_petugas" name="id_petugas" hidden>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama_petugas" name="nama_petugas"
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="nis" name="nis">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="judul_buku" name="judul_buku">
                </div>

                <div class="form-group">
                    <input type="date" class="form-control form-control-user" id="exampleInputEmail" placeholder="tanggal_peminjaman" name="tanggal_peminjaman">
                </div>

                <div class="form-group">
                    <input type="date" class="form-control form-control-user" id="exampleInputEmail" placeholder="tanggal_pengembalian" name="tanggal_pengembalian">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah Data" id="exampleInputEmail" name="login">
                </div>
            </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
     </div>
        </div>
            </div>
            </div>
         </div>

        <?php
        include_once 'template/footer.php';
        ?>
        </div>
    </div>

</body>
</html>