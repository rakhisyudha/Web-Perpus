<?php
include "koneksi.php";
?>
<?php
if (isset($_POST['submit'])) {
    mysqli_query($con, "insert into tb_pinjam values('','$_POST[nama]','$_POST[nama_buku]','$_POST[tgl_pinjam]','$_POST[tgl_kembali]','$_POST[durasi]')");
    echo "<script>alert('Data Tersimpan')</script>";
    echo "<script>document.location.href='?rpinjam';</script>";
}
?>

<div class="content-inner w-100">
    <!-- Page Header-->
    <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">Transaksi Peminjaman</h2>
        </div>
    </header>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-close">
                    <div class="dropdown">
                        <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                    </div>
                </div>
                <h5 class="h5 mb-0">TRANSAKSI PEMINJAMAN</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama</label>
                        <?php
                        $sql = mysqli_query($con, "select * from tb_pengunjung order by nama asc;"); ?>
                        <select name="nama" id="nama">
                            <option>Pilih Nama Peminjam</option>
                            <?php
                            if (mysqli_num_rows($sql) > 0) { ?>
                                <?php while ($row = mysqli_fetch_array($sql)) { ?>
                                    <option><?= $row['nama'] ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama_buku">Judul Buku</label>
                        <?php
                        $sql = mysqli_query($con, "select * from tb_buku order by nama_buku asc;"); ?>
                        <select name="nama_buku" id="nama_buku">
                            <option>Pilih Judul Buku</option>
                            <?php
                            if (mysqli_num_rows($sql) > 0) { ?>
                                <?php while ($row = mysqli_fetch_array($sql)) { ?>
                                    <option><?= $row['nama_buku'] ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tgl_pinjam">Tanggal Pinjam</label>
                        <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" value="<?= @$_POST['tgl_pinjam'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="tgl_kembali">Tanggal Kembali</label>
                        <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control" value="<?= @$_POST['tgl_kembali'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="duras">Durasi</label>
                        <input type="text" id="durasi" name="durasi" class="form-control" value="<?= @$_POST['durasi'] ?>">
                    </div>
                    <input type="submit" name="submit" value="simpan" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>