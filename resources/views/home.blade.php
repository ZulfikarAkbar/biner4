<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('logo.png') }}" alt="">
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
    <!--<script src="{{ asset('js/app.js')}}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->

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
                    @else
                    <div class="card-header">Pemberitahuan</div>
                                <div class="card-body">
                                    <p>
                                        <strong>Kamu berhasil terdaftar pada acara BINER 4.0 :</strong>
                                        <ul>
                                                @if(auth()->user()->isSeminar())
                                                <li><strong>Seminar Technology</strong></li>
                                                @endif
                                                @if(auth()->user()->isWorkshop_1())
                                                <li><strong>Workshop Technology Batch 1</strong></li>
                                                @endif
                                                @if(auth()->user()->isWorkshop_2())
                                                <li><strong>Workshop Techonology Batch 2</strong></li>
                                                @endif
                                                @if(auth()->user()->isCompetition())
                                                <li><strong>Bussiness Case Competition</strong></li>
                                                @endif
                                        </ul>
                                        {{-- @if(auth()->user()->isSeminar())
                                            @

                                        @endif
                                        <td><a class="btn btn-success" download="{{asset('storage/upload_tiket/'.$seminar->tiket)}}" width="250px" height="150px" href="{{asset('storage/upload_tiket/'.$seminar->tiket)}}" alt=""><i class="fa fa-file-download"> Download tiket</i></a></td>
                                        <td><a class="btn btn-success" download="{{asset('storage/upload_tiket/'.$seminar->tiket)}}" width="250px" height="150px" href="{{asset('storage/upload_tiket/'.$seminar->tiket)}}" alt=""><i class="fa fa-file-download"> Download tiket</i></a></td> --}}
                                        <br><br>
                                    
                                    </p>
                                </div>
                        </div>
                    @endif
                    <img src="{{asset('logo.png')}}" height='300' width="700">
                    {{-- @if(auth()->user()->isSeminar())
                        <div class="card-header">Pemberitahuan</div>
                                <div class="card-body">
                                    <p>
                                        <strong>Kamu berhasil terdaftar pada acara Seminar BINER 4.0!</strong>
                                        <br><br>
                                    
                                    </p>
                                </div>
                        </div>
                        @endif
                    @if(auth()->user()->isWorkshop_1())
                        <div class="card-header">Pemberitahuan</div>
                                <div class="card-body">
                                    <p>
                                        <strong>Kamu berhasil terdaftar pada acara Workshop Batch I BINER 4.0!</strong>
                                        <br><br>
                                  
                                    </p>
                                </div>
                        </div>
                        @endif
                    @if(auth()->user()->isWorkshop_2())
                        <div class="card-header">Pemberitahuan</div>
                                <div class="card-body">
                                    <p>
                                        <strong>Kamu berhasil terdaftar pada acara Workshop Batch II BINER 4.0!</strong>
                                        <br><br>
                                    
                                    </p>
                                </div>
                        </div>
                        @endif
                    @if(auth()->user()->isCompetition())
                        <div class="card-header">Pemberitahuan</div>
                                <div class="card-body">
                                    <p>
                                        <strong>Kamu berhasil terdaftar pada acara Bussiness Case Competition BINER 4.0!</strong>
                                        <br><br>
                                  
                                    </p>
                                </div>
                        </div>
                    @endif --}}
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
    <script src="{{ asset('sb/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb/vendors/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('sb/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('sb/vendors/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('sb/vendors/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb/js/sb-admin.min.js')}}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('sb/js/demo/datatables-demo.js')}}"></script>
    <script src="{{ asset('sb/js/demo/chart-area-demo.js')}}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ccfa3d9d07d7e0c63920e1f/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

  </body>

</html>
