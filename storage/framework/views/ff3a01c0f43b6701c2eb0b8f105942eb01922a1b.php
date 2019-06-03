<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo e(asset('logo.png')); ?>" alt="">
    <title>BINER 4.0 | Peserta seminar</title>

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

            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Pendaftar Seminar
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
                                <?php $__currentLoopData = $seminars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $seminar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($seminar->created_at); ?></td>
                                        <td><?php echo e($seminar->name); ?></td>
                                        <td><?php echo e($seminar->institusi); ?></td>
                                        <td><?php echo e($seminar->role); ?></td>
                                        <td><?php echo e($seminar->phone); ?></td>
                                        <td><?php echo e($seminar->email); ?></td>
                                        <td><a class="btn btn-success" href="<?php echo e(asset('storage/upload_bukti_bayar/'.$seminar->bukti)); ?>" download="<?php echo e(asset('storage/upload_bukti_bayar/'.$seminar->bukti)); ?>" alt=""><i class="fa fa-file-download"> Download</i></a></td>
                                        <td>
                                            <form action="<?php echo e(route('seminar.destroy', $seminar->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="hidden" class="btn btn-danger" onclick="return confirm('Anda yakin menghapus pendaftar ini?')"><i class="fa fa-eraser"> Hapus</i></button>
                                            </form>
                                        </td>
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
<?php /**PATH /home/asuspc/biner4.0/resources/views/pendaftar/index_seminar.blade.php ENDPATH**/ ?>