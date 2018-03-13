@extends('layouts.app')

@section('content')
    <h1>Edit Todo</h1>
    {!! Form::open(['action' => [ 'TodosController@update', $todo->id ], 'method' => 'PUT']) !!}
    {{ Form::bsText('text', $todo->text) }}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
    <a href="/" class="btn btn-light">Go back</a>
@endsection