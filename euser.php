<?php
include "koneksi.php";
if (isset($_GET['edit'])) {
    $ed = mysqli_query($con, "select * from tb_user where id_user='$_GET[id]'");
    $edit = mysqli_fetch_array($ed);
}

// kode update data
if (isset($_POST['update'])) {
    mysqli_query($con, "update tb_user set username='$_POST[username]',password='$_POST[password]'");
    echo "<script>alert('Data Terubah')</script>";
    echo "<script>document.location.href='?user';</script>";
}
if (isset($_GET['euser'])) {
    $sql = mysqli_query($con, "select * from tb_user where id_user='$_GET[id]'");
    $data = mysqli_fetch_array($sql);
}
?>
<div class="content-inner w-100">
    <!-- Page Header-->
    <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">Edit Data User</h2>
        </div>
    </header>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-close">
                    <div class="dropdown">
                        <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3" href="dashboard.php?user"> <i class="fas fa-times"></i>Kembali</a></div>
                    </div>
                </div>
                <h5 class="h5 mb-0">EDIT DATA USER</h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control" value="<?= @$data['username'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="text" id="password" name="password" class="form-control" value="<?= @$data['password'] ?>">
                    </div>
                    <input type="submit" name="update" value="update" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>