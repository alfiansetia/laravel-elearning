<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container min-vh-100">
        
        <form action="/search">
            <div class="input-group mb-3 mt-2">
                <input type="text" class="form-control" placeholder="Search" name="search" value="<?php echo e(request('search')); ?>">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-search"></i>
                </button>
            </div>
        </form>

        <div class="row justify-content-center">
            <div class="row justify-content-center mt-1 my-3">
                <div class="card">
                    <div class="row">

                        <div class="card-header">
                            <div>
                                Search Result
                            </div>
                        </div>

                        <div>
                            <div class="row px-2 pb-3">
                                <?php if($products->isNotEmpty()): ?>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-3 pt-3 px-2">
                                            <a href="<?php echo e(route('productdetail', $product->ProductID)); ?>" class="text-decoration-none text-black">
                                                <div class="card">
                                                    <img src="<?php echo e(asset('storage/images/'.$product->photo)); ?>" class="kartu card-img-top" alt="Product">
                                                    <div class="card-body" style = 'margin-bottom: -5px;'>
                                                        <h6 class="fw-normal "><?php echo e(Str ::limit($product->name, 25)); ?></h6>
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
            <div class="d-flex justify-content-center pb-5">
                <?php echo e($products->links()); ?>

            </div>
        </div>
    </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom pt-1 pb-1" style="background-color: white;">
        <div class="text-center p-2 fw-bold" style="color: black">
            © 2023 CStudy
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cstudy\Cstudy\resources\views/pages/search.blade.php ENDPATH**/ ?>