<div class="shadow bg-body-tertiary bg-white sticky-top">

    <nav class="navbar navbar-expand-lg navbar-light">

        <div class="container">
            <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" style="color: #023C82" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                        </a>
                        <ul class="dropdown-menu">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a class="dropdown-item" href="/category/<?php echo e($category->CategoryID); ?>"><?php echo e($category->categoryName); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                </ul>

                
            
                <ul class="navbar-nav d-flex">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user')): ?>
                    
                        <li>
                            <a href="/cart" class="nav-link" aria-current="page">
                                <i class="fas fa-shopping-cart"></i>
                                
                            </a>
                        </li>
                    
                    <?php endif; ?>
    
                    <li class="nav-item dropdown">
                        
                        <?php if(auth()->guard()->check()): ?>
                            <a class="nav-link dropdown-toggle pe-0 fw-bold" style="color: #023C82" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?>

                            </a>
                        <?php endif; ?>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user')): ?>
                                <li><a class="dropdown-item" href="/history">History</a></li>
                            <?php endif; ?>
                            <li>
                                <form action="/logout" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button class="dropdown-item" type="submit" href="/logout">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
    
                    <?php if(auth()->guard()->guest()): ?>
                        <li>
                            <a href="/login" class="nav-link fw-bold" aria-current="page">Login</a>
                        </li>
                        <li>
                            <a href="/register" class="nav-link pe-0 fw-bold" aria-current="page">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>


</div>
<?php /**PATH C:\xampp\htdocs\Cstudy\resources\views/components/navbar.blade.php ENDPATH**/ ?>