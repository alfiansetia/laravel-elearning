<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container d-flex justify-content-center min-vh-100 pt-2">
        <div class="marginbottom col-lg-6">
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if(session()->has('checkout')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('checkout')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo e(session('error')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if($products->count() > 0): ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="card mb-3">
                    <div class="d-flex row-cols-lg-3">
                            <div class="col-lg-4">
                                <img src="<?php echo e(asset('storage/images/'.$product->products[0]->photo)); ?>" class="img-fluid rounded-start" alt="produk">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title fw-bold"><?php echo e(Str::limit($product->products[0]->name, 25)); ?></h5>
                                        <div class="d-flex">
                                            <form action="/carts/<?php echo e($product->CartID); ?>" method="POST" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                
                                                <button class="btn btn-outline-danger" type="submit" id="button-addon2" onclick="return confirm('Are you sure want to Delete this product?')"><i class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <span>
                                        Quantity: <?php echo e($product->quantity); ?>

                                    </span>
                                    <div class="mt-3">
                                        <p>
                                            Total Price: <?php echo e($product->totalprice); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $count += $product->totalprice;
                ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
                    <div class="text-center p-2">
                        <span class="me-5">Total Price : IDR <?php echo e($count); ?></span>
                        <form action="<?php echo e(route('checkout', $count)); ?>" method="POST" enctype="multipart/form-data" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-outline-success me-1" onclick="return confirm('Are you sure want to Purchase this product?')">Purchase</button>
                        </form>
                    </div>
                </div>
            <?php else: ?>
                <div class="text-center mt-4 fw-bold">
                    <h3>Your Cart is Empty!</h3>
                    <a href="/"><button type="button" class="btn btn-outline-success mt-1">Shop More Product</button></a>
                </div>
            <?php endif; ?>
            <div class="d-flex justify-content-center">
                <?php echo e($products->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cstudy\Cstudy\resources\views/customer/cart.blade.php ENDPATH**/ ?>