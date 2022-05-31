<?php
include "koneksi.php";
?>
<?php
if (isset($_POST['submit'])) {
    mysqli_query($con, "insert into tb_buku values('','$_POST[nama_buku]','$_POST[penerbit]','$_POST[pengarang]','$_POST[jenis]','$_POST[no_rak]')");
    echo "<script>alert('Data Tersimpan')</script>";
    echo "<script>document.location.href='?buku';</script>";
}
?>

<div class="content-inner w-100">
    <!-- Page Header-->
    <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">Tambah Data Buku</h2>
        </div>
    </header>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-close">
                    <div class="dropdown">
                        <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3" href="dashboard.php?buku"> <i class="fas fa-times"></i>Kembali</a></div>
                    </div>
                </div>
                <h5 class="h5 mb-0">TAMBAH DATA BUKU</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label" for="nama_buku">Judul Buku</label>
                        <input type="text" id="nama_buku" name="nama_buku" class="form-control" value="<?= @$_POST['nama_buku'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="penerbit">Penerbit</label>
                        <input type="text" id="penerbit" name="penerbit" class="form-control" value="<?= @$_POST['penerbit'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="pengarang">Pengarang</label>
                        <input type="text" id="pengarang" name="pengarang" class="form-control" value="<?= @$_POST['pengarang'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jenis">Jenis/Kategori</label>
                        <input type="text" id="jenis" name="jenis" class="form-control" value="<?= @$_POST['no_rak'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="no_rak">No Rak</label>
                        <input type="text" id="no_rak" name="no_rak" class="form-control" value="<?= @$_POST['no_rak'] ?>">
                    </div>
                    <input type="submit" name="submit" value="simpan" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>