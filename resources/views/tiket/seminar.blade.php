<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('logo.png') }}" alt="">
    <title>BINER 4.0 | Ticket</title>

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



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


  </head>

  <body id="page-top">


    @include('layouts.nav')
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <div id="content-wrapper">
            <div class="container-fluid">
            <!-- DataTables Example -->

            <div class="card mb-3">
                <div class="card-header">
                    {{-- <i class="fas fa-table"></i> --}}
                    Tiket seminar
                </div>
                <div class="card-body">
                    @if($tikets->isEmpty())
                    <strong>Tiket akan di<i>upload</i> paling lama 2 x 24 jam dari didaftarkannya akun.</strong>
                    @else
                    @foreach ($tikets as $tiket)
                    
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <img align='middle' width='600' height='200' src="{{asset('storage/upload_tiket/' . $tiket->tiket)}}"> <br>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-4">
                            <a class="btn btn-success" href="{{asset('storage/upload_tiket/'.$tiket->tiket)}}" download alt=""><i class="fa fa-file-download"> Download</i></a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                    
                    
                    {{-- <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Peserta</th>
                                    <th>Kluster pendaftaran</th>
                                    <th>Tiket</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Peserta</th>
                                    <th>Kluster pendaftaran</th>
                                    <th>Tiket</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @if($seminars->count())
                                @foreach($seminars as $key => $seminar)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $seminar->nama }}</td>
                                        <td>{{ $seminar->kluster }}</td>
                                        <td><a class="btn btn-success" download="{{asset('storage/upload_tiket/'.$seminar->tiket)}}" width="250px" height="150px" href="{{asset('storage/upload_tiket/'.$seminar->tiket)}}" alt=""><i class="fa fa-file-download"> Download tiket</i></a></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div> --}}
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
    <script src="{{ asset('sb/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb/vendors/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('sb/vendors/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('sb/vendors/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb/js/sb-admin.min.js')}}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('sb/js/demo/datatables-demo.js')}}"></script>

  </body>

</html>
