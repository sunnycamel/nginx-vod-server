@extends('layouts.app')

@section('main-content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New Video</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
{!! Form::open(['route' => 'videos.store', 'files' => true]) !!}

            @include('videos.fields')

        {!! Form::close() !!}
    </div>
@endsection
