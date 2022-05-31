<?php
include "koneksi.php";
if (isset($_GET['hapus'])) {
    mysqli_query($con, "delete from tb_pengunjung where id_pengunjung='$_GET[id]'");
    echo "<script>alert('Data Terhapus')</script>";
    echo "<script>document.location.href='?pengunjung';</script>";
}
?>
<div class="col-lg-12">
    <div class="card mb-0">
        <div class="card-header">
            <div class="card-close">
                <div class="dropdown">
                    <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                    <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                </div>
            </div>

            <h3 class="h4 mb-0">Data Pengunjung</h3>
            <br><a href="dashboard.php?apengunjung"><button class="btn btn-primary" type="button"> Tambah Data Pengunjung </button></a>


            <form method="post">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pengunjung</th>
                                    <th>No Hp</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = mysqli_query($con, "select * from tb_pengunjung order by nama asc");
                                $no = 0;
                                while ($data = mysqli_fetch_array($sql)) {
                                    $no++;
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no ?></th>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['no_hp'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td>
                                            <a href="dashboard.php?epengunjung&id=<?= $data['id_pengunjung'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="?pengunjung&hapus&id=<?= $data['id_pengunjung'] ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>