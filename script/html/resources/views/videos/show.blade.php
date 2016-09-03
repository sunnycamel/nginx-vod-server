@extends('layouts.app')

@section('main-content')
    @include('videos.show_fields')

    <div class="form-group">
           <a href="{!! route('videos.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
