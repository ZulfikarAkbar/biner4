<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo e(asset('logo.png')); ?>" alt="">
    <title>BINER 4.0 | Ticket</title>

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
            <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Post berita terbaru')); ?></div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="/tiket/<?php echo e($tiket->slug); ?>">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama lengkap peserta')); ?></label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control<?php echo e($errors->has('nama') ? ' is-invalid' : ''); ?>" name="nama" value="<?php echo e(old('nama')? old('nama') : $tiket->nama); ?>" required autofocus>

                                <?php if($errors->has('nama')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('nama')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kluster" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Kluster pendaftaran')); ?></label>

                            <div class="col-md-6">
                                <select class="form-control<?php echo e($errors->has('kluster') ? ' is-invalid' : ''); ?>"  id="kluster" type="text" name="kluster" value="<?php echo e(old('kluster')? old('kluster') : $tiket->kluster); ?>" required autofocus>
                                    <option value="" selected hidden disabled>Kluster Pendaftaran</option>
                                    <option value="Seminar">Seminar</option>
                                    <option value="WorkshopBatch_1">Workshop (Batch I)</option>
                                    <option value="WorkshopBatch_2">Workshop (Batch II)</option>
                                    <option value="BussinessCaseCompetition">Bussiness Case Competition</option>
                                </select>
                                <?php if($errors->has('kluster')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('kluster')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tiket" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tiket')); ?></label>

                            <div class="col-md-6">
                                <input id="tiket" type="file" class="form-control<?php echo e($errors->has('tiket') ? ' is-invalid' : ''); ?>" name="tiket" value="<?php echo e(old('tiket')); ?>" required autofocus>
                                <p>*.jpg</p>
                                <?php if($errors->has('tiket')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('tiket')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                                <a class="btn btn-light" href="/tiket" style="border: solid 1px;">
                                    <?php echo e(__('Batal')); ?>

                                </a>
                            </div>
                        </div>
                    </form>
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
    <script src="<?php echo e(asset('sb/vendors/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('sb/vendors/datatables/dataTables.bootstrap4.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('sb/js/sb-admin.min.js')); ?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo e(asset('sb/js/demo/datatables-demo.js')); ?>"></script>

  </body>

</html>
<?php /**PATH /home/u5392938/biner/resources/views/tiket/edit.blade.php ENDPATH**/ ?>