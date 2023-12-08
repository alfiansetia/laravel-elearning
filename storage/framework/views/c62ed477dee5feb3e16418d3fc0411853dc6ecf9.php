<?php $__env->startSection('container'); ?>
    <div class="errorpage container-fluid d-flex justify-content-center align-items-center">
        <div class="row">
            <center>
                <h1 style="text-align: center">404 | Page Not Found!</h1>
                <a href="/""><button type="button" class="btn btn-danger">Go Back Home</button></a>
            </center>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Barbatos-Shop\resources\views/errors/404.blade.php ENDPATH**/ ?>