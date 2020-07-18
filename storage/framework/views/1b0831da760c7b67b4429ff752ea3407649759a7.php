<?php $__env->startSection('body'); ?>
  <div class="container content">
    <h1 class="title display-1">litle word</h1>
  </div>
<?php echo $__env->make('/partials/_add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('/partials/_cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/mains', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saturnin/Documents/demo/resources/views/welcome.blade.php ENDPATH**/ ?>