<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('sb/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb/vendors/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('sb/vendors/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb/css/sb-admin.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>

  <body id="page-top">


    @include('layouts.nav')

    <div id="wrapper">

        @include('layouts.sidebar')

        <div id="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    @if(auth()->user()->isAdmin())
                        <div class="card-header">Dashboard</div>
                            <div class="card-body">

                                You are logged in as Administrator!
                            </<div>

                        </div>
                    @elseif(auth()->user()->isSeminar())
                        <div class="card-header">Pemberitahuan</div>
                                <div class="card-body">
                                    <p>
                                        <strong>Kamu berhasil terdaftar pada acara Seminar BINER 4.0!</strong>
                                        <br><br>
                                        Segera selesaikan pembayaran!
                                        <br><br>
                                            Nama Bank             : <strong>Mandiri</strong>
                                            <br>
                                            Atas nama             : <strong>Suga</strong>
                                            <br>
                                            No. Rekening          : <strong>442184214</strong>
                                            <br>
                                            Konfirmasi pembayaran : <strong>087808085169</strong>
                                    </p>
                                </div>
                        </div>
                    @elseif(auth()->user()->isWorkshop_1())
                        <div class="card-header">Pemberitahuan</div>
                                <div class="card-body">
                                    <p>
                                        <strong>Kamu berhasil terdaftar pada acara Workshop Batch I BINER 4.0!</strong>
                                        <br><br>
                                        Segera selesaikan pembayaran!
                                        <br><br>
                                            Nama Bank             : <strong>Mandiri</strong>
                                            <br>
                                            Atas nama             : <strong>Suga</strong>
                                            <br>
                                            No. Rekening          : <strong>442184214</strong>
                                            <br>
                                            Konfirmasi pembayaran : <strong>087808085169</strong>
                                    </p>
                                </div>
                        </div>
                    @elseif(auth()->user()->isWorkshop_2())
                        <div class="card-header">Pemberitahuan</div>
                                <div class="card-body">
                                    <p>
                                        <strong>Kamu berhasil terdaftar pada acara Workshop Batch II BINER 4.0!</strong>
                                        <br><br>
                                        Segera selesaikan pembayaran!
                                        <br><br>
                                            Nama Bank             : <strong>Mandiri</strong>
                                            <br>
                                            Atas nama             : <strong>Suga</strong>
                                            <br>
                                            No. Rekening          : <strong>442184214</strong>
                                            <br>
                                            Konfirmasi pembayaran : <strong>087808085169</strong>
                                    </p>
                                </div>
                        </div>
                    @else(auth()->user()->isCompetition())
                        <div class="card-header">Pemberitahuan</div>
                                <div class="card-body">
                                    <p>
                                        <strong>Kamu berhasil terdaftar pada acara Bussiness Case Competition BINER 4.0!</strong>
                                        <br><br>
                                        Segera selesaikan pembayaran!
                                        <br><br>
                                            Nama Bank             : <strong>Mandiri</strong>
                                            <br>
                                            Atas nama             : <strong>Suga</strong>
                                            <br>
                                            No. Rekening          : <strong>442184214</strong>
                                            <br>
                                            Konfirmasi pembayaran : <strong>087808085169</strong>
                                    </p>
                                </div>
                        </div>
                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
            <div class="copyright text-center my-auto">
                © Hak cipta BINER 4.0 • Made with
                <span style="color:#e25555"><i class="fa fa-heart" aria-hidden="true"></i></span>
                in Jakarta
            </div>
            </div>
        </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
<!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendors/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('vendors/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('vendors/datatables/dataTables.bootstrap4.')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb/js/sb-admin.min.js')}}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('js/demo/datatables-demo.js')}}"></script>
    <script src="{{ asset('js/demo/chart-area-demo.js')}}"></script>

  </body>

</html>
