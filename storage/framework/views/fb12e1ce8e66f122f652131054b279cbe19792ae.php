<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo e(asset('logo.png')); ?>" alt="">
    <title>BINER 4.0 | File</title>

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



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


  </head>

  <body id="page-top">


    <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="wrapper">

        <!-- Sidebar -->
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="content-wrapper">

            <div class="container-fluid">
            <!-- DataTables Example -->
            <a class="btn btn-success" href="/proposal/create"><i class="fa fa-plus"> Upload File</i></a>
            <br><br>
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Bussiness Case Competition Teams
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal upload file</th>
                                    <!--<th>Nama</th>-->
                                    <th>Team</th>
                                    <th>Institusi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal upload file</th>
                                    <!--<th>Nama</th>-->
                                    <th>Team</th>
                                    <th>Institusi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $__currentLoopData = $proposal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $proposal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($proposal->created_at); ?></td>
                                        <!--<td><?php echo e($proposal->name); ?></td>-->
                                        <td><?php echo e($proposal->uploader); ?></td>
                                        <td><?php echo e($proposal->institusi); ?></td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <script src="<?php echo e(asset('sb/vendors/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('sb/vendors/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('sb/vendors/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo e(asset('sb/vendors/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('sb/vendors/datatables/dataTables.bootstrap4.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('sb/js/sb-admin.min.js')); ?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo e(asset('sb/js/demo/datatables-demo.js')); ?>"></script>

  </body>

</html>
<?php /**PATH /home/u5392938/biner/resources/views/proposal/index.blade.php ENDPATH**/ ?>