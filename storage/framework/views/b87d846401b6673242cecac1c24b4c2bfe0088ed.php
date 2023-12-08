

<?php $__env->startSection('container'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    body {
        font-family: 'Arial', sans-serif;
    }

    .jumbotron {
        background: linear-gradient(45deg, #19d3ae, #7e3af2);
        color: #fff;
        padding: 4rem 2rem;
        margin-bottom: 0;
        border-radius: 0;
    }

    .jumbotron h1 {
        font-size: 3.5rem;
    }

    .lead {
        font-size: 1.25rem;
    }

    .card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: transform 0.2s, box-shadow 0.2s;
        margin-bottom: 20px;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        font-size: 2rem;
        color: #19d3ae;
        margin-bottom: 10px;
    }

    .feature-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .feature-description {
        font-size: 1rem;
        color: #555;
    }
</style>

<!-- Jumbotron -->
<div class="jumbotron text-center">
    <div class="container">
        <h1 class="display-4">About CStudy</h1>
        <p class="lead">Empowering beginners to code through gamified learning experiences.</p>
    </div>
</div>

<!-- About Us Content -->
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <p class="text-center mt-5">CStudy is not just another online learning platform; it's an interactive journey into the world of coding designed especially for beginners. We understand that learning to code can be challenging, so we've incorporated gamification to make the process engaging and enjoyable.</p>
            <p class="text-center">Our mission is to provide a supportive and fun environment for beginners to develop their coding skills. We believe that by adding game-like elements to the learning process, we can motivate and inspire learners to stay committed to their coding journey.</p>
            <p class="text-center">Join CStudy today and embark on a coding adventure like never before!</p>
        </div>
    </div>

    <!-- Gamification Features -->
    <h2 class="text-center mt-5 mb-3">Why Choose CStudy?</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card p-4">
                <div class="feature-icon">🌟</div>
                <h5 class="feature-title">Points System</h5>
                <p class="feature-description">Earn points for completing lessons and challenges. Track your progress and compete with friends.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <div class="feature-icon">🏆</div>
                <h5 class="feature-title">Achievements</h5>
                <p class="feature-description">Unlock achievements for reaching milestones in your learning journey. Celebrate your accomplishments!</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <div class="feature-icon">🚀</div>
                <h5 class="feature-title">Leaderboards</h5>
                <p class="feature-description">Compete with other learners on the leaderboard. See who's at the top and challenge yourself to climb higher.</p>
            </div>
        </div>
    </div>

    
    <div class="shadowtop text-center text-lg-start pt-1 pb-1" style="background-color: rgba(255, 255, 255, 0.9); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="text-center p-2 fw-bold" style="color: black">
            CStudy 2023
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SKripsi\CstudySkripsi\resources\views/pages/about.blade.php ENDPATH**/ ?>