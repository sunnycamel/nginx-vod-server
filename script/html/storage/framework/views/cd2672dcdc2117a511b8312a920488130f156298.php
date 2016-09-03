<!DOCTYPE html>
<html lang="en">

<?php $__env->startSection('htmlheader'); ?>
    <?php echo $__env->make('layouts.partials.htmlheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>

<body class="skin-blue sidebar-mini">
  <div class="wrapper">
    <?php echo $__env->make('layouts.partials.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">      
        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          <?php echo $__env->yieldContent('main-content'); ?>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
  </div><!-- ./wrapper -->

  <?php $__env->startSection('scripts'); ?>
  <?php echo $__env->make('layouts.partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->yieldSection(); ?>

</body>
</html>
