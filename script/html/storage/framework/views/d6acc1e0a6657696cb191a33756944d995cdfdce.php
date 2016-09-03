<?php $__env->startSection('main-content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Video</h1>
        </div>
    </div>

    <?php echo $__env->make('core-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
<?php echo Form::open(['route' => 'videos.store', 'files' => true]); ?>


            <?php echo $__env->make('videos.fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>