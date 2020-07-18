<div class="container-fluid content">
  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <!--debut cart -->
    <div class="card" style="width: 18rem;">
      <div class="card-body">
          <h5 class="card-title"><?php echo e($value->title); ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?php echo e($value->name); ?></h6>
          <p class="card-text"><?php echo e($value->texte); ?></p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link"><i class="fa fa-heart"></i></a>
      </div>
    </div>
  <!--fin cart -->
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/saturnin/Documents/demo/resources/views//partials/_cards.blade.php ENDPATH**/ ?>