<?php $__env->startSection('container'); ?>
    <div class="container min-vh-100">
        
            <div class="col-7 mx-auto pt-5">
                <a href="/manage">
                    <button type="submit" class="btn btn-secondary"><i class="bi bi-arrow-left-circle me-1"></i>Back</button>
                </a>
            </div>
            
        
        <div class="d-flex justify-content-center pt-3">
            <div class="card col-lg-7">
                <div class="card-header">
                Add Product
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('storeUpdate', $product->ProductID)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo e($product->name); ?>">
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
                            <label for="formGroupExampleInput2" class="form-label">Genre</label>
                            <div>
                                <select class="form-select" name="CategoryID" id="floatingSelectGrid">
                                    <?php if($product->category->CategoryID == 2): ?>
                                        <option  value="<?php echo e($product->category->CategoryID); ?>" selected="selected"><?php echo e($product->category->categoryName); ?></option>
                                        <option value="1">Electronic</option>
                                    <?php else: ?>
                                        <option  value="<?php echo e($product->category->CategoryID); ?>" selected="selected"><?php echo e($product->category->categoryName); ?></option>
                                        <option value="2">Handphone</option>
                                    <?php endif; ?>
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
                            <label for="formGroupExampleInput" class="form-label">Description</label>
                            <textarea type="text" name="detail" class="form-control" id="formGroupExampleInput" rows="10"><?php echo e($product->detail); ?></textarea>
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
                            <input type="text" name="price" class="form-control" id="formGroupExampleInput" value="<?php echo e($product->price); ?>">
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
                            <button type="submit" class="btn btn-outline-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Barbatos-Shop\resources\views/admin/update.blade.php ENDPATH**/ ?>