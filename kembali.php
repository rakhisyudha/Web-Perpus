<?php
include "koneksi.php";
if (isset($_GET['hapus'])) {
    mysqli_query($con, "delete from tb_pinjam where id_pinjam='$_GET[id]'");
    echo "<script>alert('Data Terbaharui')</script>";
    echo "<script>document.location.href='?rpinjam';</script>";
}
?>
<div class="col-lg-12">
    <div class="card mb-0">
        <div class="card-header">

            <h3 class="h4 mb-0">Data Pengembalian</h3>
            <form method="post">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Judul Buku</th>
                                    <th>Tgl Pinjam</th>
                                    <th>Tgl Kembali</th>

                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = mysqli_query($con, "select * from tb_pinjam order by nama asc");
                                $no = 0;
                                while ($data = mysqli_fetch_array($sql)) {
                                    $no++;
                                ?>
                                    <tr>
                                        <th scope="row"><?= $no ?></th>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['nama_buku'] ?></td>
                                        <td><?= $data['tgl_pinjam'] ?></td>
                                        <td><?= $data['tgl_kembali'] ?></td>

                                        <td>
                                            <a href="?kembali&hapus&id=<?= $data['id_pinjam'] ?>" class="btn btn-primary">Kembalikan</a>
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