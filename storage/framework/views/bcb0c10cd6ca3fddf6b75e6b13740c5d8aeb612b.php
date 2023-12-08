<?php $__env->startSection('container'); ?>
    <div class="container min-vh-100 p-4">
        <div class="container col-lg-8">
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="d-flex justify-content-between ">
                <div class="col-lg-4">
                    <form action="/manage">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" name="search" value="<?php echo e(request('search')); ?>">
                            <button class="btn btn-secondary" type="submit" id="button-addon2"><i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <a href="/manage/add">
                    <button class="btn btn-secondary" type="submit" id="button-addon2">Add Product <i class="fa fa-plus ms-1" aria-hidden="true"></i>
                    </button>
                </a>
            </div>
            <?php if($product->isNotEmpty()): ?>
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="<?php echo e(asset('storage/images/'.$products->photo)); ?>" class="img-fluid rounded-start" style="max-height: 250px" alt="produk">
                                
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex justify-content-between card-body">
                                    <h5 class="card-title fw-bold"><?php echo e($products->name); ?></h5>
                                    <div class="d-flex">
                                        <form action="/manage/update/<?php echo e($products->ProductID); ?>" method="GET">
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-outline-warning me-2" type="submit" id="button-addon2"><i class="bi bi-pencil-fill"></i></button>
                                        </form>
                                        <form action="/manage/delete/<?php echo e($products->ProductID); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-outline-danger" type="submit" id="button-addon2" onclick="return confirm('Are you sure want to Delete this product?')"><i class="bi bi-trash-fill"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="card container justify-content-center align-items-center mt-1 fw-bold" style="height: 200px">
                    <h3>There is no Product!</h3>
                </div>
            <?php endif; ?>
            <div class="d-flex justify-content-end">
                <?php echo e($product->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Barbatos-Shop\resources\views/admin/manage.blade.php ENDPATH**/ ?>