<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container justify-content-center pt-5 min-vh-100">
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <?php if(session()->has('purchase')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('purchase')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <div class="card mb-3 shadow bg-white rounded">
            <div class="m-3">
                <div class="row mx-auto">
                    <div class="border border-secondary col-md-4 p-0 m-0">
                        
                        <img src="<?php echo e(asset('storage/images/'.$product->photo)); ?>" class="img-fluid" alt="product">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title fw-bold"><?php echo e($product->name); ?></h3>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><small class="text-muted">Detail</small></p>
                                <p class="col-lg-10 card-text"><?php echo e($product->detail); ?></p>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><small class="text-muted">Price</small></p>
                                <p class="col-lg-10 card-text"><?php echo e($product->price); ?> Coin</p>
                            </div>
                            <div>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user')): ?>
                                    <form action="<?php echo e(route('addToCart', $product->ProductID)); ?>" method="POST" enctype="multipart/form-data" class="mb-3">
                                        <?php echo csrf_field(); ?>
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text"><small class="text-muted">Qty Cart</small></p>
                                            <div class="d-flex col-lg-10 justify-content-between">
                                                <div class="col-lg-11">
                                                    <input type="number" name="quantity" class="form-control" id="quantity" min="1" required>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="submit" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form action="<?php echo e(route('purchase', $product->ProductID)); ?>" method="POST" enctype="multipart/form-data" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text"><small class="text-muted">Qty Purchase</small></p>
                                            <div class="d-flex col-lg-10 justify-content-between">
                                                <div class="col-lg-11">
                                                    <input type="number" name="quantity" class="form-control" id="quantity" min="1" required>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <button type="submit" class="btn btn-outline-success" onclick="return confirm('Are you sure want to Purchase this product?')"><i class="bi bi-bag-fill"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php endif; ?>
                                <div class="mt-2">
                                    <a href="/"><button type="button" class="btn btn-outline-danger">Back</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom pt-1 pb-1" style="background-color: white;">
        <div class="text-center p-2 fw-bold" style="color: black">
            © 2023 CStudy
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cstudy\Cstudy\resources\views/pages/productdetail.blade.php ENDPATH**/ ?>