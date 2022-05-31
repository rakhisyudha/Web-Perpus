<?php
include "koneksi.php";
if (isset($_GET['edit'])) {
    $ed = mysqli_query($con, "select * from tb_buku where id_buku='$_GET[id]'");
    $edit = mysqli_fetch_array($ed);
}

// kode update data
if (isset($_POST['update'])) {
    mysqli_query($con, "update tb_buku set nama_buku='$_POST[nama_buku]',penerbit='$_POST[penerbit]', pengarang='$_POST[pengarang]', jenis='$_POST[jenis]', no_rak='$_POST[no_rak]' where id_buku='$_GET[id]'");
    echo "<script>alert('Data Terubah')</script>";
    echo "<script>document.location.href='?buku';</script>";
}
if (isset($_GET['ebuku'])) {
    $sql = mysqli_query($con, "select * from tb_buku where id_buku='$_GET[id]'");
    $data = mysqli_fetch_array($sql);
}
?>
<div class="content-inner w-100">
    <!-- Page Header-->
    <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">Edit Data Buku</h2>
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
                <h5 class="h5 mb-0">EDIT DATA BUKU</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label" for="nama_buku">Judul Buku</label>
                        <input type="text" id="nama_buku" name="nama_buku" class="form-control" value="<?= @$data['nama_buku'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="penerbit">Penerbit</label>
                        <input type="text" id="penerbit" name="penerbit" class="form-control" value="<?= @$data['penerbit'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="pengarang">Pengarang</label>
                        <input type="text" id="pengarang" name="pengarang" class="form-control" value="<?= @$data['pengarang'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jenis">Jenis/Kategori</label>
                        <input type="text" id="jenis" name="jenis" class="form-control" value="<?= @$data['no_rak'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="no_rak">No Rak</label>
                        <input type="text" id="no_rak" name="no_rak" class="form-control" value="<?= @$data['no_rak'] ?>">
                    </div>
                    <input type="submit" name="update" value="update" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>