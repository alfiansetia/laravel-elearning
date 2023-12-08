<?php $__env->startSection('container'); ?>
    <div class="container min-vh-100">
        <div class="row justify-content-center">
            <div class="row justify-content-center py-4">
                <div class="card">
                    <div class="row">
                        <div class="card-header">
                            <div>
                                <?php echo e($category->categoryName); ?> [Lebih cocok Paginate 8]
                            </div>
                        </div>

                        <div>
                            <div class="row px-3 pb-3">
                                <?php if($products->isNotEmpty()): ?>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-3 pt-3 px-2">
                                            <a href="<?php echo e(route('productdetail', $product->ProductID)); ?>" class="text-decoration-none text-black">
                                                <div class="card">
                                                    <img src="<?php echo e(asset('storage/images/'.$product->photo)); ?>" class="" alt="Product">
                                                    <div class="card-body" style = 'margin-bottom: -5px;'>
                                                        <h6 class="fw-normal "><?php echo e($product->name); ?></h6>
                                                        <h6 class="card-text fw-bold">IDR <?php echo e($product->price); ?></h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <div class="container text-center mt-3">
                                        <td class="align-middle"><h5>There is no Product!</h5></td>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <?php echo e($products->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Barbatos-Shop\resources\views/pages/productcategory.blade.php ENDPATH**/ ?>