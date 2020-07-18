
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>litle Word</title>
    <?php echo $__env->make('layout/partials/p_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
  <?php echo $__env->yieldContent('body'); ?>

  <?php echo $__env->make('layout/partials/p_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH /home/saturnin/Documents/demo/resources/views/layout/mains.blade.php ENDPATH**/ ?>