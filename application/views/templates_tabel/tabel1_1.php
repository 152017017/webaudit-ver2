<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url('index.php/auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
<!-----------------------------	------------------------------------------------------------------------------------>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Auditor</span>
                                <img class="img-profile rounded-circle" src="<?php echo base_url() ?>assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Audit 2019 - 2020</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Berkas</a>
                    </div>
<!-----------------------------	------------------------------------------------------------------------------------>
					<!-- Tabel 1 Bag-1 Kerjasama Tridharma - Pendidikan -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel 1 Bagian-1 Kerjasama Pendidikan</h6>
                        </div>
                        <p> <a onClick='top.location="<?php echo base_url('index.php/dashboard/t_tabel1_1/tambahtabel')?>"' class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Tambah Data</a>                                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr rowspan="2">
                                            <th style="text-align:center">No</th>
                                            <th style="text-align:center">Lembaga Mitra</th>
                                            <th style="text-align:center" colspan="3">Tingkat *)</th>
                                            <th style="text-align:center">Judul Kegiatan Kerjasama</th>
                                            <th style="text-align:center">Manfaat bagi PS yang Diakreditasi</th>
                                            <th style="text-align:center">Waktu dan Durasi</th>
                                            <th style="text-align:center">Bukti Kerjasama</th>
                                            <th style="text-align:center">Tahun Berakhirnya Kerjasama</th>
										</tr>
										<tr>
											<th> </th>
											<th> </th>
											<th>Internasional</th>
											<th>Nasional</th>
											<th>Wilayah/Lokal</th>											
										</tr>
                                    </thead>
                                    <tbody>
										<tr>
											<td>1</td>
											<td align="center">PT. Schneider Electric Indonesia</td>
											<td align="center"> </td> <!-- Internasional -->
											<td align="center">v</td> <!-- Nasional -->
											<td align="center"> </td> <!-- Wilayah / lokal -->
											<td align="center">Training Centre</td>
											<td align="center">Sertifikasi Peserta & Peningkatan Kompetensi Lulusan</td>
											<td align="center">5 Tahun</td>
                                            <td align="center">MOU, Sertifikat Peserta, Foto Kegiatan</td>
                                            <td align="center">2025</td>
										</tr> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
					<!-- AKHIR TABEL -->
<!-----------------------------	------------------------------------------------------------------------------------>					
				</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
