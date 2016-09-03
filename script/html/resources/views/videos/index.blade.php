@extends('layouts.app')

@section('main-content')
        <h1 class="pull-left">Videos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('videos.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('videos.table')
        
@endsection
