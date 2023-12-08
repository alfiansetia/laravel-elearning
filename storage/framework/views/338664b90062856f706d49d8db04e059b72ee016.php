<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid m-0 p-0" style="height: 83vh;">
    <div class="container">
        <div class="text-center">
            <div class="d-flex justify-content-center mt-5">
                <h2>What is</h2>
                <img src="<?php echo e(asset('storage/images/bantu_kios-01.png')); ?>" width="188" height="42" alt="Logo">
            </div>
            <p class="m-0 p-0 pb-5">
                
                BantuKios is an application created to help various types of MSMEs/(Micro Small and Medium-Sized Enterprises) in Indonesia, starting from culinary, furniture, etc. MSMEs (Micro Small and Medium-Sized Enterprises) On the BantuKios Website, we will display all items for sale in certain stores to help with sales.
            </p>
        </div>
    </div>
    <div class="latarabout container-fluid m-0 p-0 text-white">
        <h2 class="text-center pt-3 mb-0 pb-0 pb-2">Our Team</h2>
        <div class="container team-section">
            <div></div>
            <div class="team-member">
                <img src="<?php echo e(asset('storage/images/foto.jpeg')); ?>" class="responsive-img img-thumbnail rounded-circle">
                <h4>Briliyan Sanjaya Hartono</h4>
                <p>2440042954</p>
            </div>
            <div class="team-member">
                <img src="<?php echo e(asset('storage/images/2Q.png')); ?>" class="responsive-img img-thumbnail rounded-circle">
                <h4>Steven Mario Ledres</h4>
                <p>2401960492</p>
            </div>
            <div class="team-member">
                <img src="<?php echo e(asset('storage/images/download.jpeg')); ?>" class="responsive-img img-thumbnail rounded-circle">
                <h4>Daniel Justine</h4>
                <p>2401961412</p>
            </div>
            <div class="team-member">
                <img src="<?php echo e(asset('storage/images/jeta.jpg')); ?>" class="responsive-img img-thumbnail rounded-circle">
                <h4>Jeta Adhisatya</h4>
                <p>2440044070</p>
            </div>
            <div class="team-member">
                <img src="<?php echo e(asset('storage/images/hansen.png')); ?>" class="responsive-img img-thumbnail rounded-circle">
                <h4>Hansen</h4>
                <p>2440012895</p>
            </div>
        </div>
    </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
        <div class="text-center p-2 fw-bold" style="color: #023C82">
            © 2022 Sanskuy
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\brili\Downloads\BantuKios\resources\views/pages/about.blade.php ENDPATH**/ ?>