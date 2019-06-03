<!-- Sidebar -->
<ul class="sidebar navbar-nav">
        <?php if(auth()->user()->isAdmin()): ?>
            <li class="nav-item <?php echo e((request()->is('home')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/home')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <!--<li class="nav-item <?php echo e((request()->is('pendaftar')) ? 'active' : ''); ?>">-->
            <!--    <a class="nav-link" href="<?php echo e(url('pendaftar')); ?>">-->
            <!--        <i class="fa fa-book" aria-hidden="true"></i>-->
            <!--        <span>Registration Data</span>-->
            <!--    </a>-->
            <!--</li>-->
            <li class="nav-item <?php echo e((request()->is('peserta-seminar')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('peserta-seminar')); ?>">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Cek peserta seminar</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('peserta-bisnis')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('peserta-bisnis')); ?>">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Cek peserta bussiness competition</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('peserta-workshop-batch1')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('peserta-workshop-batch1')); ?>">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Cek peserta workshop batch 1</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('peserta-workshop-batch2')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('peserta-workshop-batch2')); ?>">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Cek peserta workshop batch 2</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('prop')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('prop')); ?>">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Bussiness File</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('berita')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/berita')); ?>">
                    <i class="fa fa-newspaper" aria-hidden="true"></i>
                    <span>Post a news</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('tiket')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/tiket')); ?>">
                    <i class="fa fa-newspaper" aria-hidden="true"></i>
                    <span>Tiket Peserta</span>
                </a>
            </li>
        <?php else: ?>
        <li class="nav-item <?php echo e((request()->is('home')) ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('/home')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if(auth()->user()->isSeminar()): ?>
            
            <li class="nav-item <?php echo e((request()->is('tiket-seminar')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/tiket-seminar')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tiket seminar</span>
                </a>
            </li>
            <?php endif; ?>
        <?php if(auth()->user()->isWorkshop_1()): ?>
            <li class="nav-item <?php echo e((request()->is('tiket-workshop-batch-1')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/tiket-workshop-batch-1')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tiket Workshop (Batch I)</span>
                </a>
            </li>
            <?php endif; ?>
        <?php if(auth()->user()->isWorkshop_2()): ?>
            <li class="nav-item <?php echo e((request()->is('tiket-workshop-batch-2')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/tiket-workshop-batch-2')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tiket Workshop (Batch II)</span>
                </a>
            </li>
            <?php endif; ?>
        <?php if(auth()->user()->isCompetition()): ?>
            <li class="nav-item <?php echo e((request()->is('tiket-competition')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/tiket-competition')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tiket Competition</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('proposal')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('proposal')); ?>">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Upload Bussiness File</span>
                </a>
            </li>
        <?php endif; ?>

        </ul>
<?php /**PATH /home/u5392938/biner/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>