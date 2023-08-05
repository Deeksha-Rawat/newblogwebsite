

<?php $__env->startSection('head'); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

   <?php $__env->stopSection(); ?> 

<?php $__env->startSection('main'); ?>


<main class="container" style="background-color:white">
<section id="contact-us">
    <h1 style="padding-top:50px;">Edit Post!</h1>

    <?php if(session('status')): ?>
        <p style="color:white; font-size:18px;font-weigth:500;;background:#1abd1a;padding:10px;margin-bottom:10px;border-radius:10px"><?php echo e(session('status')); ?></p>
    <?php endif; ?>
    <div class="contact-form">
        <form action="<?php echo e(route('blog.update',$post)); ?>" method="post" enctype="multipart/form-data">
            <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>    
        <label for="title"><span>Title</span></label>
            <input type="text" id="title" name="title" value="<?php echo e($post->title); ?>"/>

            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color:red;margin-bottom:25px"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="image"><span>Image</span></label>
            <input type="file" id="image" name="image"/>
            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color:red;margin-bottom:25px"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="body"><span>Body</span></label>
            <textarea  id="body" name="body"><?php echo e($post->body); ?></textarea>
            <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p style="color:red;margin-bottom:25px;margin-top:10px"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <input type="submit" value ="Submit"/>
            

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
        ClassicEditor
                .create( document.querySelector( '#body' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\your-project-name\resources\views/blogPosts/edit-blog-post.blade.php ENDPATH**/ ?>