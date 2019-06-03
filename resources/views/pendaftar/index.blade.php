<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('logo.png') }}" alt="">
    <title>BINER 4.0 | Data Pendaftar</title>

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
                    <i class="fas fa-table"></i>
                    Data Pendaftar
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal mendaftar</th>
                                    <th>Nama Lengkap</th>
                                    <th>Asal Institusi</th>
                                    <th>Kluster Pendaftaran</th>
                                    <th>No. Handphone</th>
                                    <th>Alamat E-Mail</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Hapus pendaftar</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal mendaftar</th>
                                    <th>Nama Lengkap</th>
                                    <th>Asal Institusi</th>
                                    <th>Kluster Pendaftaran</th>
                                    <th>No. Handphone</th>
                                    <th>Alamat E-Mail</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Hapus pendaftar</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($pendaftars as $key => $pendaftar)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $pendaftar->created_at }}</td>
                                        <td>{{ $pendaftar->name }}</td>
                                        <td>{{ $pendaftar->institusi }}</td>
                                        <td>{{ $pendaftar->role }}</td>
                                        <td>{{ $pendaftar->phone }}</td>
                                        <td>{{ $pendaftar->email }}</td>
                                        <td><a class="btn btn-success" href="{{asset('storage/upload_bukti_bayar/'.$pendaftar->bukti)}}" download="{{asset('storage/upload_bukti_bayar/'.$pendaftar->bukti)}}" alt=""><i class="fa fa-file-download"> Download</i></a></td>
                                        <td>
                                            <form action="{{ route('pendaftar.destroy', $pendaftar->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="hidden" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus pendaftar ini?');"><i class="fa fa-eraser"> Hapus</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
