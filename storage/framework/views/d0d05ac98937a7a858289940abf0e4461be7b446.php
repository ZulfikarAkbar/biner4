<!-- Sidebar -->
<ul class="sidebar navbar-nav">
        <?php if(auth()->user()->isAdmin()): ?>
            <li class="nav-item <?php echo e((request()->is('home')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/home')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('pendaftar')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('pendaftar')); ?>">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Registration Data</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('prop')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('prop')); ?>">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Bussiness Proposal</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('berita')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/berita')); ?>">
                    <i class="fa fa-newspaper" aria-hidden="true"></i>
                    <span>Post a news</span>
                </a>
            </li>
        <?php elseif(auth()->user()->isSeminar()): ?>
            <li class="nav-item <?php echo e((request()->is('home')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/home')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
        <?php elseif(auth()->user()->isWorkshop_1()): ?>
            <li class="nav-item <?php echo e((request()->is('home')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/home')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
        <?php elseif(auth()->user()->isWorkshop_2()): ?>
            <li class="nav-item <?php echo e((request()->is('home')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/home')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
        <?php else: ?>
            <li class="nav-item <?php echo e((request()->is('home')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('/home')); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item <?php echo e((request()->is('proposal')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(url('proposal')); ?>">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Upload Bussiness Proposal</span>
                </a>
            </li>
        <?php endif; ?>

        </ul>

<?php /* /home/asuspc/biner4.0/resources/views/layouts/sidebar.blade.php */ ?>