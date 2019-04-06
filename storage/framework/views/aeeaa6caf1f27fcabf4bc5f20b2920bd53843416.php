<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Formulir Pendaftaran Seminar')); ?></div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('berita.update', $berita->id)); ?>">
                    <?php echo e(csrf_field()); ?>


                        <div class="form-group row">
                            <label for="kegiatan" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nama Kegiatan')); ?></label>

                            <div class="col-md-6">
                                <input id="kegiatan" type="text" class="form-control<?php echo e($errors->has('kegiatan') ? ' is-invalid' : ''); ?>" name="kegiatan" value="<?php echo e(old('kegiatan')); ?>" required autofocus>

                                <?php if($errors->has('kegiatan')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('kegiatan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Tanggal Kegiatan')); ?></label>

                            <div class="col-md-6">
                                <input id="tanggal" type="datetime" class="form-control<?php echo e($errors->has('tanggal') ? ' is-invalid' : ''); ?>" name="tanggal" value="<?php echo e(old('tanggal')); ?>" required autofocus>

                                <?php if($errors->has('tanggal')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('tanggal')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gambar kegiatan')); ?></label>

                            <div class="col-md-6">
                                <input id="gambar" type="file" class="form-control<?php echo e($errors->has('gambar') ? ' is-invalid' : ''); ?>" name="gambar" value="<?php echo e(old('gambar')); ?>" required autofocus>
                                <p>*.jpg</p>
                                <?php if($errors->has('gambar')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('gambar')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Deskripsi')); ?></label>

                            <div class="col-md-6">
                                <textarea id="deskripsi" type="text" class="form-control<?php echo e($errors->has('deskripsi') ? ' is-invalid' : ''); ?>" name="deskripsi" value="<?php echo e(old('deskripsi')); ?>" required autofocus>
                                </textarea>
                                <?php if($errors->has('deskripsi')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('deskripsi')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/asuspc/biner4.0/resources/views/berita/edit.blade.php */ ?>