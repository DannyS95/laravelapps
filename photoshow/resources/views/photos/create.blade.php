@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' =>
    'multipart/form-data']) !!}
    <h3>Upload Photo</h3>
    {{ Form::text('title', '', ['placeholder' => 'Title Name']) }}
    {{ Form::textArea('description', '', ['placeholder' => 'Photo Description']) }}
    {{ Form::hidden('album_id', $album_id) }}
    {{ Form::file('photo') }}
    {{ Form::submit('Submit') }}
    {!! Form::close() !!}

@endsection