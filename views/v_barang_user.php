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
<h1 class="h3 mb-2 text-gray-800">Table Peminjaman Buku</h1>
</div>
    <!--/.card-header-->
        <div class="card-body">
            <div class="table-responsive">
            <div>
                <a href ="tambah_barang.php" class="btn btn-primary">
                    <i class="fa fa-edit"></i>Tambah Data</a>
            </div>
                <br>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Petugas</th>
                                    <th>Nis</th>
                                    <th>Judul Buku</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                       
                </br>
                <?php
                    $no = 1;
                    foreach ($barang->tampil() as $b) {
                        # code...
                    
                    
                        ?>
                        <tr>
                            <td>
                                <?php echo $no++; ?>
                            </td>
                            <td>
                                <?php echo $b->nama_petugas; ?>
                            </td>
                            <td>
                                <?php echo $b->nis; ?>
                            </td>

                            <td>
                                <?php echo $b->judul_buku; ?>
                            </td>
                            
                            <td>
                                <?php echo $b->tanggal_peminjaman; ?>
                            </td>
                            <td>
                                <?php echo $b->tanggal_pengembalian; ?>
                            </td>
                            <td>
                                <!-- <a href="?page=view-siswa&kode=<?php echo $b->nis; ?>" title="Detail"
                                class="btn btn-info btn-sm">
                                <i class="btn btn-info btn-sm"></i>
                            </a> -->
                         <center>
                            <a href="edit_barang.php?id=<?= $b->id_petugas ?>"><button
                            type="button" class="btn btn-round btn-primary">Edit</button></a>
                           
                            <a onlick="return confirm('apakah yakin data akan di hapus')"
                            href="../routers/r_barang.php?id_petugas=<?= $b->id_petugas ?>&aksi=hapus"><button
                            type="button" name="hapus" class="btn btn-round btn-danger">Hapus</button></a></td>
                    </center>
                            </td>
                        </tr>
                        <?php
                    } 
                        ?>
                        </tbody>
                    </tfoot>
                    </table>
                    </div>
                </div>

 <?php
 include_once 'template/footer.php';
 ?>       
                    
                


                              
                         