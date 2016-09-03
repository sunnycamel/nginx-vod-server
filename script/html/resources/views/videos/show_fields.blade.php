<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $video->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $video->title !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $video->description !!}</p>
</div>

<!-- Video Url Field -->
<div class="form-group">
    {!! Form::label('video_url', 'Video Url:') !!}
    <p>{!! $video->video_url !!}</p>
</div>

<!-- Thumb Picture Url Field -->
<div class="form-group">
    {!! Form::label('thumb_picture_url', 'Thumb Picture Url:') !!}
    <p>{!! $video->thumb_picture_url !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $video->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $video->updated_at !!}</p>
</div>

