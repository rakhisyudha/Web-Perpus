<?php
include "koneksi.php";
?>

<div class="content-inner w-100">
    <!-- Page Header-->
    <header class="bg-white shadow-sm px-4 py-3 z-index-20">
        <div class="container-fluid px-0">
            <h2 class="mb-0 p-1">Dashboard</h2>
        </div>
    </header>
    <!-- Dashboard Counts Section-->
    <section class="pb-0">
        <div class="container-fluid">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row gx-5 bg-white">
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                            <div class="d-flex align-items-center">
                                <div class="icon flex-shrink-0 bg-violet">
                                    <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                        <use xlink:href="#survey-1"> </use>
                                    </svg>
                                </div>
                                <div class="mx-3">
                                    <h6 class="h4 fw-light text-gray-600 mb-3">Total<br>Buku</h6>
                                    <div class="progress" style="height: 4px">
                                        <?php
                                        $fa = mysqli_query($con, "select count(*) as total_buku from tb_buku");
                                        $rih = mysqli_fetch_array($fa);
                                        ?>
                                    </div>
                                </div>
                                <div class="number"><strong class="text-lg"><?= $rih['total_buku'] ?></strong></div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                            <div class="d-flex align-items-center">
                                <div class="icon flex-shrink-0 bg-red">
                                    <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                        <use xlink:href="#user-1"> </use>
                                    </svg>
                                </div>
                                <div class="mx-3">
                                    <h6 class="h4 fw-light text-gray-600 mb-3">Total<br>Pengunjung</h6>
                                    <div class="progress" style="height: 4px">
                                        <?php
                                        $ra = mysqli_query($con, "select count(*) as total_pengunjung from tb_pengunjung");
                                        $khis = mysqli_fetch_array($ra);
                                        ?>
                                    </div>
                                </div>
                                <div class="number"><strong class="text-lg"><?= $khis['total_pengunjung'] ?></strong></div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                            <div class="d-flex align-items-center">
                                <div class="icon flex-shrink-0 bg-green">
                                    <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                        <use xlink:href="#numbers-1"> </use>
                                    </svg>
                                </div>
                                <div class="mx-3">
                                    <h6 class="h4 fw-light text-gray-600 mb-3">Total<br>Buku yang dipinjam</h6>
                                    <div class="progress" style="height: 4px">
                                        <?php
                                        $az = mysqli_query($con, "select count(*) as peminjaman from tb_pinjam");
                                        $zam = mysqli_fetch_array($az);
                                        ?>
                                    </div>
                                </div>
                                <div class="number"><strong class="text-lg"><?= $zam['peminjaman'] ?></strong></div>
                            </div>
                        </div>
                        <!-- Item -->
                        <div class="col-xl-3 col-sm-6 py-4">
                            <div class="d-flex align-items-center">
                                <div class="icon flex-shrink-0 bg-orange">
                                    <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                        <use xlink:href="#list-details-1"> </use>
                                    </svg>
                                </div>
                                <div class="mx-3">
                                    <h6 class="h4 fw-light text-gray-600 mb-3">Total<br>Yang harus Dikembalikan</h6>
                                    <div class="progress" style="height: 4px">
                                        <?php
                                        $az = mysqli_query($con, "select count(*) as peminjaman from tb_pinjam");
                                        $zam = mysqli_fetch_array($az);
                                        ?>
                                    </div>
                                </div>
                                <div class="number"><strong class="text-lg"><?= $zam['peminjaman'] ?></strong></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </form>