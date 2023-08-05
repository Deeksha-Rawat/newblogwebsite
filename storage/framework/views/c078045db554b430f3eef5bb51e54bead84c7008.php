<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Alphayo Blog</title>
    <!-- Css -->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" /> 
    <!-- Font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <?php echo $__env->yieldContent('head'); ?>
  </head>
  <body>
    <div id="wrapper">
      <!-- header -->
      <?php echo $__env->yieldContent('header'); ?>

      <!-- sidebar -->
      <div class="sidebar">
        <span class="closeButton">&times;</span>
        <p class="brand-title"><a href="">Alphayo Blog</a></p>

        <div class="side-links">
        <ul>
                    <li><a class="<?php echo e(Request::routeIs('welcome.index') ? 'active' : ''); ?>"
                            href="<?php echo e(route('welcome.index')); ?>">Home</a></li>
                    <li><a class="<?php echo e(Request::routeIs('blog.index') ? 'active' : ''); ?>"
                            href="<?php echo e(route('blog.index')); ?>">Blog</a></li>
                    <li><a class="<?php echo e(Request::routeIs('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">About</a>
                    </li>
                    <li><a class="<?php echo e(Request::routeIs('contact.index') ? 'active' : ''); ?>"
                            href="<?php echo e(route('contact.index')); ?>">Contact</a></li>
                    <?php if(auth()->guard()->guest()): ?>
                        <li><a class="<?php echo e(Request::routeIs('login') ? 'active' : ''); ?>" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>
                        <li><a class="<?php echo e(Request::routeIs('register') ? 'active' : ''); ?>"
                                href="<?php echo e(route('register')); ?>">Register</a></li>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                    <li><a class="<?php echo e(Request::routeIs('dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                        </li>
                        <?php endif; ?>


            </ul>
        </div>

        <!-- sidebar footer -->
        <footer class="sidebar-footer">
          <div>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
          </div>

          <small>&copy 2021 Alphayo Blog</small>
        </footer>
      </div>
      <!-- Menu Button -->
      <div class="menuButton">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <!-- main -->
    <?php echo $__env->yieldContent('main'); ?>

      <!-- Main footer -->
      <footer class="main-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>
        <small>&copy 2021 Alphayo Blog</small>
      </footer>
    </div>

    <!-- Click events to menu and close buttons using javaascript-->
    <script>
      document
        .querySelector(".menuButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "100%";
          document.querySelector(".sidebar").style.zIndex = "5";
        });

      document
        .querySelector(".closeButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "0";
        });

    </script>

    <?php echo $__env->yieldContent('scripts'); ?>
       
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\your-project-name\resources\views/layout.blade.php ENDPATH**/ ?>