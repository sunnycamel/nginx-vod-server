<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('videos.show_fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="form-group">
           <a href="<?php echo route('videos.index'); ?>" class="btn btn-default">Back</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>