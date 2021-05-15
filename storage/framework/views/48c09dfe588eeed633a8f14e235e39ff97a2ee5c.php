<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('/AdminLTE-2/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(auth()->user()->name); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="header">MASTER</li>
            <li>
                <a href="<?php echo e(route('kategori.index')); ?>">
                    <i class="fa fa-cube"></i> <span>Kategori</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('produk.index')); ?>">
                    <i class="fa fa-cubes"></i> <span>Produk</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('member.index')); ?>">
                    <i class="fa fa-id-card"></i> <span>Member</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('supplier.index')); ?>">
                    <i class="fa fa-truck"></i> <span>Supplier</span>
                </a>
            </li>
            <li class="header">TRANSAKSI</li>
            <li>
                <a href="<?php echo e(route('pengeluaran.index')); ?>">
                    <i class="fa fa-money"></i> <span>Pengeluaran</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('pembelian.index')); ?>">
                    <i class="fa fa-download"></i> <span>Pembelian</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('penjualan.index')); ?>">
                    <i class="fa fa-upload"></i> <span>Penjualan</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('transaksi.index')); ?>">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('transaksi.baru')); ?>">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                </a>
            </li>
            <li class="header">REPORT</li>
            <li>
                <a href="<?php echo e(route('laporan.index')); ?>">
                    <i class="fa fa-file-pdf-o"></i> <span>Laporan</span>
                </a>
            </li>
            <li class="header">SYSTEM</li>
            <li>
                <a href="#">
                    <i class="fa fa-users"></i> <span>User</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cogs"></i> <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside><?php /**PATH /home/nur/Htdocs/tokoku/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>