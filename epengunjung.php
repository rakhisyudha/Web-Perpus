<?php
include "koneksi.php";
if (isset($_GET['edit'])) {
    $ed = mysqli_query($con, "select * from tb_pengunjung where id_pengunjung='$_GET[id]'");
    $edit = mysqli_fetch_array($ed);
}

// kode update data
if (isset($_POST['update'])) {
    mysqli_query($con, "update tb_pengunjung set nama='$_POST[nama]',no_hp='$_POST[no_hp]', alamat='$_POST[alamat]' where id_pengunjung='$_GET[id]'");
    echo "<script>alert('Data Terubah')</script>";
    echo "<script>document.location.href='?pengunjung';</script>";
}
if (isset($_GET['epengunjung'])) {
    $sql = mysqli_query($con, "select * from tb_pengunjung where id_pengunjung='$_GET[id]'");
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
                        <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3" href="dashboard.php?pengunjung"> <i class="fas fa-times"></i>Kembali</a></div>
                    </div>
                </div>
                <h5 class="h5 mb-0">EDIT DATA PENGUNJUNG</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label" for="nama">Nama Pengunjung</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= @$data['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="no_hp">No HP</label>
                        <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= @$data['no_hp'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="alamat">alamat</label>
                        <textarea name="alamat" id="alamat" value="<?= @$data['alamat'] ?>" cols="20" rows="10" class="form-control"><?= @$data['alamat'] ?></textarea>
                    </div>
                    <input type="submit" name="update" value="update" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>