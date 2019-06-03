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
            <a class="btn btn-primary" href="/tiket/buat_tiket"><i class="fa fa-plus"> Upload tiket</i></a>
            <br><br>
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Tiket
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal dibuat</th>
                                    <th>Nama Peserta</th>
                                    <th>Kluster pendaftaran</th>
                                    <th>Tiket</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal dibuat</th>
                                    <th>Nama Peserta</th>
                                    <th>Kluster pendaftaran</th>
                                    <th>Tiket</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @if($tiket->count())
                                @foreach($tiket as $key => $tiket)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{date('d-m-Y, H:i', strtotime($tiket->updated_at))}}</td>
                                        <td>{{ $tiket->nama }}</td>
                                        <td>{{ $tiket->kluster }}</td>
                                        <td><img width="250px" height="150px" src="{{asset('storage/upload_tiket/'.$tiket->tiket)}}" alt=""></td>

                                        <td>
                                            <a class="btn btn-dark" style="background-color:yellow; color:black" href="/tiket/{{$tiket->slug}}/edit_tiket"><i class="fa fa-edit"> Edit</i></a>

                                            <form action="{{ route('tiket.destroy', $tiket->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <br>
                                                <button type="hidden" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus tiket ini?');"><i class="fa fa-eraser"> Hapus</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
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
