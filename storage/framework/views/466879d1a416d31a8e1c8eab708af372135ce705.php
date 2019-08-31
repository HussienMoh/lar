<?php $__env->startSection('content'); ?>
  <div class="content-wrapper">

        <section class="content-header">

            <h1><?php echo e(@$pagename); ?></h1>

            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i>Dashboard</a></li>
                <li class="active"><?php echo e(@$pagename); ?></li>
            </ol>
        </section>

        <section class="content">

            content here

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/videos_laravel/resources/views/Backend/home.blade.php ENDPATH**/ ?>