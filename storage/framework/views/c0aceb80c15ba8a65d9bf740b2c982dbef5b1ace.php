<!DOCTYPE html>
<html dir="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/skin-blue.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/font-awesome-rtl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/AdminLTE-rtl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/bootstrap-rtl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/rtl.css')); ?>">

        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>


    <style>
        .mr-2{
            margin-right: 5px;
        }

    </style>
    
    <script src="<?php echo e(asset('backend/assets/js/jquery.min.js')); ?>"></script>

    
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/plugins/noty/noty.css')); ?>">
    <script src="<?php echo e(asset('backend/assets/plugins/noty/noty.min.js')); ?>"></script>

    
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/plugins/icheck/all.css')); ?>">

    

</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php echo $__env->make('Backend.layouts.dashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Backend.layouts.dashboard._aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('Backend.partials._session', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016
            <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

</div><!-- end of wrapper -->


<script src="<?php echo e(asset('backend/assets/js/bootstrap.min.js')); ?>"></script>


<script src="<?php echo e(asset('backend/assets/plugins/icheck/icheck.min.js')); ?>"></script>


<script src="<?php echo e(asset('backend/assets/js/fastclick.js')); ?>"></script>


<script src="<?php echo e(asset('backend/assets/js/adminlte.min.js')); ?>"></script>


<script src="<?php echo e(asset('backend/assets/plugins/ckeditor/ckeditor.js')); ?>"></script>


<script src="<?php echo e(asset('backend/assets/js/jquery.number.min.js')); ?>"></script>


<script src="<?php echo e(asset('backend/assets/js/custom/image_preview.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/custom/order.js')); ?>"></script>

<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree();

        //icheck
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });

        //delete
        $('.delete').click(function (e) {

            var that = $(this)

            e.preventDefault();

            var n = new Noty({
                text: "<?php echo app('translator')->getFromJson('site.confirm_delete'); ?>",
                type: "warning",
                killer: true,
                buttons: [
                    Noty.button("<?php echo app('translator')->getFromJson('site.yes'); ?>", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),

                    Noty.button("<?php echo app('translator')->getFromJson('site.no'); ?>", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });

            n.show();

        });//end of delete

        // // image preview
        // $(".image").change(function () {
        //
        //     if (this.files && this.files[0]) {
        //         var reader = new FileReader();
        //
        //         reader.onload = function (e) {
        //             $('.image-preview').attr('src', e.target.result);
        //         }
        //
        //         reader.readAsDataURL(this.files[0]);
        //     }
        //
        // });

        CKEDITOR.config.language =  "<?php echo e(app()->getLocale()); ?>";

    });//end of ready


</script>
</body>
</html>
<?php /**PATH /var/www/html/videos_laravel/resources/views/Backend/layouts/dashboard/app.blade.php ENDPATH**/ ?>