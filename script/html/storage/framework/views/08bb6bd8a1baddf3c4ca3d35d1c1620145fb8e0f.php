<table class="table table-responsive" id="videos-table">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Video Url</th>
        <th>Thumb Picture Url</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td><?php echo $video->title; ?></td>
            <td><?php echo $video->description; ?></td>
            <td><?php echo $video->video_url; ?></td>
            <td><?php echo $video->thumb_picture_url; ?></td>
            <td>
                <?php echo Form::open(['route' => ['videos.destroy', $video->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('videos.show', [$video->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('videos.edit', [$video->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
