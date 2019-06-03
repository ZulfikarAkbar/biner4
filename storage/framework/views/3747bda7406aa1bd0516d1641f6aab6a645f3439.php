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
            <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Upload file')); ?></div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('proposal.store')); ?>">
                    <?php echo e(csrf_field()); ?>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama Lengkap Ketua')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="uploader" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama Team')); ?></label>

                            <div class="col-md-6">
                                <input id="uploader" type="text" class="form-control<?php echo e($errors->has('uploader') ? ' is-invalid' : ''); ?>" name="uploader" value="<?php echo e(old('uploader')); ?>" required autofocus>

                                <?php if($errors->has('uploader')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('uploader')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="institusi" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Institusi/Universitas')); ?></label>

                            <div class="col-md-6">
                                <input id="institusi" type="text" class="form-control<?php echo e($errors->has('institusi') ? ' is-invalid' : ''); ?>" name="institusi" value="<?php echo e(old('institusi')); ?>" required autofocus>

                                <?php if($errors->has('institusi')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('institusi')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="prop_file" class="col-md-4 col-form-label text-md-right"><?php echo e(__('File')); ?></label>

                            <div class="col-md-6">
                                <input id="prop_file" type="file" class="form-control<?php echo e($errors->has('prop_file') ? ' is-invalid' : ''); ?>" name="prop_file" value="<?php echo e(old('prop_file')); ?>" required autofocus>
                                <?php if($errors->has('prop_file')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('prop_file')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <br><br>
                                <p><strong>Format file:</strong></p>
                                <p><strong>BINER4.0-BUSSINESS-FILE_NamaTeam.zip</strong></p>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right"><?php echo e(__('')); ?></label>
                            <div class="col-md-6">
                                <?php echo NoCaptcha::renderJs(); ?>

                                <?php echo NoCaptcha::display(); ?>

                                <span class="text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></span>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" onclick="return confirm('Coba periksa kembali form isian, tekan ok jika sudah yakin benar!');" class="btn btn-primary">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

            </div>
            <!-- /.container-fluid -->

<br><br>
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
<?php /**PATH /home/u5392938/biner/resources/views/proposal/create.blade.php ENDPATH**/ ?>