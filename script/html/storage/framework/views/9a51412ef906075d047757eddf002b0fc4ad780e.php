<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $video->id; ?></p>
</div>

<!-- Title Field -->
<div class="form-group">
    <?php echo Form::label('title', 'Title:'); ?>

    <p><?php echo $video->title; ?></p>
</div>

<!-- Description Field -->
<div class="form-group">
    <?php echo Form::label('description', 'Description:'); ?>

    <p><?php echo $video->description; ?></p>
</div>

<!-- Video Url Field -->
<div class="form-group">
    <?php echo Form::label('video_url', 'Video Url:'); ?>

    <p><?php echo $video->video_url; ?></p>
</div>

<!-- Thumb Picture Url Field -->
<div class="form-group">
    <?php echo Form::label('thumb_picture_url', 'Thumb Picture Url:'); ?>

    <p><?php echo $video->thumb_picture_url; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $video->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $video->updated_at; ?></p>
</div>

