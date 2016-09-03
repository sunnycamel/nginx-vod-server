<?php $__env->startSection('main-content'); ?>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Video</h1>
            </div>
        </div>

        <?php echo $__env->make('core-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="row">
            <?php echo Form::model($video, ['route' => ['videos.update', $video->id], 'method' => 'patch']); ?>


            <?php echo $__env->make('videos.editfields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo Form::close(); ?>

        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>