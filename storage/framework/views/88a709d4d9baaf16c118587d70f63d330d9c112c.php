<?php $__env->startSection('title_page'); ?>
    Test Page
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('Backend.layout.header'); ?>
        <?php $__env->slot('nav_title'); ?>
            Test Page
        <?php $__env->endSlot(); ?>

    <?php echo $__env->renderComponent(); ?>

   <b><a href="<?php echo e(url('admin')); ?>">click here to go to Home Page</a></b>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('Backend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/videos_laravel/resources/views/Backend/test.blade.php ENDPATH**/ ?>