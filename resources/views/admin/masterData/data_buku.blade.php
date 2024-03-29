<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- icon -->
    <link rel="shortcut icon" href="{{ asset ('backend-template-master/images/icon/logo-mini.png')}}">

    <!-- Fontfaces CSS-->
    <link href="{{ asset ('backend-template-master/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset ('backend-template-master/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset ('backend-template-master/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset ('backend-template-master/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset ('backend-template-master/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper"></div>
        @include('layouts.adminLayout.admin_mobile_header')

        <!-- MENU SIDEBAR-->
        @include('layouts.adminLayout.admin_sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('layouts.adminLayout.admin_dektop_header')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!-- breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">Master Data</li>
                                <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
                            </ol>
                        </nav>
                        <!-- end breadcrumb -->
                        <!-- button add -->
                        <div>
                            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-plus"></i> Tambah Data Buku
                            </button>
                        </div>
                        <br>                     
                        <!-- end button -->
                        <!-- table -->
                        <table class="table table-light">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Nama Pengarang</th>
                                <th scope="col">Tahun Terbit</th>
                                <th scope="col">Jumlah Buku</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Lokasi rak</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            @include('layouts.adminLayout.admin_footer')
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset ('backend-template-master/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset ('backend-template-master/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset ('backend-template-master/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset ('backend-template-master/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset ('backend-template-master/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset ('backend-template-master/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset ('backend-template-master/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset ('backend-template-master/js/main.js') }}"></script>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Tambah data Buku</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ url ('/addbuku')}}" method="post">
                <div class="form-group">
                    <label for="namabuku">Judul Buku</label>
                    <input type="text" class="form-control" id="namabuku">
                </div>
                <div class="form-group">
                    <label for="namabuku">Nomor ISBN</label>
                    <input type="number" class="form-control" id="namabuku">
                </div><div class="form-group">
                    <label for="namapengarang">Nama Pengarang</label>
                    <input type="text" class="form-control" id="namapengarang">
                </div><div class="form-group">
                    <label for="tahunterbit">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahunterbit">
                </div><div class="form-group">
                    <label for="jmlbuku">Jumlah Buku</label>
                    <input type="number" class="form-control" id="jmlbuku">
                </div>
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" rows="2" id="deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="lokasirak">Lokasi Rak</label>
                    <select class="form-control" id="lokasirak">
                        <option>Rak 1</option>
                        <option>Rak 2</option>
                        <option>Rak 3</option>
                        <option>Rak 4</option>
                    </select>
                </div>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
    </div>
    </div>
    <!-- end modal -->

    <style>
        .modal-body{
        height: 400px;
        overflow-y: auto;
        }
    </style>

</body>

</html>
<!-- end document-->


