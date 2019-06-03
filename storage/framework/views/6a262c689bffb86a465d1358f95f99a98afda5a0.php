<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo e(asset('logo.png')); ?>" alt="">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo e(asset('sb/vendors/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('sb/vendors/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo e(asset('sb/vendors/datatables/dataTables.bootstrap4.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('sb/css/sb-admin.css')); ?>" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <!--<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!--<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">-->

  </head>

  <body id="page-top">


    <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="wrapper">

        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="content-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    <?php if(auth()->user()->isAdmin()): ?>
                        <div class="card-header">Dashboard</div>
                            <div class="card-body">

                                You are logged in as Administrator!
                            </<div>

                        </div>
                    <?php else: ?>
                    <div class="card-header">Pemberitahuan</div>
                                <div class="card-body">
                                    <p>
                                        <strong>Kamu berhasil terdaftar pada acara BINER 4.0 :</strong>
                                        <ul>
                                                <?php if(auth()->user()->isSeminar()): ?>
                                                <li><strong>Seminar Technology</strong></li>
                                                <?php endif; ?>
                                                <?php if(auth()->user()->isWorkshop_1()): ?>
                                                <li><strong>Workshop Technology Batch 1</strong></li>
                                                <?php endif; ?>
                                                <?php if(auth()->user()->isWorkshop_2()): ?>
                                                <li><strong>Workshop Techonology Batch 2</strong></li>
                                                <?php endif; ?>
                                                <?php if(auth()->user()->isCompetition()): ?>
                                                <li><strong>Bussiness Case Competition</strong></li>
                                                <?php endif; ?>
                                        </ul>
                                        
                                        <br><br>
                                    
                                    </p>
                                </div>
                        </div>
                    <?php endif; ?>
                    <img src="<?php echo e(asset('logo.png')); ?>" height='300' width="700">
                    
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
    <script src="<?php echo e(asset('sb/vendors/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sb/vendors/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('sb/vendors/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo e(asset('sb/vendors/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sb/vendors/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('sb/vendors/datatables/dataTables.bootstrap4.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('sb/js/sb-admin.min.js')); ?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo e(asset('sb/js/demo/datatables-demo.js')); ?>"></script>
    <script src="<?php echo e(asset('sb/js/demo/chart-area-demo.js')); ?>"></script>
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
<?php /**PATH /home/u5392938/biner/resources/views/home.blade.php ENDPATH**/ ?>