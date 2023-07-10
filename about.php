<?php
    include 'function.php';
    include 'cek.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>About Us</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Penyimpanan Barang</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Stock Barang
                            </a>
                            <a class="nav-link" href="masuk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Masuk
                            </a>
                            <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Keluar
                                
                            </a>
                            </a>
                            <a class="nav-link" href="about.php">
                                About Us
                            </a>
                            <a class="nav-link" href="logout.php">
                                logout
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <section class="vh-100">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-md-9 col-lg-7 col-xl-5">
                                <h1>About us</h1>
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-body p-4">
                                        <div class="d-flex text-black">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="mb-1">Muhammad Iqbal Farhansyah Setiawan</h5>
                                                <p class="mb-2 pb-1" style="color: #2b2a2a;">3411201123</p>
                                                <p class="mb-2 pb-1" style="color: #2b2a2a;">DSEC</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-body p-4">
                                        <div class="d-flex text-black">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="mb-1">Widi Widiya Wati</h5>
                                                <p class="mb-2 pb-1" style="color: #2b2a2a;">3411201129</p>
                                                <p class="mb-2 pb-1" style="color: #2b2a2a;">DSEC</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-body p-4">
                                        <div class="d-flex text-black">
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="mb-1">Obit Revian Oktia</h5>
                                                <p class="mb-2 pb-1" style="color: #2b2a2a;">3411201144</p>
                                                <p class="mb-2 pb-1" style="color: #2b2a2a;">DSEC</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Barang</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                    
                    <!-- Modal body -->
                <form method="post">
                    <div class="modal-body">
                        <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required>
                        <br>
                        <input type="text" name="deskripsi" placeholder="Deskripsi Barang" class="form-control" required>
                        <br>
                        <input type="number" name="stock" class="form-control" placeholder="Stok" required>
                        <br>
                        <button type="submit" class="btn btn-primary" name="addnewbarang">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</html>