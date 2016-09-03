<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>


<!-- Video Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_url', 'Video Url:') !!}
    {!! Form::file('video_url') !!}
</div>
<div class="clearfix"></div>

<!-- Thumb Picture Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumb_picture_url', 'Thumb Picture Url:') !!}
    {!! Form::file('thumb_picture_url') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('videos.index') !!}" class="btn btn-default">Cancel</a>
</div>
