@extends('layouts.app')

@section('content')
        <h1>
            <a href="todo/{{ $todo->id }}">
                {{ $todo->text }}
            </a>
        </h1>
        <div class=" badge badge-danger"> {{ $todo->due }}</div>
        <hr>
        <p> {{$todo->body }}</p>
        <br>
        <br>
        <a href="/todo/{{ $todo->id }}/edit" class="btn btn-light">Edit</a>
        {!! Form::open(['action' => [ 'TodosController@destroy', $todo->id ], 'method' => 'DELETE',
            'class' => 'float-sm-right']) !!}

        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-warning']) }}
        {!! Form::close() !!}
        <br>
        <a href="/" class="btn btn-light">Go back</a>
    @endsection