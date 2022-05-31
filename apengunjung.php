<?php
include "koneksi.php";
?>
<?php
if (isset($_POST['submit'])) {
    mysqli_query($con, "insert into tb_pengunjung values('','$_POST[nama]','$_POST[no_hp]','$_POST[alamat]')");
    echo "<script>alert('Data Tersimpan')</script>";
    echo "<script>document.location.href='?pengunjung';</script>";
}
?>

<div class="content-inner w-100">
    <!-- Page Header-->
    <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">Tambah Data Pengunjung</h2>
        </div>
    </header>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-close">
                    <div class="dropdown">
                        <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3" href="dashboard.php?pengunjung"> <i class="fas fa-times"></i>Kembali</a></div>
                    </div>
                </div>
                <h5 class="h5 mb-0">TAMBAH DATA PENGUNJUNG</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama Pengunjung</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= @$_POST['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="no_hp">No HP</label>
                        <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= @$_POST['no_hp'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" value="<?= @$_POST['alamat'] ?>" cols="20" rows="10" class="form-control"></textarea>
                    </div>
                    <input type="submit" name="submit" value="simpan" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>