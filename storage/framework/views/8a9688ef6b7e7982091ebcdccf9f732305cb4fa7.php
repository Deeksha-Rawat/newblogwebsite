

<?php $__env->startSection('main'); ?>
 <!-- main -->
 <main class="container">
      <section class="single-blog-post">
        <h1><?php echo e($post->title); ?></h1>

        <p class="time-and-author">
        <?php echo e($post->created_at->diffForHumans()); ?>

          <span>Written By <?php echo e($post->user->name); ?></span>
        </p>

        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="<?php echo e(asset($post->imagePath)); ?>" alt="" />
        </div>

        <div class="about-text">
        <?php echo $post->body; ?>

        </div>
      </section>
      <section class="recommended">
        <p>Related</p>
        <div class="recommended-cards">
          <a href="">
            <div class="recommended-card">
              <img src="<?php echo e(asset('images/pic5.jpg')); ?>" alt="" loading="lazy" />
              <h4>
                12 Health Benefits Of Pomegranate Fruit
              </h4>
            </div>
          </a>
          <a href="">
            <div class="recommended-card">
              <img src="<?php echo e(asset('images/pushups.jpg')); ?>" alt="" loading="lazy" />
              <h4>
                The Truth About Pushups
              </h4>
            </div>
          </a>
          <a href="">
            <div class="recommended-card">
              <img src="<?php echo e(asset('images/smoothies.jpg')); ?>" alt="" loading="lazy" />
              <h4>
                Healthy Smoothies
              </h4>
            </div>
          </a>

        </div>
      </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\your-project-name\resources\views/blogPosts/single-blog-post.blade.php ENDPATH**/ ?>