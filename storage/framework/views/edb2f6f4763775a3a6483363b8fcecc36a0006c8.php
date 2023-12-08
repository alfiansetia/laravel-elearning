<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container d-flex justify-content-center min-vh-100 pt-3">
        <div class="marginbottom col-lg-8">
            
            <?php if(count($products) > 0): ?>
            <div class="accordion" id="accordionExample">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="heading<?php echo e($product->HeaderTransactionID); ?>">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($product->HeaderTransactionID); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($product->HeaderTransactionID); ?>">
                            Transaction Date <?php echo e($product->created_at); ?>

                        </button>
                    </h2>
                    <div id="collapse<?php echo e($product->HeaderTransactionID); ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo e($product->HeaderTransactionID); ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-sm table-borderless p-0 m-0">
                                <thead>
                                    <tr>
                                        <td colspan="3" class="col-lg-7 p-0 m-0"><h5>Name</h5></td>
                                        <td colspan="1" class="p-0 m-0"><h5>Quantity</h5></td>
                                        <td colspan="2" class="p-0 m-0"><h5>Sub Price</h5></td>
                                    </tr>
                                </thead>
                                <tbody class="table table-bordered">
                                <?php
                                    $count = 0;
                                    $totalprice = 0;
                                ?>
                                    <?php $__currentLoopData = $product->transactionDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $count += $item->quantity;
                                            $totalprice += $item->subtotal;
                                        ?>
                                        <tr >
                                            
                                            <td colspan="3" class="p-0 m-0"><?php echo e($item->product->name); ?></td>
                                            <td colspan="1"><?php echo e($item->quantity); ?></td>
                                            <td colspan="2"><?php echo e($item->subtotal); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <thead class="table-bordered" >
                                        <tr>
                                            <td colspan="3" class="p-0 m-0"><h5>Total</h5></td>
                                            <td colspan="1"><h5><?php echo e($count); ?> Item(s)</h5></td>
                                            <td colspan="2"><h5>IDR <?php echo e($totalprice); ?></h5></td>
                                        </tr>
                                    </thead>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php else: ?>
                <div class="text-center mt-4 fw-bold">
                    <h3>Your History is Empty!</h3>
                    <a href="/"><button type="button" class="btn btn-outline-success mt-1">Shop More Product</button></a>
                </div>
            <?php endif; ?>
        </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
        <div class="text-center p-2 fw-bold" style="color: #023C82">
            © 2022 Sanskuy
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cstudy\Cstudy\resources\views/customer/history.blade.php ENDPATH**/ ?>