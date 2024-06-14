<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin RS Mau Sehat</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template   -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminIndex">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">RUMAH SAKIT<br>MAU SEHAT</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pasien -->
            <li class="nav-item">
                <a class="nav-link" href="adminIndex">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Pasien</span></a>
            </li>
            <!-- Nav Item - History -->
            <li class="nav-item">
                <a class="nav-link" href="historyIndex">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>History Pasien</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <br>
            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Pasien</h1><br>

                    <!-- body -->
                    <form action="{{ url('/editHistory') }}" method="POST">
                        @csrf
                        <!-- hidden id -->
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $data2->id }}"
                                aria-describedby="emailHelp">
                        <!-- end hidden id -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data2->nama}}"
                                aria-describedby="emailHelp">
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender" value="{{ $data2->gender}}"> 
                                <option value="" disabled {{ $data2->gender == '' ? 'selected' : '' }}>Pilih Gender</option>
                                <option value="Laki-Laki" {{ $data2->gender == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="Perempuan" {{ $data2->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Umur</label>
                            <select class="form-select" id="umur" name="umur" value="{{ $data2->umur}}"> 
                                <option value="" disabled {{ $data2->umur == '' ? 'selected' : '' }}>Pilih Umur</option>
                                <option value="Anak-anak" {{ $data2->umur == 'Anak-anak' ? 'selected' : '' }}>Anak-anak</option>
                                <option value="Dewasa" {{ $data2->umur == 'Dewasa' ? 'selected' : '' }}>Dewasa</option>
                                <option value="Lansia" {{ $data2->umur == 'Lansia' ? 'selected' : '' }}>Lansia</option>
                            </select>
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        <div class="form-group">
                            <label for="penyakit">Riwayat Penyakit</label>
                            <textarea id="penyakit" name="penyakit" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="diagnosis">Diagnosis</label>
                            <textarea id="diagnosis" name="diagnosis" class="form-control"></textarea>
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <textarea id="catatan" name="catatan" class="form-control"></textarea>
                        </div>
                        <!-- end form text field -->
                        <!-- form text field -->
                        <div class="mb-3">
                            <label for="exampleInputText" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $data2->tanggal}}"
                                aria-describedby="emailHelp">
                        </div>
                        <!-- end form text field -->
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- end body -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Lazward 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>