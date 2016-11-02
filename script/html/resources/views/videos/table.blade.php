<table class="table table-responsive" id="videos-table">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Video Url</th>
        <th>Thumb Picture Url</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($videos as $video)
        <tr>
            <td>{!! $video->title !!}</td>
            <td>{!! $video->description !!}</td>
            <td>{!! $video->video_url !!}</td>
            <td><img src="{!! $video->thumb_picture_url !!}">  width="120"</img></td>
            <td>
                {!! Form::open(['route' => ['videos.destroy', $video->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('videos.show', [$video->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('videos.edit', [$video->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
