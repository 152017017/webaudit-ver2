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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">UPM</span>
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
                        <h1 class="h3 mb-0 text-gray-800">Form Audit SPM</h1>                       
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Berkas 
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Audit 2019</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					-->
                    <!-- TABEL AUDT 2019 - 2020 -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h9 class="m-0 font-weight-bold text-primary">Form Audit SPM</h9>
                        </div>

                        <p> <a onClick='top.location="<?php echo base_url('index.php/dashboard/d_spm/tambahaudit')?>"' class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Tambah Audit</a>
                        
                        <div class="form-group" style="padding-bottom: 20px;">
                            <label for="Modal Name">Tahun Ajaran</label>
                            <select type="text" name="tahunAjaran"  class="form-control">
                            <option value="">--Pilih Tahun Ajaran--</option>
                            <option value="1">Tahun Ajaran 2018 - 2019</option>
                            <option value="2">Tahun Ajaran 2019 - 2020</option>
                            <option value="3">Tahun Ajaran 2020 - 2021</option>
                            <option value="4">Tahun Ajaran 2021 - 2022</option>
                            </select>
                        </div>

                        <div class="form-group" style="padding-bottom: 20px;">
                            <label for="Modal Name">Semester</label>
                            <select type="text" name="semester"  class="form-control">
                            <option value="">--Pilih Semester--</option>
                            <option value="1">Semester Ganjil</option>
                            <option value="2">Semster Genap</option>                  
                            </select>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style='text-align:center; vertical-align: middle'>Unit</th>
                                            <th style='text-align:center; vertical-align: middle'>Auditor</th>
                                            <th style='text-align:center; vertical-align: middle'>Tanggal Visitasi</th>
                                            <th style='text-align:center; vertical-align: middle' colspan="3" >Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
                                            <th style='text-align:center; vertical-align: middle'><!--- ambil dari db---></th>
                                            <th style='text-align:center; vertical-align: middle'><!--- ambil dari db---></th>
                                            <th style='text-align:center; vertical-align: middle'><!--- ambil dari db---></th>
                                            <td>Edit</td>
                                            <td>Save</td>
											<td>Hapus</td>                                         
										</tr> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
					<!-- AKHIR TABEL -->
<!-----------------------------	------------------------------------------------------------------------------------>					
					<!-- Tabel Daftar Program Studi di Unit Pengelola Program Studi -->
                    
					<!-- AKHIR TABEL -->

					<!-- Tabel 1 Bag-1 Kerjasama Tridharma - Pendidikan -->
                   
					<!-- AKHIR TABEL -->

					<!-- Tabel 1 Bag-2 Kerjasama Tridharma - Penelitian -->
                    
					<!-- AKHIR TABEL -->

					<!-- Tabel 1 Bagian-3 Kerjasama Pengabdian kepada Masyarakat -->
                    
					<!-- AKHIR TABEL -->

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

