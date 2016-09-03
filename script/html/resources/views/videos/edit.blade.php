@extends('layouts.app')

@section('main-content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Video</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($video, ['route' => ['videos.update', $video->id], 'method' => 'patch']) !!}

            @include('videos.editfields')

            {!! Form::close() !!}
        </div>
@endsection
