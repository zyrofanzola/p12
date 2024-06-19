<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- row ux-->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-white">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-black text-uppercase mb-1">Jumlah User</div>
                            <div class="h1 mb-0 font-weight-bold text-black"><?= $this->ModelUser->getUser()->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-white">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-black text-uppercase mb-1">Jumlah Buku</div>
                            <div class="h1 mb-0 font-weight-bold text-black"><?= $this->ModelBuku->getBuku()->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('buku'); ?>"><i class="fas fa-book fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-white">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-black text-uppercase mb-1">Jumlah Kategori Buku</div>
                            <div class="h1 mb-0 font-weight-bold text-black"><?= $this->ModelBuku->getKategori()->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('buku/kategori'); ?>"><i class="fas fa-book fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row ux-->
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- row table-->
    <div class="row">
        <div class="table-responsive col-sm-12 ml-auto mr-auto">
            <div class="page-header">
                <span class="fas fa-users text-primary mt-2 "> Data User</span>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aktif</th>
                        <th>Member Sejak</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($anggota as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['email']; ?></td>
                        <?php 
                            if ($a['role_id'] == 1) {
                                echo "<td>Administrator</td>";
                            } else {
                                echo "<td>Member</td>";
                            }
                        ?>
                        <!-- <td><?= $a['role_id']; ?></td> -->
                        <td><?= $a['is_active']; ?></td>
                        <td><?= date('Y', $a['tanggal_input']); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->