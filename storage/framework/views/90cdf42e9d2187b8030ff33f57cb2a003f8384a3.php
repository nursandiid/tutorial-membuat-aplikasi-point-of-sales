<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <?php
            $words = explode(' ', $setting->nama_perusahaan);
            $word  = '';
            foreach ($words as $w) {
                $word .= $w[0];
            }
        ?>
        <span class="logo-mini"><?php echo e($word); ?></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><?php echo e($setting->nama_perusahaan); ?></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo e(url(auth()->user()->foto)); ?>" class="user-image img-profil"
                            alt="User Image">
                        <span class="hidden-xs"><?php echo e(auth()->user()->name); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo e(url(auth()->user()->foto)); ?>" class="img-circle img-profil"
                                alt="User Image">

                            <p>
                                <?php echo e(auth()->user()->name); ?> - <?php echo e(auth()->user()->email); ?>

                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo e(route('user.profil')); ?>" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat"
                                    onclick="$('#logout-form').submit()">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<form action="<?php echo e(route('logout')); ?>" method="post" id="logout-form" style="display: none;">
    <?php echo csrf_field(); ?>
</form><?php /**PATH /home/nur/Htdocs/tokoku/resources/views/layouts/header.blade.php ENDPATH**/ ?>