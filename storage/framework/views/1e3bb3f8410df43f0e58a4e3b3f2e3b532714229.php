<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container min-vh-100">
        <div class="d-flex justify-content-center pt-5">
            <div class="karturegister card mb-4">
                <div class="card-header text-center">
                    <h5 class="fw-bold fs-6">Profile</h5>
                </div>

                <div class="container px-4 py-2">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="<?php echo e($user->name); ?>" disabled>
                    </div>


                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="<?php echo e($user->email); ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Gender</label><br>
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="<?php echo e($user->gender); ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Date of Birth</label>
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="<?php echo e($user->dob); ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Country</label>
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="<?php echo e($user->country); ?>" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
        <div class="text-center p-2 fw-bold" style="color: #023C82">
            © 2022 Sanskuy
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\brili\Downloads\BantuKios\resources\views/pages/profile.blade.php ENDPATH**/ ?>