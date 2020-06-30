<?php $__env->startSection('content'); ?>
  <p>
    <?php echo e($message); ?>

  </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('flarum.forum::layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>