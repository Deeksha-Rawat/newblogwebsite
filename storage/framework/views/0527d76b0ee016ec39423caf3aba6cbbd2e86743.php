


<?php $__env->startSection('header'); ?>

<header class="header" style="background-image: url(<?php echo e(asset('images/photography.jpg')); ?>)">
        <div class="header-text">
          <h1>Alphayo Blog</h1>
          <h4>Dashboard of verified news...</h4>
        </div>
        <div class="overlay"></div>
      </header>
     

      <?php $__env->stopSection(); ?>


      <?php $__env->startSection('main'); ?>
 <!-- main -->
 <main class="container">
        <h2 class="header-title">Latest Blog Posts</h2>
        <section class="cards-blog latest-blog">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card-blog-content">
          <img src="<?php echo e(asset('storage/postImages/fnC9ES7y79zIRnrLtHEnqeWB2D68l3ctmmSwvP4l.png')); ?>" alt="" />
          
          <p>
           <?php echo e($post->created_at->diffForHumans()); ?>

            <span>Written By <?php echo e($post->user->name); ?></span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="<?php echo e(route('blog.show', $post)); ?>"><?php echo e($post->title); ?></h4>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
      </main>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\your-project-name\resources\views/welcome.blade.php ENDPATH**/ ?>