<?php
$halaman = "Barang";
session_start();
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';


include_once '../controllers/C_barang.php';

$barang = new C_barang();
?>

<!--Begin Page Content -->
<div class="container-fluid">

<!--Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4>DataTables is a third party plugin that is used to generate the demo table below_
    for more information about DataTables,please visit the <a target="_blank"
      </p>
      
      <a href="tambah_barang.php" class="d-none d-sm-inine-block btn btn-primary
      shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data </a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Table Peminjaman</h6>

        <div class="card-body">
            <div class="table-responsive">
                <div class="datatables_lrngth" id="dataTable_length">

                        <div class="col-sm-12bcol-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                

                              
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                <table class="table table-berderes" id="dataTable" width="1001" collspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama_Petugas</td>
                            <td>Nis</td>
                            <td>Judul_Buku</td>
                            <td>Tanggal_Peminjaman</td>
                            <td>Tanggal_Pengembalian</td>
                        </tr>
                    </thead>
                    <tbody
                    
                    
                    <?php
                    if (empty($barang->tampil())) { ?>
                        <tr>
                            <td colspan="6">
                                <h1>
                                    <center>Tidak Ada Data</center>
                                </h1>
                            </td>
                        </tr>
                        <?php
                    } else {}
                    $nomor = 1;
                    foreach($barang->tampil() as $b){

                    
                
                ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $b->nama_petugas ?></td>
                    <td><?= $b->nis ?></td>
                    <td><?= $b->judul_buku ?></td>
                    <td><?= $b->tanggal_peminjaman ?></td>
                    <td><?= $b->tanggal_pengembalian ?></td>
                    <td>
                   
                    </td>
                    </tr>
                <?php
                
                
            } ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
<!--/.container-fluid-->

    <?php
    include_once 'template/footer.php';
    ?>

    