<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e($setting->nama_perusahaan); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="icon" href="<?php echo e(url($setting->path_logo)); ?>" type="image/png">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset('/AdminLTE-2/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('/AdminLTE-2/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('/AdminLTE-2/dist/css/AdminLTE.min.css')); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('/AdminLTE-2/dist/css/skins/_all-skins.min.css')); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('/AdminLTE-2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <?php echo $__env->yieldPushContent('css'); ?>
</head>
<body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">

        <?php if ($__env->exists('layouts.header')) echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if ($__env->exists('layouts.sidebar')) echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?php echo $__env->yieldContent('title'); ?>
                </h1>
                <ol class="breadcrumb">
                    <?php $__env->startSection('breadcrumb'); ?>
                        <li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <?php echo $__env->yieldSection(); ?>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                
                <?php echo $__env->yieldContent('content'); ?>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php if ($__env->exists('layouts.footer')) echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo e(asset('AdminLTE-2/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo e(asset('AdminLTE-2/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <!-- Moment -->
    <script src="<?php echo e(asset('AdminLTE-2/bower_components/moment/min/moment.min.js')); ?>"></script>

    <!-- DataTables -->
    <script src="<?php echo e(asset('AdminLTE-2/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('AdminLTE-2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('AdminLTE-2/dist/js/adminlte.min.js')); ?>"></script>
    <!-- Validator -->
    <script src="<?php echo e(asset('js/validator.min.js')); ?>"></script>

    <script>
        function preview(selector, temporaryFile, width = 200)  {
            $(selector).empty();
            $(selector).append(`<img src="${window.URL.createObjectURL(temporaryFile)}" width="${width}">`);
        }
    </script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /home/nur/Htdocs/tokoku/resources/views/layouts/master.blade.php ENDPATH**/ ?>