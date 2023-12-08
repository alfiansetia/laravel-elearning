

<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container min-vh-100">
        
            <div class="col-7 mx-auto pt-2">
                <a href="/manage">
                    <button type="submit" class="btn btn-secondary"><i class="bi bi-arrow-left-circle me-1"></i>Back</button>
                </a>
            </div>
            
        
        <div class="d-flex justify-content-center pt-3 mb-5">
            <div class="card col-lg-7">
                <div class="card-header">
                  Add Product
                </div>
                <div class="card-body">
                    <form action="/manage/add" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo e(old('name')); ?>">
                        </div>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-2">
                            <label for="formGroupExampleInput2" class="form-label">Category</label>
                            <div>
                                <select class="form-select" name="CategoryID" id="floatingSelectGrid">
                                    <option  value="" label="Select a Category" selected>Select a Category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(old('CategoryID') == $category->CategoryID): ?>
                                            <option value="<?php echo e($category->CategoryID); ?>" selected><?php echo e($category->categoryName); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($category->CategoryID); ?>"><?php echo e($category->categoryName); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">Detail</label>
                            <textarea type="text" name="detail" class="form-control" id="formGroupExampleInput" rows="10"><?php echo e(old('detail')); ?></textarea>
                        </div>
                        <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="formGroupExampleInput" value="<?php echo e(old('price')); ?>">
                        </div>
                        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-4">
                            <label for="formFile" class="form-label">Photo</label>
                            <input class="form-control" name="photo" type="file" id="formFile">
                        </div>
                        <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <div class="mb-2">
                            <button type="submit" class="btn btn-outline-success    ">Add</button>
                        </div>
                    </form>
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



<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ryzen3\Downloads\SKripsi\CstudySkripsi\resources\views/admin/add.blade.php ENDPATH**/ ?>