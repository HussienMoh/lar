<?php if(session('success')): ?>

    <script>
        new Noty({
            type: 'success',
            layout: 'center',
            text: "<?php echo e(session('success')); ?>",
            timeout: 2000,
            killer: true
        }).show();
    </script>

<?php endif; ?>
<?php /**PATH /var/www/html/videos_laravel/resources/views/Backend/partials/_session.blade.php ENDPATH**/ ?>